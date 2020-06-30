<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Controllers\Controller;

class FrontEndPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id', 'desc')->paginate(3);
        return view('frontend_pages/BlogPosts')->with('Blog_Posts', $posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
