@extends ('layout')

@section ('content')
<h2>Hello Content!</h2>

<ul>
    @foreach ($articles as $article)
    <li>
        <a href="/articles/{{ $article->id }}"><h3>{{ $article->title }}</h3></a>
        <p>{{ $article->excerpt }}</p>
    </li>
    @endforeach
</ul>



@endsection