@extends('archived-project')

@section('title', 'Publicity Center')

@section('heading', 'Publicity Center')

@section('desc')
  <p class="">
    A selection of the many posters created while working at the Associated Students Publicity Center during my years at Western Washington University.
  </p>
@endsection

@section('body')

  <div class="container -max--xl">
    <div class="g__row">
      <div class="g__col t--center">
        <img src="{{asset('img/projects/pc/publicity-center-header.jpg')}}" alt="" class="-fluid">
      </div>
    </div>
    <div class="g__row -max--md -center">
      <div class="g__col">
        <carousel
          class="mt-7"
          :images="[
            '{{asset('img/projects/pc/12-angry-men.jpg')}}',
            '{{asset('img/projects/pc/48hrfilm.jpg')}}',
            '{{asset('img/projects/pc/activities-showcase-2011.jpg')}}',
            '{{asset('img/projects/pc/activities-showcase-2012.jpg')}}',
            '{{asset('img/projects/pc/elect-her.jpg')}}',
            '{{asset('img/projects/pc/coneections-and-expressions.jpg')}}',
            '{{asset('img/projects/pc/poetry-night.jpg')}}',
            '{{asset('img/projects/pc/fruit-tree-workshop.jpg')}}',
            '{{asset('img/projects/pc/ravenna-woods.jpg')}}',
            '{{asset('img/projects/pc/run-for-relief-burma.jpg')}}',
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
      <li>AS Publicity Center</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2009–2012</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Posters</li>
      <li>Banners</li>
      <li>Etc.</li>
    </ul>
  </div>

@endsection
