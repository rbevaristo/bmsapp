<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('pages.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->permissions)){
            return redirect()->back()->with('error', 'No permission selected.');
        }
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        foreach($request->permissions as $permission){
            $p = Permission::where('id', $permission)->firstOrFail();
            $role = Role::where('name', $request->name)->first();
            $role->givePermissionTo($p);
        }

        return redirect()->route('roles.index')->with('success', 'Role' . $role->name . ' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('roles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('pages.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request['permissions'])){
            return redirect()->back()->with('error', 'No permission selected');
        }
        $role = Role::findOrFail($id);
        $input = $request->except(['permissions']);
        $permissions = $request['permissions'];
        $role->fill($input)->save();
        $p_all = Permission::all();
        foreach($p_all as $p) {
            $role->revokePermissionTo($p);
        }
       
        foreach($permissions as $permission){
            $p = Permission::where('id', $permission)->firstOrFail();
            $role->givePermissionTo($p);
        }

        return redirect()->route('roles.index')->with('success', 'Role' . $role->name . ' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted!');
    }
}
