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
  }

  #grid-view {
    position: absolute;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
  }

  #grid-view .col {
    background-image: linear-gradient(to right, rgba(0,150,250, .15) 1px, transparent 1px, transparent 16px, rgba(100,150,250, .07) 16px, rgba(100,150,250, .07) calc(100% - 16px), transparent calc(100% - 16px));
    border-right: 1px solid #eee;
    height: 100%;
    background-size: 8.333% 1rem;
  }

  #menu {
    margin-top: 4rem;
  }
</style>

@endsection

@section('app')
  <div class="container">
    <div class="row">
      @include('styles._menu')
      <div id="examples" class="col-sm-8 col-md-9 col-lg-10">
        <div id="grid-view">
          <div class="col"></div>
        </div>
        @if(isset($style))
          @include('styles.'.$style)
        @endif
      </div>
    </div>
  </div>

@endsection
