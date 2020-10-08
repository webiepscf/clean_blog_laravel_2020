{{--
  ./resources/views/tags/show.blade.php
  Variables disponibles
    $tag OBJ TAG(id, nom, posts)
--}}
@extends('template.index')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('assets/img/home-bg.jpg') }})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ $tag->nom }}</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    <!-- ADD A POST -->
    <div class="clearfix">
      <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
    </div>

    <!-- POSTS LIST -->
    @foreach ($tag->posts as $post)
      <div class="post-preview">
        <a href="{{ route('posts.show', [
            'post' => $post->id,
            'slug' => Str::slug($post->titre, '-')
          ]) }}">
          <h2 class="post-title">
            {{ $post->titre }}
          </h2>
          <h3 class="post-subtitle">
            {{ $post->sousTitre }}

          </h3>
        </a>
        <p class="post-meta">Posted on {{ $post->datePublication }} by {{ $post->author->firstname }} {{ $post->author->lastname }}</p>
        <ul>
          @foreach ($post->tags as $tag)
            <li>{{ $tag->nom }}</li>
          @endforeach
        </ul>
      </div>
      <hr>
    @endforeach

    <!-- Pager -->
    <div class="clearfix">
      <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
    </div>
  </div>
@endsection
