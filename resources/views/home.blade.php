@extends ('layout')

@section ('content')

<div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical ml-5">
        <article class="tile is-child notification is-primary">
          <figure class="image is-6by3">
            <img class="ml-2" src="https://marvel-b1-cdn.bc0a.com/f00000000139987/www.gardeners.com/on/demandware.static/-/Library-Sites-SharedLibrary/default/dwb5dc078e/Articles/Gardening/Hero_Thumbnail/5663-zinnia-orange.jpg" alt="Zinnias">
          </figure>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title"><span class="quote">“A flower does not think of competing with the flower next to it. It just blooms.”</span>
            <br>
            <span class="quote-author">– Zen Shin</span>
          </p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <figure class="image is-4by3">
            <img class="ml-2 mt-5" src="https://www.trees.com/sites/default/files/field/image/types-of-yellow-flowers.jpg" alt="sunflower">
            <p class="subtitle sunflower-tile-text">2020</p>
          </figure>
        </article>
      </div>
    </div>
    <div class="tile is-parent ml-5">
      <article class="tile is-child notification is-danger">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent mr-5">
    <article class="tile is-child notification article-column">
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