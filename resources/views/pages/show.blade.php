{{--
  ./resources/views/pages/show.blade.php
  Variables disponibles :
    $page OBJ(id, titre, texte, titreMenu, image, created_at, ...)
--}}

<h1>{{ $page->titre }}</h1>
<div class="">
  {!! html_entity_decode($page->texte) !!}
</div>
