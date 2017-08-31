@extends('base')

@section('app')
  <div class="project menu-pad">
    <div class="project__intro container -max--xl mb-7 enter__fade-in-up" data-spy-in>
      <div class="g__row">
        <div class="g__col -max--md">
          <h2 class="mb-4">@yield('heading') —</h2>
          <div class="">
            @yield('desc')
          </div>
        </div>
      </div>
    </div>

    <div class="project__body">
      @yield('body')
    </div>
    
    <div class="project__credits container -max--xl py-7">
      <div class="g__row -max--lg">
        @yield('credits')
      </div>
    </div>

    <div class="project__footer container bg--jazzy py-7">
      <div class="g__row -align-items--center">
        <div class="g__col3 mb-4">
          <a class="back-btn" href="{{route('projects')}}"><icon class="c--white" name="arrow__left-lg" size="xl"></icon></a>
        </div>
        <div class="g__col6--@md">
          <h5 class="c--white">Enjoy Next —</h5>
          @yield('next-link')
        </div>
      </div>
    </div>
  </div>
@endsection
