<?php

namespace App\Http\Controllers\Frontend_Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogPost;
use App\Image;
use App\Project;
use App\ProjectImage;

class WelcomeController extends Controller
{
    /**
     * Show the frontend part of the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id', 'desc')->paginate(3);
        $images = Image::orderBy('id', 'desc')->paginate(3);
        $projects = Project::orderBy('id', 'desc')->paginate(6);
        $projectImages = ProjectImage::orderBy('id', 'desc')->paginate(6);

        return view('frontend_pages/welcome')
            ->with('Blog_Posts', $posts)
            ->with('Images', $images)
            ->with('Projects', $projects)
            ->with('ProjectImages', $projectImages);
    }
}