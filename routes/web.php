<?php

use Tabuna\Breadcrumbs\Trail;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Backend routes
Route::group(['middleware' => ['rules']], function () {
    Route::resource('/posts', 'Backend_Controllers\BackEndPostsController');
    Route::get('/home', 'Backend_Controllers\HomeController@index')->name('home')->breadcrumbs(function (Trail $trail) {
        $trail->push('home', route('home'));
    });
    Route::resource('/projects', 'Backend_Controllers\BackEndProjectsController');
});

//Route for front end part of the application
Route::get('/', 'Frontend_Controllers\WelcomeController@index');

//Route for frontend blog posts
Route::resource('/blog', 'Frontend_Controllers\FrontEndPostsController')->except(['create', 'update', 'store', 'destroy', 'edit']);

//Route for frontend projects
Route::resource('/portfolio', 'Frontend_Controllers\FrontendProjectsController')->except(['create', 'update', 'store', 'destroy', 'edit']);

//Contact route and addeds an Antispam protection from Honeypot
Route::post('/contact', 'Frontend_Controllers\ContactController@saveContact')->middleware(ProtectAgainstSpam::class);

//Subscription list
Route::post('/subscription', 'Frontend_Controllers\Subscription_list_Controller@saveSubscriptionList')->middleware(ProtectAgainstSpam::class);

//Authorized routes
Auth::routes();