<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
     /**
     * Show the frontend part of the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend_pages/welcome');
    }
}
