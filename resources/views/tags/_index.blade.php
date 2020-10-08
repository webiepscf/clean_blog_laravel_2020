{{--
  ./resources/views/tags/_index.blade.php
  Variables disponibles
    $tags ARRAY(OBJ TAG(id, nom, posts))
--}}
<ul class="list-group">
  <li class="list-group-item"><strong>Tags</strong></li>

  @foreach ($tags as $tag)
    <li class="list-group-item">
      <a href="{{ route('tags.show', [
          'tag'  => $tag->id,
          'slug' => Str::slug($tag->nom, '-')
        ]) }}">
        {{ $tag->nom }} ({{ count($tag->posts) }})
      </a>
    </li>
  @endforeach

</ul>
