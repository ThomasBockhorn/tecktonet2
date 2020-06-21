<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndPostsController extends Controller
{
    
    public function index()
    {
        $title = 'Blog';
        return view('Backend_Posts', compact('title'));
    }
}
