<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::get('posts/create', ['middleware' => 'auth', 'uses' => 'PostsController@create']);
Route::post('posts/create', ['middleware' => 'auth', 'uses' => 'PostsController@store']);

Route::get('/', 'PagesController@about');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@showContact');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::get('posts', 'PostsController@index');
Route::get('posts/{id}', 'PostsController@show');

/*
|--------------------------------------------------------------------------
| Email Routes
|--------------------------------------------------------------------------
*/
Route::post('email', 'EmailController@sendEmail');

