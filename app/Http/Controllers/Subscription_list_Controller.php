<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription_list;

class Subscription_list_Controller extends Controller
{
    //This saves the data to database
    public function saveSubscriptionList(Request $request){
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        
        //saves to the database
        $subscription = new Subscription_list;

        $subscription->email = $request->email;

        $subscription->save();

        //This sends to my business email address
        /*\Mail::send('email_notification/email_notification',
             array(
                 'fullname' => $request->get('fullname'),
                 'email' => $request->get('email'),
                 'text' => $request->get('message'),
             ), function($email_message) use ($request)
               {
                  $email_message->from($request->email);
                  $email_message->to('thomas.bockhorn@tecktonet.com');
               }
        );*/

        return back();
    }
}
