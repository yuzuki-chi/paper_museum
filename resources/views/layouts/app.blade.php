<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title') - PAPER MUSEUM</title>
    </head>
    <body>
      <nav class="">
        <a class="" href="#">PAPER MUSEUM</a>
      </nav>

      <hr/>

      <div class="container">
          @yield('content')
      </div>
    </body>
</html>