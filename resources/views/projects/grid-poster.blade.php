@extends('archived-project')

@section('title', 'Grid Poster')

@section('heading', 'Grid Poster')

@section('desc')
  <p>  
    Made for a screen printing demonstration during WWU Design Days. I took a selection of patterns generated on a grid and screenprinted them overlaid to create custom posters on the fly. Some of the prints were made into pocket sketch books and sold to benefit the Western Design club.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/grid-poster/grid-poster-03.jpg')}}',
            '{{asset('img/projects/grid-poster/grid-poster-01.jpg')}}',
            '{{asset('img/projects/grid-poster/grid-poster-02.jpg')}}',
            '{{asset('img/projects/grid-poster/grid-poster-04.jpg')}}',
            '{{asset('img/projects/grid-poster/grid-poster-05.jpg')}}',
            '{{asset('img/projects/grid-poster/grid-poster-06.jpg')}}',
          ]"
        ></carousel>
      </div>
    </div>
  </div>
@endsection

@section('credits')
  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>School Project</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2010</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Skills</h5>
    <ul>
      <li>Illustration</li>
    </ul>
  </div>
@endsection
