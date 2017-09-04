@extends('base')

@section('title', 'Projects')

@section('app')
<div id="project-archive" class="menu-pad pb-6">

  <div class="container">
    <div class="g__row">
      <div class="g__col t--center">
        <h4>Project Archive</h4>
      </div>
    </div>
  </div>

  <div class="container -max--md">

    {{-- Archive --}}
    <div class="g__row mt-7">
      <div class="g__col">
        <p class="">
          <a href="{{route('projects')}}" class="t--h5 c--jean-jacket"><icon name="arrow__left-lg"></icon> Current</a>
        </p>
      </div>
    </div>

    <div class="g__row my-5">
      <div class="g__col g__col4--@md mb-4">
        <h5>2016</h5>
        <ul>

        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2015</h5>
        <ul>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2014</h5>
        <ul>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2013</h5>
        <ul>

        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2012</h5>
        <ul>
          <li><a href="{{route('projects')}}/publicity-center">Publicity Center</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

@endsection
