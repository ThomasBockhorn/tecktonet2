<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndPostsController extends Controller
{
    public function index()
    {
        return view('Backend_Posts');
    }
}
