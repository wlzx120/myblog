<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('home.layouts._header')
    <div class="container" style="margin-top:120px;">
      <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('home.layouts._footer')
      </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>