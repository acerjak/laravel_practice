@extends ('layout')

@section ('content')

<h2 class="is-child notification is-info title has-text-centered mx-6">Index</h2>
<div class="tile is-parent is-vertical">
        
            @forelse ($articles as $article)
                <article class="tile is-child notification is-primary">
                    <a class="title" href="{{ $article->path() }}"><h3>{{ $article->title }}</h3></a>
                    <p>{{ $article->excerpt }}</p>
                </article>    
            @empty
                <p>No relevant articles yet!</p>
            @endforelse
</div>

@endsection