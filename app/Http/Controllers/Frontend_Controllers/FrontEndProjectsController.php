<?php

namespace App\Http\Controllers\Frontend_Controllers;

use App\Http\Controllers\Controller;
use App\Project;

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
        return view('frontend_pages/Projects')->with('Projects', $projects);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $title = $project->title;

        $projects = Project::where('id', '<>', $id)->paginate(4);
        $title = $project->title;

        return view('frontend_pages/SingleProject', compact('title'))
            ->with('Project', $project)
            ->with('Projects', $projects);
    }
}