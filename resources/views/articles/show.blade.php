<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div>
            <h2 class="title">Welcome to our website!</h2>
        </div>
            <div id="menu content">
                <ul>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Home</a></li>
                    <li class="{{ Request::path() === 'posts' ? 'current_page_item' : '' }}"><a href="/posts" accesskey="2" title="">Posts</a></li>
                    <li class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}"><a href="/articles" accesskey="3" title="">Articles</a></li>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="#" accesskey="4" title="">About Me</a></li>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div>
                <h2>{{ $article->title }}</h2>
            </div>

                <p>{{ $article->body }}</p>
                <p>
                    @foreach ($article->tags as $tag)
                        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                    @endforeach
                </p>

        </div>
    </div>
</body>
</html>