<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title or ":)"}}</title>

    {{-- fonts  --}}
    <script src="https://use.typekit.net/kyn4syh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')

  </head>
  <body>
    {{-- <div class="fixed-top">
      <div class="container">
        <ul class="nav -align-items--baseline">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link"><strong class="c--muted" style="">well done</strong></a>
          </li>
          <li class="nav-item ml-auto">
            <small class="nav-link c--muted">Full site in progress...</small>
          </li>
        </ul>
      </div>
    </div> --}}
    @yield('app')
  </body>

  <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
  @stack('scripts')
</html>
