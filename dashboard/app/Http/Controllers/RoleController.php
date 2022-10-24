<?php

namespace App\Http\Controllers;

use App\Http\Requests\roleRequest;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{

    public function index():View
    {
        $Roles = Role::get();
        return view('',compact('Roles'));
    }


    public function create():View
    {
        return view('');
    }

    public function store(roleRequest $request)
    {
       Role::create($request->validated());
       return redirect()->route('');
    }


    public function show(Role $role):View
    {
        // $role:Role::find($id);
        return view('',compact('role'));
    }

    public function edit(Role $role):view
    {
        // $role:Role::find($id);
        return view('',compact('role'));
    }


    public function update(roleRequest $request, Role $role)
    {
        // $role:Role::find($id);
        $role->update($request->validated());
        return redirect()->route('');
    }


    public function destroy(Role $role)
    {
      // $role:Role::find($id);
        $role->delete();
        return redirect()->back();
    }
}
