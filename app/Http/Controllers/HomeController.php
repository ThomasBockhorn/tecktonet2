<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the backend application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //adds title to breadcrumb
        $title = "Dashboard";
        
        return view('home', compact('title'));
    }
}
