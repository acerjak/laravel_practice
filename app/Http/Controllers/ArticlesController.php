<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
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
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
        //Show a single resource
        $articles = Article::latest()->get();
        };

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        //Shows a view to create a new resource
        return view('articles.create', [
            //retrieve all tags from the db and hand to this view
            'tags' => Tag::all()
        ]);
        
    }

    public function store()
    {
        //Persist the new resouce 

        //short way to inline validation and create request
        //even further since this same validation is done for the update method, 
        //we can make a function to simplify the code
        // Article::create($this->validateArticle());


        //need to validate data first before automatically sending to database due to tags being validated now
        $this->validateArticle();
        //then when creating a new article, send through the parameters required
        $article = new Article(request(['title','excerpt','body']));
        $article->user_id = 1; // auth()->id()
        $article->save();

        //can add logic here to only attach tags when tags are in the request but this will post null either way if nothing is sent through
        $article->tags()->attach(request('tags'));

        //redirect user to articles index
        return redirect(route('articles.index'));
        //validate the data coming through is there
        // request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);

        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);

        //long way to persist data to database
        //establish new article from model
        // $article = new Article();

        // //define parameters needed to make a new article
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // //save this article to the database
        // $article->save();

        

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

        //validate the data coming through is there
        $article->update($this->validateArticle());

        //long way to update an article
        // $article = Article::findOrFail($id);
        
        //define parameters needed to make a new article  
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        
        // //save this article to the database
        // $article->save();
        
        //redirect user to articles index
        return redirect($article->path());
    }

    public function destroy()
    {
        //Delete the resouce
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
