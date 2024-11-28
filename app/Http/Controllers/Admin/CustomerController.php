<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Assets\Utils;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Exports\ExportCustomer;
use App\Models\ProcessDocument;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\CustomerLoginRequest;
use Illuminate\Validation\Rules\Password as RulesPassword;

class CustomerController extends Controller
{

    public function index(Request $request)
    {

        $customers = Customer::orderBy('id', 'desc');

        if ($request->start_date && !$request->end_date) {
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if ($request->end_date && !$request->start_date) {
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ],[
            'start_date' => 'The selected date is incorrect.'
        ]);

        if ($request->start_date) {
            $customers = $customers->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        }

        if ($request->name) {
            $customers = $customers->where("name", "LIKE", "%{$request->name}%")
                                    ->orWhere("mobile_number", "LIKE", "%{$request->name}%")
                                    ->orWhere("email", "LIKE", "%{$request->name}%");
        }

        if ($request->export) {
            $customers = $customers->join('states', 'customers.state_id', '=', 'states.id')
                            ->join('countries', 'customers.country_id', '=', 'countries.id')
                            ->select('customers.id', 'customers.name', 'customers.email', 'customers.city', 'states.name as state', 'countries.name as country', 'customers.pincode', 'customers.uae_residence', 'customers.mobile_number', 'customers.status')
                            ->get();
            return Excel::download(new ExportCustomer($customers), 'customers.xlsx');
        }

        $customers = $customers->get();

        return view('admin.customer.customer_index', compact('customers'));
    }


    public function ajaxSelectCustomer(Request $request)
    {
        $query = $request->get('query');
        $data = Customer::select('id', 'name', 'email')->where('name', 'like', '%' . $query . '%')->get();

        return response()->json($data);
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:100',
                'email' => 'required|email|max:255|unique:customers',
                'city' => 'nullable|string|max:50',
                'state' => 'nullable|string|max:50',
                'country' => 'nullable|string|max:50',
                'pincode' => 'nullable|max:50',
                'uae_residence' => 'required|boolean',
                'mobile_number' => 'nullable|string|max:15|min:7',
                'proof_document' => 'nullable|file|mimes:jpeg,png,jpg,svg,doc,docx,pdf|max:10000'
            ]);

            $proof_document = null;

            if ($request->file('proof_document')) {
                $proof_document = $request->file('proof_document')->store('public/freezone/customer_proof_document');
            }

            $customer = new Customer;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->uae_residence = $request->uae_residence;
            $customer->city = $request->city;
            $customer->state = $request->state;
            $customer->country = $request->country;
            $customer->pincode = $request->pincode;
            $customer->mobile_number = $request->mobile_number;
            $customer->proof_document = $proof_document;
            $customer->save();

            return response()->json(['message' => ResponseMessage::CustomerCreated, 'data' => $customer], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function register_customer(Request $request): RedirectResponse
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'middle_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'type' => ['required', 'in:customer,partner'],
            'pincode' => ['nullable', 'max:15'],
            'city' => ['nullable', 'string', 'max:50'],
            'state' => ['nullable', 'string', 'max:50'],
            'country' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:15', 'min:7'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Customer::class],
            'password' => ['required', 'confirmed', RulesPassword::min(6)->mixedCase()->letters()->numbers()]
        ]);

        $customer = Customer::create([
            'name' => $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'type' => $request->type,
            'pincode' => $request->pincode,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'address' => $request->address,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('customer')->login($customer);

        return redirect('/');
    }

    public function login(CustomerLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->back();
    }

    public function show(string $uuid)
    {
        $customer = Customer::where('uuid', $uuid)->first();

        if ($customer) {
            $customerProcessRequest = ProcessDocument::select('id', 'request_type', 'created_at', 'status')
                ->where('customer_id', $customer->id)
                ->where('status', 'pending')
                ->orderBy('id', 'desc')->limit(1)->get();

            return view('admin.customer.customer_show', compact('customer', 'customerProcessRequest'));
        }
        return abort(404);
    }


    public function selectedCustomerDocuments(string $uuid)
    {
        $customer = Customer::select('id')->where('uuid', $uuid)->first();

        if ($customer) {
            $customerProcessRequest = ProcessDocument::select('id', 'uuid', 'request_type', 'created_at', 'status')->where('customer_id', $customer->id)->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

            return view('admin.customer.customer_document_requests', compact('customer', 'customerProcessRequest'));
        }
        return abort(404);
    }


    public function update_status(string $uuid, string $status)
    {
        $customer = Customer::select('id','status')->where('uuid', $uuid);

        if (!$customer->first()) {
            return abort(404);
        }

        if ($status == 'block') {
            $customer->update(['status'=>0]);
        }

        if ($status == 'unblock') {
            $customer->update(['status'=>1]);
        }

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }

    public function destroy(string $uuid)
    {
        $customer = Customer::select('id')->where('uuid', $uuid)->first();

        if (!$customer) {
            return abort(404);
        }

        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
    }
}
