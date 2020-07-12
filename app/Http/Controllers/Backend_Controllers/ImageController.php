<?php

namespace App\Http\Controllers\Backend_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

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
            $image->image = $request->file('image');
            $image->post_id = $post_id;
            $image->save();
        }
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
}