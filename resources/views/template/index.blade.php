{{--
  ./resources/views/template/index.blade.php
--}}
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('template.partials._head')
  </head>
  <body>
    @include('template.partials._nav')
    @include('template.partials._main')
    @include('template.partials._footer')
    @include('template.partials._scripts')
  </body>
</html>
