<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//not in namespace but need to call the database
use DB;
use App\Http\Requests;
//namespace had to be updated due to base branch not being App, but also within Models
use App\Models\Post;

class PostsController
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);

        //this line was able to be inlined due to $post, like terms can be combined
            // $post = DB::table('posts')->where('slug', $slug)->first();

        //to see what data is being sent back, always a good practice to use dump and die for quick assessment
            // dd($post);

        //array of hard coded data
            // $posts = [
            //     'my-first-post' => 'Hello, this is my first post.',
            //     'my-second-post' => 'Hopefully I start to get the hang of things!'
            // ];

            // if (! $post) {
            //     abort(404);
            // }
            // if( ! array_key_exists($post, $posts)) {
            //     abort(404, 'Sorry, that post was not found :(');
            // }

            // return view('post', [
            //     'post' => $post
            // ]);
        }
    
}
