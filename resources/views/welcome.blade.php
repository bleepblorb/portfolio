@extends('base')

@section('app')
  <div style="background-color:;">
    <div class="container -max--md">
      <div class="g__row -align-items--center" style="min-height: 100vh;">
        <div class="g__col">
          <div class="g__row -justify-content--center t--center">
            <div class="g__col">
              <h1 class="c--primary"><span>Well Done is the superflous moniker of Adam Volkman — a soggy Portland creative.</span></h1>
            </div>
          </div>
          <div class="g__row  -justify-content--center mt-4">
            <div class="g__col t--center">
              <p>
                <a href="{{route('resume')}}" class="btn btn-secondary">View Resume</a>
              </p>
              <p>
                {{-- <a href="{{route('resume')}}" class="">View Resume</a> --}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
