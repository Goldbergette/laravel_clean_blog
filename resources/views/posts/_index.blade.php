@foreach($posts as $post)
<div class="post-preview">
  <a href="post.html">
    <h2 class="post-title">
    {{ $post->titre }}
    </h2>
    <h3 class="post-subtitle">
      {{ $post->sousTitre }}
    </h3>
  </a>
  <p class="post-meta">{{ $post->datePublication }} by {{ $post->author->firstname }} {{ $post->author->lastname }}</p>
</div>
<hr>
@endforeach
