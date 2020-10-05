{{--
  ./app/resources/views/posts/show.blade.php
  Variables disponibles:
    $post OBJ(id, titre, sousTitre, texte, created_at, author_id, author OBJ, tags ARRAY(OBJ Tag))
--}}
@extends('template.index')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('assets/img/' . $post->image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->titre }}</h1>
            <h2 class="subheading">{{ $post->sousTitre }}</h2>
            <span class="meta">Posted on {{ $post->datePublication }} by {{ $post->author->firstname }} {{ $post->author->lastname }}</span>
            <ul>
              @foreach ($post->tags as $tag)
                <li>{{ $tag->nom }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
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
          {{ $post->texte }}
          <hr/>
          <h2>Liste des {{ count($post->author->posts) }} posts du même auteur:</h2>
          <ul>
            @foreach ($post->author->posts as $postAuthor)
              @if ($postAuthor->id !== $post->id)
                <li>
                  {{ $postAuthor->titre }}
                  {{-- Les tags du postAuthor --}}
                    @foreach ($postAuthor->tags as $tag)
                      [{{ $tag->nom }} - {{ count($tag->posts) }}]
                    @endforeach

                </li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </article>
@endsection
