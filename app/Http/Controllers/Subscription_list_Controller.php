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

        return back();
    }
}
