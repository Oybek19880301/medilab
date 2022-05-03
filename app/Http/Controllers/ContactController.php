<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

//   Mijozning murojaatlarini admin panelga uztish        

    public function index()
    {

        $contact = Contact::all();
        return view('contact.index')->with(['contacts' => $contact]);
    }

//  Mijozning murojaatlarini saqlash
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'title'   => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact;
        $contact->name    = $request->name;
        $contact->title   = $request->title;
        $contact->message = $request->message;
        $contact->phone   = $request->phone;
        $contact->save();

        return redirect('/');

    }   
}
