@extends('template.index')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->titre }}</h1>
            <h2 class="subheading">{{ $post->sousTitre }}</h2>
            <span class="meta">{{ $post->datePublication }} by {{ $post->author->firstname}}</span>
          <ul>
            @foreach($post->tags as $tag)
              <li>{{ $tag->nom }}</li>
            @endforeach
          </ul>
          </div>

        </div>
      </div>
    </div>
  </header>

<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- EDIT -->
        <div class="clearfix">
          <a class="btn btn-secondary" href="#">Edit Post &rarr;</a>
          <a class="btn btn-secondary" href="#">Delete Post &rarr;</a>
        </div>


        <!-- POST DETAILS -->
        {!! html_entity_decode($post->texte) !!}
        <hr>
        <h3>post du même auteur</h3>
        <ul>

          @foreach ($post->author->posts as $postAuthor)
            @if($postAuthor->id !== $post->id)
          <li>
            {{ $postAuthor->titre }}
          </li>
        @endif
        @endforeach
        </ul>


      </div>

    </div>
  </div>
</article>



@endsection
