<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title or ":)"}}</title>


    {{-- fonts  --}}
    <script src="https://use.typekit.net/kyn4syh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')
    <!--
*********************************************************************************************
**                                                                                         **
**   ,--.   ,--.  ,------.  ,--.    ,--.      ,------.    ,-----.   ,--.  ,--.   ,-----.   **
**   |  |   |  |  |  .---'  |  |    |  |      |  ,--. \  |  ,-.  |  |   \ |  |  |  .---'   **
**   |  |   |  |  |  '--.   |  |    |  |      |  |  |  | |  | |  |  |  . '|  |  |  '--.    **
**   |  |.'.|  |  |  .--'   |  |    |  |      |  |  /  | |  | |  |  |  |\    |  |  .--'    **
**   |   ,'.   |  |  `---.  |  `--. |  `---.  |  '-'  /  |  '-'  |  |  | \   |  |  `---.   **
**   `--'   '--'  `------'  `-----'  `-----'   `-----'    `-----'   `--'  `--'  `------'   **
**                                                                                         **
*********************************************************************************************
-->
  </head>
  <body>
    <div id="app" :class="{'-hide-menu' : !state.showMenu}" v-cloak >
      @include('partials.menu')
      @yield('app')
    </div>
  </body>
  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
  </script>
  <script src="{{mix('js/app.js')}}"></script>
  @stack('scripts')
</html>
