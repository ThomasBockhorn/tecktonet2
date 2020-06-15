<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

//Contact us route
Route::post('contact', 'ContactController@saveContact')->middleware(ProtectAgainstSpam::class);

//Authorized routes
Auth::routes();

//Backend route
Route::get('/home', 'HomeController@index')->name('home');
