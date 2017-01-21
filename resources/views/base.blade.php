<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title or ":)"}}</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    @yield('head')

  </head>
  <body>
    @yield('app')
  </body>

  <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
</html>
