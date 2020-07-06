<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogPost;

class WelcomeController extends Controller
{
     /**
     * Show the frontend part of the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id', 'desc')->paginate(3);
        return view('frontend_pages/welcome')->with('Blog_Posts', $posts);
    }
}
