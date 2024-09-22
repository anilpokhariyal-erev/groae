<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Assets\Utils;
use App\Models\Freezone;
use Illuminate\Http\Request;
use App\Exports\ExportFreezoneUser;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function subadmin_index()
    {
        $users = User::where('user_type', 'sub_admin');
        $users = $users->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

        return view('admin.user.subadmin_user_index', compact('users'));
    }

    public function freezone_index(Request $request)
    {
        if(Auth::user()->freezone_id){
            $users = User::where('user_type', 'freezone_admin')->where('freezone_id', Auth::user()->freezone_id);
        } else {
            $users = User::where('user_type', 'freezone_admin');
        }

        if($request->start_date && !$request->end_date){ 
            $request->merge(['end_date' => now()->format('Y-m-d')]);
        }

        if($request->end_date && !$request->start_date){ 
            $request->merge(['start_date' => now()->format('Y-m-d')]);
        }

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ]);

        if($request->start_date){
            $users = $users->whereBetween('created_at', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59']);
        }

        if($request->name){ 
            $users = $users->where('first_name', 'LIKE', "%{$request->name}%");
        }

        if($request->export){ 
            $users = $users->select('first_name','last_name','email','mobile_number','designation','status')->get();
            return Excel::download(new ExportFreezoneUser($users), 'users.xlsx');
        }

        $users = $users->paginate(Utils::itemPerPage);

        return view('admin.user.freezone_user_index', compact('users'));
    }

    public function subadmin_create()
    {
        $roles = Role::where('type', '!=', 'superadmin')->get();

        return view('admin.user.subadmin_user_create', compact('roles'));
    }

    public function freezone_create()
    {
        $roles = Role::where('type', '!=', 'superadmin')->get();
        $freezones = Freezone::select('id', 'name')->get();
        
        return view('admin.user.freezone_user_create', compact('roles', 'freezones'));
    }

    public function subadmin_store(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Password::min(6)->mixedCase()->letters()->numbers()],
            'mobile_number' => ['nullable', 'string', 'max:15', 'min:7'],
            'designation' => ['nullable', 'string', 'max:250'],
            'user_role' => ['required', 'string', 'exists:roles,uuid'],
            'status' => ['required', 'boolean']
        ],[
            'user_role' => 'Please select the user role.',
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name.' '.$request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->user_type = 'sub_admin';
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();

        $superadminRole = Role::where('type', '!=', 'superadmin')->where('uuid', $request->user_role)->first();
        $user->assignRole($superadminRole);

        return redirect()->route('subadmin-users.index')->with('success', 'User created successfully');
    }

    public function freezone_store(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Password::min(6)->mixedCase()->letters()->numbers()],
            'mobile_number' => ['nullable', 'string', 'max:15', 'min:7'],
            'designation' => ['nullable', 'string', 'max:250'],
            'status' => ['required', 'boolean'],
            'freezones' => ['required', 'integer'],
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name.' '.$request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->user_type = 'freezone_admin';
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->freezone_id = $request->freezones;
        $user->save();

        $superadminRole = Role::where('type', 'freezoneadmin')->first();
        $user->assignRole($superadminRole);

        return redirect()->route('freezone-users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function subadmin_edit(string $uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if($user){
            $roles = Role::where('type', '!=', 'superadmin')->get();
            return view('admin.user.subadmin_user_edit', compact('user', 'roles'));
        }
        return abort(404);
    }

    public function freezone_edit(string $uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if($user){
            $freezones = Freezone::select('id', 'name')->get();
            return view('admin.user.freezone_user_edit', compact('user', 'freezones'));
        }
        return abort(404);
    }


    public function subadmin_update(Request $request, string $uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if(!$user){
            return abort(404);
        }

        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'mobile_number' => 'nullable|string|max:15|min:7',
            'email' => 'nullable|email|unique:users,email,'.$user->id,
            'designation' => 'nullable|string|max:250',
            'user_role' => 'required|string|exists:roles,uuid',
            'status' => 'required|boolean'
        ],[
            'user_role' => 'Please select the user role.',
        ]);
        
        if(!empty($request->password)){
            $request->validate([
                'password' => [Password::min(6)->mixedCase()->letters()->numbers()],
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name.' '.$request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->status = $request->status;
        $user->save();

        $user->syncRoles([]);
        $superadminRole = Role::where('type', '!=', 'superadmin')->where('uuid', $request->user_role)->first();
        $user->assignRole($superadminRole);

        return back()->with('success', 'User Updated successfully');

    }


    public function freezone_update(Request $request, string $uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if(!$user){
            return abort(404);
        }

        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'mobile_number' => 'nullable|string|max:15|min:7',
            'email' => 'nullable|email|unique:users,email,'.$user->id,
            'designation' => 'nullable|string|max:250',
            'status' => 'required|boolean',
            'freezones' => 'required|integer',
        ]);

        if(!empty($request->password)){
            $request->validate([
                'password' => [Password::min(6)->mixedCase()->letters()->numbers()],
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name.' '.$request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->status = $request->status;
        $user->freezone_id = $request->freezones;
        $user->save();

        $user->syncRoles([]);
        $superadminRole = Role::where('type', 'freezoneadmin')->first();
        $user->assignRole($superadminRole);

        return back()->with('success', 'User Updated successfully');

    }


    public function subadmin_delete(string $uuid)
    {
        $user = User::where('user_type', 'sub_admin')->where('uuid', $uuid)->first();

        if(!$user){
            return abort(404);
        }

        $user->delete();

        return redirect()->route('subadmin-users.index')->with('success', 'deleted successfully');
    }


    public function freezone_delete(string $uuid)
    {
        $user = User::where('user_type', 'freezone_admin')->where('uuid', $uuid)->first();

        if(!$user){
            return abort(404);
        }

        $user->delete();

        return redirect()->route('freezone-users.index')->with('success', 'deleted successfully');
    }
}
