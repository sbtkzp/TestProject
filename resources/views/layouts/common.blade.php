<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>@yield('title')TestProject.com</title>
    @yield('stylesheets')
    @yield('javascripts')
  </head>
  <body>
    @include('parts.static.header')
    <div class="row">
      <div class="large-9 columns" role="content">
        @yield('main')
      </div>
      <aside class="large-3 columns">
        @yield('sidebar')
      </aside>
    </div>
    @include('parts.static.footer')
  </body>
</html>