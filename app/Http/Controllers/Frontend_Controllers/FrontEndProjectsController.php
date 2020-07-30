<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use App\Project;
use App\ProjectImage;
use Illuminate\Support\Facades\DB;

class FrontEndProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(6);
        $images = ProjectImage::orderBy('id', 'desc')->paginate(6);
        return view('frontend_pages/Projects')
            ->with('Projects', $projects)
            ->with('ProjectImages', $images);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Gets the picked project object
        $project = Project::findOrFail($id);

        //find the image_id, returns the image data as an array
        $image_id = DB::table('project_images')->where('project_id', '=', $project->id)->first();

        //Get the ProjectImage object of that id
        $image = ProjectImage::findOrFail($image_id->id);

        //To get all the ProjectImages from all the other projects excluding id
        $images = ProjectImage::where('id', '<>', $image_id->id)->paginate(4);

        //Gets all the other projects excluding the one the user selected
        $projects = Project::where('id', '<>', $id)->paginate(4);
        $title = $project->title;

        return view('frontend_pages/SingleProject', compact('title'))
            ->with('Project', $project)
            ->with('Projects', $projects)
            ->with('ProjectImage', $image)
            ->with('ProjectImages', $images);
    }
}