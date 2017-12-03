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

Route::get('/', function() {
    return view('pages.dashboard');
});

//Categories 
Route::get('/category', 'CategoryController@index')->name('category.index');
//Category Add
Route::post('/addCategory', 'CategoryController@store')->name('category.add');
//Remove Category 
Route::post('/deleteCategory', 'CategoryController@removeCategory')->name('category.remove');
//Edit Category 
Route::post('/editCategory', 'CategoryController@editCategory')->name('category.edit');

//Posts 
Route::get('/addNewPost', 'PostController@index')->name('post.index');
//Add Posys 
Route::post('/addPost', 'PostController@store')->name('post.add');

/* BLOG */
//List All Posts 
Route::get('/blog', 'BlogController@index')->name('blog.index');
//Show Single Post 
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');