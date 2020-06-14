<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //This saves the data to database
    public function saveContact(Request $request){
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $contact = new Contact;

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Thank you for contacting me!');

    }
}
