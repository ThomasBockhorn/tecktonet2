<?php

namespace App\Http\Controllers\Backend_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend_Controllers\ProjectImageController;
use App\Project;
use App\ProjectImage;
use Illuminate\Support\Facades\DB;

class BackEndProjectsController extends Controller
{

    /**
     * access to ProjectImage class
     */
    private $image;

    public function __construct()
    {
        $this->image = new ProjectImageController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Projects';
        $project = Project::orderBy('id', 'desc')->paginate(6);
        return view('backend_pages/Projects/Backend_Projects', compact('title'))->with('Projects', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A Project';
        return view('backend_pages/Projects/Backend_Projects_form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'customer' => 'required',
            'description' => 'required'
        ]);

        $project = new Project;
        $project->title = $request->title;
        $project->customer = $request->customer;
        $project->description = $request->description;

        if ($project->save()) {
            //Adds file name to database
            $this->image->store($request, $project->id);

            return redirect()->route('projects.index');
        } else {
            return redirect()->route('projects.index')->with('errors', 'something bad happened!');
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
        $project = Project::findOrFail($id);
        $title = $project->title;

        //Getting image from database
        $image_id = DB::table('project_images')->where('project_id', '=', $id)->first();

        //Get the Image object of that id
        $projectimage = ProjectImage::findOrFail($image_id->id);

        return view('backend_pages/Projects/Backend_Projects_Show', compact('title'))
            ->with('Project', $project)   //project info
            ->with('ProjectImage', $projectimage);     //image data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $title = 'Edit';
        return view('backend_pages/Projects/Backend_Projects_edit', compact('title'))->with('Project', $project);
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
            'customer' => 'required',
            'description' => 'required'
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->customer = $request->customer;
        $project->description = $request->description;

        if ($project->update()) {
            //updates file name to database
            $this->image->delete($project->id);
            $this->image->store($request, $project->id);

            return redirect()->route('projects.index');
        } else {
            return redirect()->route('projects.index')->with('errors', 'something bad happened!');
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
        $project = Project::findOrFail($id);

        //deletes file name to database
        $this->image->delete($project->id);

        $project->delete();

        return redirect()->route('projects.index');
    }
}