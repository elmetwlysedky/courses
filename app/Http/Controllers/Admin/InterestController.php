<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;

class InterestController extends Controller
{

    public function index()
    {
        return view('Dashboard.Interest.index',[
       'interest'=> Interest::latest()->Paginate(12)
        ]);
    }


    public function create()
    {
        return view('Dashboard.Interest.create');
    }


    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:225']);
        Interest::create($request->all());
        return redirect()->back();//route('interest.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Dashboard.Interest.edit',[
            'interest' =>Interest::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $interest = Interest::findOrFail($id);
        $request->validate(['name'=>'required|string|max:225']);
        $interest-> update($request->all());
        return redirect()->route('interest.index');
    }


    public function destroy($id)
    {
        Interest::destroy($id);
        return redirect()->back();
    }
}
