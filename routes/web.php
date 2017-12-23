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

Route::get('/posts', ['as' => 'all-posts', 'uses' => 'PostsController@index']);     

Route::get('/posts/create',['as' => 'create_post', 'uses' => 'PostsController@create']);

Route::get('/posts/{id}', ['as' => 'single_post', 'uses' => 'PostsController@show']);

Route::post('/posts', ['as' => 'store-post', 'uses' => 'PostsController@store']);

Route::post('/posts/{postId}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);