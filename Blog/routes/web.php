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

Auth::routes();
Route::get('/', function(){
   return redirect(route('mains.index'));
})->name('main');
Route::resource('/mains', 'MainController');
Route::resource('/posts', 'PostController');
//Route::resource('/posts', 'PostController', ['names' => [
//    'index' => 'posts.index',
//    'create' => 'posts.create',
//    'show' => 'posts.show',
//    'store' => 'posts.store',
//    'edit' => 'posts.edit',
//    'destroy' => 'posts.destroy',
//]]);
Route::resource('/comments', 'CommentController');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/show', 'UserController@show')->name('users.show');

