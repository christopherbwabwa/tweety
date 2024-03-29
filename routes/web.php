<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth')->group(function()
{
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
});

// Route::get('/tweets', 'TweetController@index')->name('home');
// Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');

Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

Route::post('/tweets', 'TweetController@store');

Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('follow');

Route::get('/profiles/{user}/edit', 'ProfileController@edit')->middleware('can:edit,user');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profile');

Route::patch('/profiles/{user}', 'ProfileController@update')->middleware('can:edit,user');

Auth::routes();

Route::get('/explore', 'ExploreController');

