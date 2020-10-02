<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    
    public function show(Article $article)
    {
        //Render a list of a resource
        // $article = Article::findOrFail($id);

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
        return view('articles.create');
        
    }

    public function store()
    {
        //Persist the new resouce 

        //long way to persist data to database
        //establish new article from model
        $article = new Article();

        //define parameters needed to make a new article
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        //save this article to the database
        $article->save();

        //redirect user to articles index
        return redirect('/articles');

        //use this funtion to ensure that we are receiving all the information we need before we persist to the database
        // dump(request()->all());

        //use this function to ensure that we are hitting the correct method
        // die('hello');

    }

    public function edit(Article $article)
    {
        //Show a view to edit an existing resource
        // $article = Article::findOrFail($id);

        //need to find the article associated with the id 
        //one way to do this
        // return view('articles.edit', ['article' => $article]);

        //simpler way to do this with compact function
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        //Persist the edited resource
        // $article = Article::findOrFail($id);

        //define parameters needed to make a new article
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        
        //save this article to the database
        $article->save();
        
        //redirect user to articles index
        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        //Delete the resouce
    }
}
