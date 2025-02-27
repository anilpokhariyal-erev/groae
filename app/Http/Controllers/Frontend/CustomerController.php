<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Assets\ResponseMessage;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\UploadUpdateRequest;
use App\Rules\NewPasswordNotMatchPrevious;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CustomerDownload;
use App\Models\FixedFee;
use App\Models\PackageBooking;
use App\Models\PackageBookingDetail;
use App\Models\Setting;

class CustomerController extends Controller
{
    public function view_profile()
    {
        $customer =  Auth::guard('customer')->user();
        $countries = Country::all();
        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();

        return view('frontend.customer.my_profile')->with(compact('customer', 'countries', 'pending_detail_count', 'pending_document_count','package_bookings_count'));
    }

    public function update_profile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = auth()->guard('customer')->user();
        $user->fill($request->validated())->save();
        return Redirect::route('customer.profile.view')->with('success', ResponseMessage::PROFILE_UPDATED);
    }

    public function settings()
    {
        $customer =  Auth::guard('customer')->user();
        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();
        return view('frontend.customer.my_settings')->with(compact('customer', 'pending_detail_count', 'pending_document_count','package_bookings_count'));
    }
    
    public function change_password(Request $request)
    {
        $user = auth()->guard('customer')->user();
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', Password::min(6)->mixedCase()->letters()->numbers(), new NewPasswordNotMatchPrevious],
            'confirmed_new_password' => ['required', 'same:new_password'],
        ]);
        try {
            $user->update(['password' => Hash::make($request->new_password)]);
            return back()->with('success', ResponseMessage::PASSWORD_UPDATE_SUCCESS);
        } catch (\Exception $e) {
            return back()->with('error', ResponseMessage::WrongMsg);
        }
    }

    function view_details()
    {
        // Get the authenticated user
        $customer = Auth::guard('customer')->user()->load(['customer_documents' => function ($query) {
            $query->where('request_type', 'detail');
        }]);

        $not_verified = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected', 'submitted'])->get();
        $verified = $customer->customer_documents()->where('request_type', 'detail')->where('status', 'approved')->get();
        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();

        // return response()->json(compact('not_verified', 'verified', 'pending_detail_count'));

        // return response()->json($customer);

        // Return the customer details page
        return view('frontend.customer.my_details')->with(compact('customer', 'not_verified', 'verified', 'pending_detail_count', 'pending_document_count', 'package_bookings_count'));
    }

    function update_details(Request $request)
    {
        $request->validate([
            'documents' => ['required', 'array'],
            'documents.*' => ['required', 'array'],
            'documents.*.*' => ['required', 'string', 'max:255'],
        ]);

        $customer =  Auth::guard('customer')->user();

        foreach ($request->documents as $value) {
            $customer->customer_documents()->where('id', key($value))->update([
                'value' => current($value),
                'status' => 'submitted'
            ]);
        }

        return back()->with('success', 'Requested details has been submitted.');
    }

    function view_uploads(Request $request)
    {
        // Get the authenticated user
        $customer = Auth::guard('customer')->user()->load('customer_documents');

        // Count pending details and document requests
        $pending_detail_count = $customer->customer_documents()
            ->where('request_type', 'detail')
            ->whereIn('status', ['requested', 'rejected'])
            ->count();

        $pending_document_count = $customer->customer_documents()
            ->where('request_type', 'document')
            ->whereIn('status', ['requested', 'rejected'])
            ->count();

        // Retrieve 'show_pending' parameter from the request, default to 1
        $show_pending = $request->query('show_pending', 1);

        // Filter documents based on 'show_pending'
        $query = $customer->customer_documents()->where('request_type', 'document');
        if ($show_pending == 1) {
            $query->whereIn('status', ['requested', 'rejected']);
        }
        $customer_documents = $query->paginate(3); // Adjust pagination count as needed

        $package_bookings_count = $customer->package_bookings()
            ->where('status', 2)
            ->where('payment_status', '!=', '1')
            ->count();

        // Return the customer uploads page with paginated data
        return view('frontend.customer.my_uploads')->with(compact(
            'customer',
            'pending_detail_count',
            'pending_document_count',
            'customer_documents',
            'package_bookings_count',
            'show_pending' // Pass 'show_pending' to the view
        ));
    }

    function update_uploads(UploadUpdateRequest $request)
    {
        $user = auth()->guard('customer')->user();
        $uploads = $request->file('uploads');

        foreach ($uploads as $key => $file) {
            $documentId = explode('_', $key)[1];
            $filePath = $user->uuid . '/' . time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            $file->storeAs('customer_documents', $filePath);

            $user->customer_documents()->where('id', $documentId)->update([
                'value' => 'customer_documents|' . str_replace('/', '|', $filePath),
                'status' => 'submitted'
            ]);
        }

        return back()->with('success', 'Documents uploaded successfully.');
    }

    function delete_uploads($id)
    {
        $customer = Auth::guard('customer')->user();

        $doc = $customer->customer_documents()->where('id', $id)->first();

        if (!$doc) abort(404);
        if ($doc->value)
            Storage::delete(str_replace('|', '/', $doc->value));

        $doc->status = 'requested';
        $doc->value = NULL;
        $doc->save();

        return back()->with('success', 'Document deleted successfully.');
    }

    function view_booking_requests()
    {
        $customer = Auth::guard('customer')->user();
        $freezones = $customer->freezone_bookings->load('freezone', 'license');

        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();

        // Paginate the package bookings (e.g., 10 per page)
        $package_bookings = $customer->package_bookings()->orderBy('id', 'desc')->paginate(4);
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();

        return view('frontend.customer.my_booking_requests')->with(compact('customer', 'pending_detail_count', 'pending_document_count', 'freezones', 'package_bookings','package_bookings_count'));
    }


    function view_transactions(Request $request)
    {
        $customer =  Auth::guard('customer')->user();

        $transactions = $customer->transactions();

        if ($request->search)
            $transactions->where('transaction_id', 'LIKE', "%{$request->search}%");

        $transactions = $transactions->orderBy('id','desc')->paginate(3);

        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();

        return view('frontend.customer.my_transactions')->with(compact('pending_detail_count', 'pending_document_count', 'transactions', 'package_bookings_count'));
    }

    function view_downloads()
    {
        $customer =  Auth::guard('customer')->user();

        $downloads = $customer->customer_downloads()->where('status', 1)->paginate(3);

        $pending_detail_count = $customer->customer_documents()->where('request_type', 'detail')->whereIn('status', ['requested', 'rejected'])->count();
        $pending_document_count = $customer->customer_documents()->where('request_type', 'document')->whereIn('status', ['requested', 'rejected'])->count();
        $package_bookings_count = $customer->package_bookings()->where('status',2)->where('payment_status','!=','1')->count();

        return view('frontend.customer.my_downloads')->with(compact('pending_detail_count', 'pending_document_count', 'downloads','package_bookings_count'));
    }



    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function view_invoice($id)
    {
        $booking = PackageBooking::with('bookingDetails')
                    ->where('id', $id)
                    ->orderBy('created_at','desc')
                    ->first();
        $fixedFees = FixedFee::where('status',1)->get();
        $company_info = Setting::where('section_key', 'company_info')
                        ->pluck('value', 'title')
                        ->toArray();
        $adjustments = PackageBookingDetail::where('package_booking_id', $id)
                        ->where('attribute_name', 'Adjustments')
                        ->first();
        
        $customer =  Auth::guard('customer')->user();
        if($customer->id != $booking->customer_id) {
            return abort(401);
        }
        return view('frontend.customer.invoice', compact('booking', 'fixedFees','company_info', 'adjustments'));
    }


    public function download_document($id)
    {
        $download = CustomerDownload::findOrFail($id);

        // Construct the file path based on your storage structure
        $filePath =  $filePath = str_replace('|', '/', $download->value);
        
        // Use Laravel's Storage facade to locate the file
        if (Storage::exists($filePath)) {
            return Storage::download($filePath, $download->name);
        }

        return redirect()->back()->with('error', 'File not found.');
    }


}
