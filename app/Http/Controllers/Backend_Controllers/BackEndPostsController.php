<?php

namespace App\Http\Controllers\Backend_Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend_Controllers\ImageController;
use App\Image;
use Illuminate\Support\Facades\DB;

class BackEndPostsController extends Controller
{

    //access to image controller
    private $image;

    public function __construct()
    {
        $this->image = new ImageController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Blog';
        $posts = BlogPost::orderBy('id', 'desc')->paginate(6);
        return view('backend_pages/Backend_Posts', compact('title'))->with('Blog_Posts', $posts);
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
            //Adds file name to database
            $this->image->store($request, $post->id);

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

        //Getting image from database
        $image_id = DB::table('images')->where('post_id', '=', $id)->first();

        //Get the Image object of that id
        $image = Image::findOrFail($image_id->id);

        return view('backend_pages/Backend_Post_Show', compact('title'))
            ->with('Blog_Post', $post)   //blog info
            ->with('Image', $image);     //image data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        $title = 'Edit';
        return view('backend_pages/Backend_Post_edit', compact('title'))->with('Blog_Post', $post);
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required',
            'text' => 'required'
        ]);

        $post =  BlogPost::findOrFail($id);
        $post->title = $request->title;
        $post->author = $request->author;
        $post->text = $request->text;

        if ($post->update()) {
            //updates file name to database
            $this->image->delete($post->id);
            $this->image->store($request, $post->id);

            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.index')->with('errors', 'something bad happened!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        //deletes file name to database
        $this->image->delete($post->id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}