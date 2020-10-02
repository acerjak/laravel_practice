@extends ('layout')

@section ('content')
<h2>Articles</h2>
<ul>
    @foreach ($articles as $article)
    <li>
        <a href="{{ $article->path() }}"><h3>{{ $article->title }}</h3></a>
        <p>{{ $article->excerpt }}</p>
    </li>
    @endforeach
</ul>

@endsection