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
        $title = 'Blog';
        $posts = BlogPost::orderBy('id', 'desc')->paginate(3);
        return view('frontend_pages/BlogPosts', compact('title'))->with('Blog_Posts', $posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        $title = $post->title;
        return view('frontend_pages/SinglePost', compact('title'))->with('Blog_Post', $post);
    }
}
