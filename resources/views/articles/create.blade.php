@extends('layout')

@section('content')
    <div>
        <div class="container">
            <h1>New Article</h1>

            <form method="POST" action="/articles">
            <!-- prevents malicious users on other servers from faking form requests on your server -->
            @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    
                    <div class="control">
                        <textarea class="textarea" name="body" id="body"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

