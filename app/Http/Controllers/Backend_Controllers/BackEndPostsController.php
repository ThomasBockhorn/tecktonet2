<?php

namespace App\Http\Controllers\Backend_Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Controllers\Controller;

class BackEndPostsController extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Blog';
        $posts = BlogPost::orderBy('id', 'desc')->paginate(6);
        return view('backend_pages/Backend_Posts', compact('title'))->with('Blog_Posts', $posts);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A Post';
        return view('backend_pages/Backend_Post_form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     **/
    public function store(Request $request)
    {   
        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required',
            'text' => 'required'
        ]);

        $post = new BlogPost;
        $post->title = $request->title;
        $post->author = $request->author;
        $post->text = $request->text;
        
        if ($post->save()) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.index')->with('errors', 'something bad happened!');
        }
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
        return view('backend_pages/Backend_Post_Show', compact('title'))->with('Blog_Post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
