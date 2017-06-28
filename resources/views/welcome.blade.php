@extends('base')

@section('app')
  <div style="background-color:;">
    <div class="container -max--xl">
      <div class="g__row -align-items--center t--center -justify-content--center" style="min-height: 90vh;">
        <div class="g__col12 g__col10--@sm">
          <div class="g__row">
            <div class="g__col py-6">
              <img src="{{asset('img/about-illustration.jpg')}}" width="200" class="mb-2" alt="">
              <h1 class="c--late-night pb-6">
                Well Done is the superfluous<br class="hidden-sm-down"> moniker of Adam Volkman, another soggy Portland creative.
                {{-- <toggler :options="[
                  'another soggy Portland creative.',
                  'a pretty nice guy',
                  'a design dude'
                ]"></toggler> --}}
              </h1>
            </div>
          </div>
          {{-- <div class="g__row -max--md t--center">
            <div class="g__col4--@md mb-3">
              <h6 class="c--gray-light">Currently</h6>
              <p>Looking for full time work. <a href="{{route('resume')}}">View my resume!</a></p>
            </div>

            <div class="g__col4--@md mb-3">
              <h6 class="c--gray-light">Location</h6>
              <p>Portland, Oregon</p>
            </div>

            <div class="g__col4--@md mb-3">
              <h6 class="c--gray-light">Contact</h6>
              <p>adam.volkman@gmail.com</p>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
  </div>

@endsection
