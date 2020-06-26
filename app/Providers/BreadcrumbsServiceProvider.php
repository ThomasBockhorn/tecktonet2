<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

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
            ->push('posts', route('posts.index'));
        });

        //The add post breadcrumb
        Breadcrumbs::for('posts.create', function(Trail $trail){
            $trail
                ->parent('posts.index', route('posts.index'))
                ->push('Add new Post', route('posts.create'));
        });
    }
}
