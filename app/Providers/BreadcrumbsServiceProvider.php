<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;
use App\BlogPost;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //This creates the home link of blog posts
        Breadcrumbs::for('posts.index', function(Trail $trail){
            $trail
            ->push('Posts', route('posts.index'));
        });

        //The add post breadcrumb
        Breadcrumbs::for('posts.create', function(Trail $trail){
            $trail
                ->parent('posts.index', route('posts.index'))
                ->push('Add new Post', route('posts.create'));
        });

         //This creates the home link of blog posts
         Breadcrumbs::for('posts.show', function(Trail $trail,  $id){
            $post = BlogPost::findOrFail($id);
            $trail
            ->parent('posts.index', route('posts.index'))
            ->push($post->title);
        });
    }
}
