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

//route to get the main page 
Route::get('/', function () {
    //obtain 3 of the latest articles
    return view('home', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});
//get posts by their id
Route::get('/posts/{post}', [PostsController::class, 'show']);

//get contact view blade when this slug is in the url
Route::get('/contact', function () {
    return view('contact');
});

//get all articles for articles index
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');

//route to post/persist the new article to the database
Route::post('/articles', [ArticlesController::class, 'store']);

//route to create a new article
Route::get('/articles/create', [ArticlesController::class, 'create']);

//get articles by id
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');

//edit articles by id
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

//persist updated article to the database
Route::put('articles/{article}', [ArticlesController::class, 'update']);