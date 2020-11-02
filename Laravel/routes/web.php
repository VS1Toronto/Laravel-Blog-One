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

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
    Route::get('home', 'PagesController@home');
    Route::get('users', 'UsersController@index');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit','UsersController@update');

    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');

    Route::get('posts', 'PostsController@index');
    Route::get('posts/create', 'PostsController@create');
    Route::post('posts/create', 'PostsController@store');
    Route::get('posts/{id?}/edit', 'PostsController@edit');
    Route::post('posts/{id?}/edit','PostsController@update');

    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/create', 'CategoriesController@store');
});
//  This is the first route that I commented out when the book
//  asked me to modify the first route with the one under this
//  one
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function()
//{ return 'Welcome to our home page!';
//});

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/page1', 'TicketsController@create');
Route::post('/page1', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
Route::get('/page2', 'TicketsController@index');
Route::get('/page3', 'PagesController@page3');
Route::get('/page4', 'PagesController@page4');

Route::post('/comment', 'CommentsController@newComment');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');
