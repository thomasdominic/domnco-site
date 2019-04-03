<?php

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

Auth::routes();

Route::locales(function() {

    Route::get(
        trans('routes.home'),
        'PageController@getHomePage'
    )->name('home');

    Route::get(
        trans('routes.about'),
        'PageController@getAboutPage'
    )->name('about');

    Route::get(
        trans('routes.contact'),
        'PageController@getContactPage'
    )->name('contact');

    Route::get(
        trans('routes.blog'),
        'PostController@index'
    )->name('blog');

    Route::get(trans('routes.posts'),'PostController@index');

    Route::get(trans('routes.posts').'/{slug}','PostController@show')
        ->name('posts.show');

    Route::get(trans('routes.tags').'/{slug}','PostController@byTag')
        ->name('posts.bytag');

    Route::get(trans('routes.search'),'PostController@search')
        ->name('posts.search');
});

