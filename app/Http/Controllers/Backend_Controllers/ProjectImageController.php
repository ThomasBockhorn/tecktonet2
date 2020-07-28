<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProjectImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectImageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
    {
        $request->validate([
            'image' => 'nullable|image|max:1999'
        ]);

        $image = new ProjectImage;

        if ($request->hasFile('image')) {
            $image->image = $request->file('image')->store('image', 'public');
            $image->project_id = $project_id;
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
    public function update(Request $request, $project_id)
    {
        $this->validate($request, [
            'image' => 'nullable|image|max:1999'
        ]);

        //find the image_id, returns a integer
        $image_id = DB::table('project_images')->where('project_id', '=', $project_id)->first();

        //Get the Image object of that id
        $image = ProjectImage::findOrFail($image_id->id);

        if ($request->hasFile('project_images')) {
            $image->image = $request->file('image')->store('image', 'public');
            $image->project_id = $project_id;
            $image->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($project_id)
    {
        //find the image_id, returns a integer
        $image_id = DB::table('project_images')->where('project_id', '=', $project_id)->first();

        //Get the Image object of that id
        $image = ProjectImage::findOrFail($image_id->id);

        //Delete the stored image and delete the database entry
        Storage::disk('public')->delete($image->image);
        $image->delete();
    }
}