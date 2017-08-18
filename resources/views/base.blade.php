<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') – Well Done</title>


    {{-- fonts  --}}
    <script src="https://use.typekit.net/kyn4syh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')
    <!--                                   
                   /¯­­¯\             
                   |  /¯¯­­\          
                   |  |  /¯­­¯\       
                   |  |  |  |       
            ,-­¯­¯­­¯­­-,|  |  |  |       
           /  ,--.       |  |       
          '__/    |         |       
          |  |    |         |       
           \  `--´           \      
            `-____,           \     
                   \           \    
       well done    \      _--¯¯    
                     \_--¯­­¯­­­         
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

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-33534200-1', 'auto');
    ga('send', 'pageview');

  </script>
</html>
