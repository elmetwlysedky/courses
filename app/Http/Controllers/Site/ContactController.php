<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('Dashboard.Contact.index',[
            'contact'=> Contact::latest()->Paginate(12)
        ]);
    }

    public function create()
    {
        return view('Site.Contact.create');
    }
    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        Contact::create($data);
        return redirect()->back();
    }


    public function show($id)
    {
        return view('Dashboard.Contact.show',[
            'contact' => Contact::findOrFail($id)
        ]);
    }


    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect()->back();
    }
}
