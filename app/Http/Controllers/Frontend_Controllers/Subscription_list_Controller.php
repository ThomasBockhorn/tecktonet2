<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\Subscription_list;
use App\Http\Controllers\Controller;

class Subscription_list_Controller extends Controller
{
    //This saves the data to database
    public function saveSubscriptionList(Request $request)
    {
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