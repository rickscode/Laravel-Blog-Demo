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

Route::get('/', function () {
    return view('welcome');
});

// Show all blog posts.
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);

// Show one blog post
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

//shows create post form
Route::get('/blog/create/post, [\App\Http\Controllers\BlogPostController::class, 'create']);

//saves the created post to the databse
Route::post('/blog/create/post, [\App\Http\Controllers\BlogPostController::class, 'store']);

//shows edit post form
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']);

//commits edited post to the database
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']);

//deletes post from the database
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);
