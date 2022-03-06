<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return view('Dashboard.Country.index',[
            'country'=> Country::latest()->Paginate(12)
        ]);
    }


    public function create()
    {
        return view('Dashboard.Country.create');
    }


    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:225']);
        Country::create($request->all());
        return redirect()->route('country.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Dashboard.country.edit',[
            'country' =>Country::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);
        $request->validate(['name'=>'required|string|max:225']);
        $country-> update($request->all());
        return redirect()->route('country.index');
    }


    public function destroy($id)
    {
        Country::destroy($id);
        return redirect()->back();
    }
}
