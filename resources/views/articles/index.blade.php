@extends ('layout')

@section ('content')
<h2>Articles</h2>
<ul>
    @forelse ($articles as $article)
    <li>
        <a href="{{ $article->path() }}"><h3>{{ $article->title }}</h3></a>
        <p>{{ $article->excerpt }}</p>
    </li>
    @empty
        <p>No relevant articles yet!</p>
    @endforelse
</ul>

@endsection