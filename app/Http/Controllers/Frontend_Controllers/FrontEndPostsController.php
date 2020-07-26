<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\BlogPost;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Support\Facades\DB;

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
        $images = Image::orderBy('id', 'desc')->paginate(3);

        return view('frontend_pages/BlogPosts', compact('title'))
            ->with('Blog_Posts', $posts)
            ->with('Images', $images);
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

        //find the image_id, returns a integer
        $image_id = DB::table('images')->where('post_id', '=', $post->id)->first();

        //Get the Image object of that id
        $image = Image::findOrFail($image_id->id);

        return view('frontend_pages/SinglePost', compact('title'))
            ->with('Blog_Post', $post)
            ->with('Image', $image);
    }
}