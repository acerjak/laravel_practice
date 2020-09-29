<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;

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
//     return view('post');
// });

Route::get('/posts/{post}', [PostsController::class, 'show']);

//get contact view blade when this slug is in the url
Route::get('/contact', function () {
    return view('contact');
});

//get articles by id
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
