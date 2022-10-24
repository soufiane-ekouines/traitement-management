<?php

namespace App\Http\Controllers;

use App\Http\Requests\roleUserRequest;
use App\Models\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{

    public function index()
    {
        return view('');
    }


    public function create()
    {
        return view('');
    }


    public function store(roleUserRequest $request)
    {
        RoleUser::create($request->validated());
        return redirect()->route('');
    }


    public function show(RoleUser $roleUser)
    {
         // $roleUser = roleUser::find($id);
         return view('',compact('roleUser'));
    }


    public function edit(RoleUser $roleUser)
    {
        // $roleUser = roleUser::find($id);
        return view('',compact('roleUser'));
    }

    public function update(roleUserRequest $request, RoleUser $roleUser)
    {
        // $roleUser = roleUser::find($id);
        $roleUser->create($request->validated());
        return redirect()->route('');
    }


    public function destroy(RoleUser $roleUser)
    {
        // $roleUser=RoleUser::find($id);
        $roleUser->delete();
        return view('',compact('roleUser'));
    }
}
