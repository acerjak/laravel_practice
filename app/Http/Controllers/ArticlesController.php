<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //create funtion to show articles
    public function show($articleId)
    {
        dd($articleId);
    }
};
