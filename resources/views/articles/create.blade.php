@extends('layout')

@section('content')
    <div>
        <div class="container">
            <h1>NEW ARTICLE</h1>

            <form method="POST" action="/articles">
            <!-- prevents malicious users on other servers from faking form requests on your server -->
            @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input 
                        class="input @error('title') is-danger @enderror" 
                        type="text" 
                        name="title" 
                        id="title"
                        value="{{ old('title') }}">

                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea 
                        class="textarea @error('excerpt') is-danger @enderror" 
                        name="excerpt" 
                        id="excerpt"
                        value="{{ old('excerpt') }}"></textarea>
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    
                    <div class="control">
                        <textarea 
                        class="textarea @error('body') is-danger @enderror" 
                        name="body" 
                        id="body"
                        value="{{ old('body') }}"></textarea>

                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror

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

