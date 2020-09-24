{{--
  ./resources/views/pages._menu.blade.php
  Variables disponibles:
    $pages ARRAY(OBJ(id, ...))
--}}
<ul class="navbar-nav ml-auto">
  @foreach ($pages as $page)
    <li class="nav-item">
      <a class="nav-link" href="{{ route('pages.show', [
                    'id' => $page->id,
                    'slug' => Str::slug($page->titre, '-')
                ]) }}">
        {{ $page->titreMenu }}
      </a>
    </li>
  @endforeach
</ul>
