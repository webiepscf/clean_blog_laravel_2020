{{--
  ./resources/views/posts/_index.blade.php
  Variables disponibles:
    $posts ARRAY(OBJ(id, titre, sousTitre, texte, datePublication, user))
--}}
<!-- ADD A POST -->
<div class="clearfix">
  <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
</div>

<!-- POSTS LIST -->
@foreach ($posts as $post)
  <div class="post-preview">
    <a href="post.html">
      <h2 class="post-title">
        {{ $post->titre }}
      </h2>
      <h3 class="post-subtitle">
        P{{ $post->sousTitre }}
      </h3>
    </a>
    <p class="post-meta">Posted on {{ $post->datePublication }}</p>
  </div>
  <hr>
@endforeach

<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
</div>
