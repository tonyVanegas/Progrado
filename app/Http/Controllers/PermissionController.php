<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::paginate(5);
       // $permissions = Permission::get();
        return view('role-permission.permission.index',compact('permissions'));
    }

    public function create()
    {
      return view('role-permission.permission.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'string',
            'unique:permissions,name'
        ]);

       Permission::create(['name' => $request->name]);
       return redirect('permissions')->with('status','permiso creado exitosamente'); 
    }

    public function edit(Permission $permission)
    {

      return view('role-permission.permission.edit',compact('permission'));

   }


    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status','Permission Updated Successfully');
    }

    public function destroy($permissionId)
    {
        $permission = Permission::find($permissionId);
        $permission->delete();
        return redirect('permissions')->with('status','Permission Deleted Successfully');
    }
}



