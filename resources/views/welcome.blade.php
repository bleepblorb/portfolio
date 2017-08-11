@extends('base')

@section('app')
  <div style="background-color:;">
    <div class="container -max--xl">
      <div class="g__row -align-items--center t--center -justify-content--center" style="min-height: 90vh;">
        <div class="g__col12 g__col10--@sm">
          <div class="g__row">
            <div class="g__col py-6">
              <img src="{{asset('img/intro-robot-2.gif')}}" width="100" class="mb-2 enter__fade-in" alt="" data-spy-in data-spy="delay: 900">
              <h1 class="c--late-night enter__fade-in-up pb-6" data-spy-in >
                Well Done is the superfluous<br class="hidden-sm-down"> moniker of <a href="{{route('about')}}">Adam Volkman</a>, another soggy Portland <a href="{{route('visuals')}}">creative</a>.
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
