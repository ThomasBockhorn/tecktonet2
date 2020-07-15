<?php

namespace App\Http\Controllers\Backend_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $request->validate([
            'image' => 'nullable|image|max:1999'
        ]);

        $image = new Image;

        if ($request->hasFile('image')) {
            $image->image = $request->file('image')->store('image', 'public');
            $image->post_id = $post_id;
            $image->save();
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $post_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $this->validate($request, [
            'image' => 'nullable|image|max:1999'
        ]);

        //find the image_id, returns a integer
        $image_id = DB::table('images')->where('post_id', '=', $post_id)->first();

        //Get the Image object of that id
        $image = Image::findOrFail($image_id->id);

        if ($request->hasFile('image')) {
            $image->image = $request->file('image')->store('image', 'public');
            $image->post_id = $post_id;
            $image->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $post_id
     * @return \Illuminate\Http\Response
     */
    public function delete($post_id)
    {
        //find the image_id, returns a integer
        $image_id = DB::table('images')->where('post_id', '=', $post_id)->first();

        //Get the Image object of that id
        $image = Image::findOrFail($image_id->id);

        //Delete the stored image and delete the database entry
        Storage::disk('public')->delete($image->image);
        $image->delete();
    }
}