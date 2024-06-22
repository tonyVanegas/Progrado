<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('permisos.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permisos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'string',
            'unique:permissions,name'
        ]);

       Permission::create(['name' => $request->name]);
       return redirect('permisos')->with('status','permiso creado exitosamente'); 
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
    public function edit(Permission $permission)
    {
        return $permission;
        return view('role-permission.permission.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
     //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
    }
}
