<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentRequest;
use App\Models\category;
use App\Models\treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = treatment::where('user_id',Auth::id())->get();
        return view('',compact('treatments'));
    }


    public function create()
    {
        $category = category::where('user_id',Auth::id())->get();
        return view('',compact('category'));
    }


    public function store(TreatmentRequest $request)
    {
        treatment::create($request->validated());
        return redirect()->route('');
    }


    public function show(treatment $treatment)
    {
        // $treatment = treatment::find($id);
        return view('',compact('treatment'));
    }


    public function edit(treatment $treatment)
    {
        $category = category::where('user_id',Auth::id())->get();
        // $treatment = treatment::find($id);
        return view('',compact('treatment','category'));
    }

    public function update(TreatmentRequest $request, treatment $treatment)
    {

        // $treatment = treatment::find($id);
        $treatment->create($request->validated());
        return redirect()->route('');
    }


    public function destroy(treatment $treatment)
    {
        // $treatment=treatment::find($id);
        $treatment->delete();
        return view('',compact('treatment'));
    }
}
