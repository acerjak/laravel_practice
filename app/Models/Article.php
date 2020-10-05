<?php

namespace App\Models;

//make sure to use HasFactory to define the factory()
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //make sure to add this below or the method will be undefined
    use HasFactory;
    //in order to avoid mass assignment issues, need to define what is 'fillable'
    protected $fillable = ['title', 'excerpt', 'body'];

    //if you want to be in charge of what is passed to the database and to not 'guard' anything
    //protected $guarded = []
    public function path()
    {
        return route('articles.show', $this);
    }
    // use HasFactory;

    //need a user relationship
    public function user()
    {
        //select * from user where article_id = 1
        return $this->belongsTo(User::class);
    }
}
