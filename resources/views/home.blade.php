@extends ('layout')

@section ('content')
<h2>Hello Content!</h2>

<ul>
    @foreach ($articles as $article)
    <li>
        <h3>{{ $article->title }}</h3>
        <p><a href="">{{ $article->excerpt }}</a>
        </p>
    </li>
    @endforeach
</ul>



@endsection