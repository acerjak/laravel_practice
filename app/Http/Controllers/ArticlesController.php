<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    
    public function show($id)
    {
        //Render a list of a resource
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        //Show a single resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        //Shows a view to create a new resource
        
    }

    public function store()
    {
        //Persist the new resouce 

    }

    public function edit()
    {
        //Show a view to edit an existing resource
    }

    public function update()
    {
        //Persist the edited resource
    }

    public function destroy()
    {
        //Delete the resouce
    }
}
