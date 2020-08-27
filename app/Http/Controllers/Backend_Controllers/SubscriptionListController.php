<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use App\Subscription_list;

class SubscriptionListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "List of Subscribers";

        $subscriptions = Subscription_list::orderBy('id', 'desc')->paginate(12);

        return view('backend_pages/Subscriptions/Subscription', compact('title'))->with('Subscriptions', $subscriptions);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscription = Subscription_list::findOrFail($id);

        $subscription->delete();

        return redirect()->route('subscription.index');
    }
}