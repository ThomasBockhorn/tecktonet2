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
            $trail->push('posts', route('home'));
        });
    }
}
