<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //in order to avoid mass assignment issues, need to define what is 'fillable'
    protected $fillable = ['title', 'excerpt', 'body'];

    //if you want to be in charge of what is passed to the database and to not 'guard' anything
    //protected $guarded = []

    // use HasFactory;
}
