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

    //need an author/user relationship
    public function author()
    {
        //select * from user where article_id = 1
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);

        //an article has many tags ex: label an article with (work, php, laravel)
        //does a tag belong to an article? Not quite
        //ex:
        //article: Learn Laravel
        //tags: php, laravel, work, education
        //does laravel tag belong to this article? NO, tags belong to many articles
        //an article can have many tags but a tag can have many articles
        //a many to many relationship
    }
}
