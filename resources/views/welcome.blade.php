@extends('base')

@section('app')
  <div style="background-color:;">
    <div class="container -max--md">
      <div class="g__row -align-items--center" style="min-height: 90vh;">
        <div class="g__col ">
          <div class="g__row -justify-content--center t--center">
            <div class="g__col mb-6 py-6">
              {{-- <img src="{{asset('/img/wd-intro.svg')}}" alt="" class="mb-2" width="48px"> --}}
              <img src="{{asset('/img/portrait-beard.png')}}" alt="" class="mb-2" width="220px">
              <h1 class="c--jazzy">
                Well Done is the superflous moniker of Adam Volkman —
                <toggler :options="[
                  'a soggy Portland creative.',
                  'a pretty nice guy',
                  'a design dude'
                ]"></toggler>
              </h1>
            </div>
          </div>
          <div class="g__row -max--md t--center">
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
          </div>

        </div>
      </div>
    </div>
  </div>
  {{-- <div class="bg--lightning py-6" >
    <div class="coontainer">
      <div class="g__row -max--md">
        <div class="g__col">
          <h6 class="c--jazzy">Currently</h6>
          <p>Looking for full time work. <a href="{{route('resume')}}">View my resume!</a></p>
        </div>

        <div class="g__col">
          <h6>Location</h6>
          <p>Portland, Oregon</p>
        </div>

        <div class="g__col">
          <h6>Contact</h6>
          <p>adam.volkman@gmail.com</p>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
