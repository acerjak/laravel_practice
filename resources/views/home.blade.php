@extends ('layout')

@section ('content')

<div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical ml-3">
        <article class="tile is-child notification is-primary">
          <p class="title ">Vertical...</p>
          <p class="subtitle">Top tile</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">...tiles</p>
          <p class="subtitle">Bottom tile</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <figure class="image is-4by3">
            <img class="ml-2" src="https://www.trees.com/sites/default/files/field/image/types-of-yellow-flowers.jpg" alt="sunflower">
          </figure>
        </article>
      </div>
    </div>
    <div class="tile is-parent ml-3">
      <article class="tile is-child notification is-danger">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent mr-3">
    <article class="tile is-child notification is-success">
      <div class="content">
        <p class="title">Recent Articles</p>
        <div class="content">
            <ul>
                @foreach ($articles as $article)
                    <li class="">
                        <a href="/articles/{{ $article->id }}"><h3>{{ $article->title }}</h3></a>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
      </div>
    </article>
  </div>
</div>

@endsection