<?php

namespace App\Http\Controllers;

use App\Assets\ResponseMessage;
use App\Assets\Utils;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{

    public function index(Request $request)
    {
        $roles = Role::where('type', '!=', 'superadmin');
        $roles = $roles->orderBy('id', 'desc')->paginate(Utils::itemPerPage);

        return view('role.role_index', compact('roles'));
    }


    public function create(){
        $permissions = Permission::where('type', 'subadmin')->get();
        $menus = Menu::where('is_active', 1)->get();
        return view('role.role_create', compact('permissions', 'menus'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ],[
            'permissions' => ResponseMessage::CreateRolePermissionValidationError
        ]);
    
        $role = Role::create([
            'name' => $request->input('role_name'), 
            'type' => 'subadmin',
            'guard_name' => 'web'
        ]);
    
        $permissions = $request->input('permissions');

        foreach($permissions as $permission){
            $values = explode(",", $permission);

            $permissions = Permission::whereIn('name', $values)->get();
            $role->givePermissionTo($permissions);
        }

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }


    public function edit($uuid)
    {
        $role = Role::where('uuid', $uuid)->first();
        $menus = Menu::where('is_active', 1)->get();
        if($role){
            return view('role.role_edit', compact('role', 'menus'));
        }
        return abort(404);
    }


    public function update(Request $request, $uuid)
    {
        $role = Role::where('uuid', $uuid)->first();

        if(!$role){
            return abort(404);
        }

        $request->validate([
            'role_name' => 'required|unique:roles,name,' . $role->id,
            'permissions' => 'required|array',
        ],[
            'permissions' => ResponseMessage::CreateRolePermissionValidationError
        ]);

        $role->update(['name' => $request->input('role_name')]);

        $role->syncPermissions([]);

        $permissions = $request->input('permissions');

        if($permissions){
            foreach($permissions as $permission){
                $values = explode(",", $permission);
    
                $permissions = Permission::whereIn('name', $values)->get();
                $role->givePermissionTo($permissions);
            }
        }

        return back()->with('success', 'Role updated successfully.');
    }

    public function delete($uuid){

        $role = Role::where('uuid', $uuid)->first();

        if(!$role){
            return abort(404);
        }

        if($role->type == 'freezoneadmin'){
            return redirect()->route('roles.index')->with('error', '"'.ucfirst($role->name).'" role cannot be deleted.');
        }

        if($role->users->isEmpty()){
            $role->delete();
            return redirect()->route('roles.index')->with('success', 'Role Deleted successfully');
        }

        return redirect()->route('roles.index')->with('error', '"'.ucfirst($role->name).'" role cannot be deleted. Some user are assigned to "'.$role->name.'" role');

    }

}
