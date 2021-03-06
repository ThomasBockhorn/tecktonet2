<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;
use App\BlogPost;
use App\Project;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Breadcrumbs for backend posts
         */
        //This creates the home link of blog posts 
        Breadcrumbs::for('posts.index', function (Trail $trail) {
            $trail
                ->push('Posts', route('posts.index'));
        });

        //The add post breadcrumb
        Breadcrumbs::for('posts.create', function (Trail $trail) {
            $trail
                ->parent('posts.index', route('posts.index'))
                ->push('Add new Post', route('posts.create'));
        });

        //This creates the home link of blog posts
        Breadcrumbs::for('posts.show', function (Trail $trail,  $id) {
            $post = BlogPost::findOrFail($id);
            $trail
                ->parent('posts.index', route('posts.index'))
                ->push($post->title);
        });

        /**
         * Breadcrumbs for frontend blog posts
         */
        Breadcrumbs::for('blog.index', function (Trail $trail) {
            $trail->push('Blog', route('blog.index'));
        });

        Breadcrumbs::for('blog.show', function (Trail $trail, $id) {
            $post = BlogPost::findOrFail($id);
            $trail->parent('blog.index', route('blog.index'))
                ->push($post->title);
        });

        /**
         * Breadcrumbs for backend projects
         */
        BreadCrumbs::for('projects.index', function (Trail $trail) {
            $trail->push('Projects', route('projects.index'));
        });

        //This creates the home link of projects
        Breadcrumbs::for('projects.show', function (Trail $trail,  $id) {
            $project = Project::findOrFail($id);
            $trail
                ->parent('projects.index', route('projects.index'))
                ->push($project->title);
        });

        //The add post breadcrumb
        Breadcrumbs::for('projects.create', function (Trail $trail) {
            $trail
                ->parent('projects.index', route('projects.index'))
                ->push('Add new Project', route('projects.create'));
        });

        /**
         * Breadcrumbs for frontend portfolio
         */
        BreadCrumbs::for('portfolio.index', function (Trail $trail) {
            $trail->push('Portfolio', route('portfolio.index'));
        });

        //This creates the home link of projects
        Breadcrumbs::for('portfolio.show', function (Trail $trail,  $id) {
            $project = Project::findOrFail($id);
            $trail
                ->parent('portfolio.index', route('portfolio.index'))
                ->push($project->title);
        });
    }
}