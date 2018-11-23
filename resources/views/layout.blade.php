<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
      .is-complete {
        text-decoration: line-through;
      }

    </style>
  </head>
  <body>

    <div class="container">

      @yield('content')

    </div>

  </body>
</html>
