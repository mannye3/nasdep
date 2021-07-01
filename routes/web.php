<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@about')->name('about');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('pricing', 'PublicController@pricing')->name('pricing');





Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
});



Route::prefix('author')->group(function(){
    Route::get('dashboard', 'AuthorController@dashboard')->name('authorDashboard');
    // Route::get('comments', 'AuthorController@comments')->name('authorComments');
    // Route::get('posts/new', 'AuthorController@newPost')->name('newPost');
    // Route::post('posts/new', 'AuthorController@createPost')->name('createPost');
    // Route::get('post/{id}/edit', 'AuthorController@postEdit')->name('postEdit');
    // Route::post('post/{id}/edit', 'AuthorController@postEditPost')->name('postEditPost');
    // Route::get('post/{id}/delete', 'AuthorController@deletePost')->name('deletePost');
    Route::get('posts', 'AuthorController@posts')->name('authorPosts');
    });
