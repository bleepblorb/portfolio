@extends('base')

@section('head')

  <style media="screen">
    body {
      background-size: 1rem 1rem;
      background-image: linear-gradient(to bottom, #f5f5f5 1px, transparent 1px);
    }

    #examples {
      position: relative;
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    #grid-view {
      position: absolute;
      height: 100%;
      top: 0;
      width: 100%;
      z-index: -1;
      bord
    }

    #grid-view .g__col {
      border-right: 1px solid #eee;
      height: 100%;
    }

    #grid-view .g__col:first-of-type {
      border-left: 1px solid #eee;
    }

    .show-grid [class*="g__c"]  {
      border: 1px solid #DDD;
      background-color: #F5F5F5;
      padding-top: .5rem;
      padding-bottom: .5rem;
      margin-bottom: 1rem;
    }

    #menu {
      margin-top: 4rem;
    }

    .style__color {
      margin-bottom: 2rem;
    }

    .style__color__block {
      height: 150px;
      border-radius: 4px;
      border: 1px solid rgba(0,0,0,.1);
    }

    .style__color__name {
      margin-top: 1rem;
      margin-bottom: 2rem;
    }
  </style>

  @section('style')
  @endsection

@endsection

@section('app')
  <div class="container menu-pad">
    <div class="g__row">
      @include('styles._menu')
      <div id="examples" class="g__col8--@sm g__col9--@md g__col10--@lg">
        <div id="grid-view" class="g__row">
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
          <div class="g__col"></div>
        </div>
        @if(isset($style))
          @include('styles.'.$style)
        @endif
      </div>
    </div>
  </div>

@endsection
