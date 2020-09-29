@foreach($posts as $post)
<div class="post-preview">
  <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->titre, '-')]) }}">
    <h2 class="post-title">
    {{ $post->titre }}
    </h2>
    <h3 class="post-subtitle">
      {{ $post->sousTitre }}
    </h3>
  </a>
  <p class="post-meta">{{ $post->datePublication }} by {{ $post->author->firstname }} {{ $post->author->lastname }}</p>
  <ul>
    @foreach($post->tags as $tag )
    <li>{{ $tag->nom }}</li>
  @endforeach
  </ul>
</div>
<hr>
@endforeach
