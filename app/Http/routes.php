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

Route::get('/','PostController@index');

Route::get('new','PostController@newPost');

Route::post('createpost','PostController@createPost');

Route::get('view/{id}','PostController@viewpost');

Route::post('createComment','PostController@createComment');