<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id', 'desc')->paginate(3);
        return view('BlogPosts')->with('Blog_Posts', $posts);
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
