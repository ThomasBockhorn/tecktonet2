<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //This saves the data to database
    public function saveContact(Request $request){
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        //saves to the database
        $contact = new Contact;

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        //This sends to my business email address
        Mail::send('components/frontend_components/welcome_components/email_notification/email_notification',
             array(
                 'fullname' => $request->get('fullname'),
                 'email' => $request->get('email'),
                 'text' => $request->get('message'),
             ), function($email_message) use ($request)
               {
                  $email_message->from($request->email);
                  $email_message->to('thomas.bockhorn@tecktonet.com');
               }
        );

        return view('frontend_pages/Mail-Success');
    }
}
