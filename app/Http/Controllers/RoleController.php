<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data['roles'] = Role::All();
        return view('roles.index', $data);
    }

    public function create()
    {
        $role = Role::create(['name' => 'writer']);
        echo '<script type="text/javascript">alert("Proceso finalizado");</script>';
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //Role::permissions()->sync($request->permissions);
        return view('roles.edit', ['role' => Role::findOrFail($id), 'permissions' => Role::findOrFail($id)->permissions()->select('id','name')->get()]);
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        return "hipotéticamente ha eliminado el rol número ".$id;
    }
}
