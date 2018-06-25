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
          <li><a href="{{route('projects')}}/next-level-burger">Next Level Burger</a></li>
          <li><a href="{{route('projects')}}/world-trade-center">World Trade Center</a></li>
          <li><a href="{{route('projects')}}/beaverton-toyota">Beaverton Toyota</a></li>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2015</h5>
        <ul>
          <li><a href="{{route('projects')}}/beaverton-toyota">Beaverton Toyota</a></li>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2014</h5>
        <ul>
          <li><a href="{{route('projects')}}/hood-river-distillers">Hood River Distillers</a></li>
          <li><a href="{{route('projects')}}/new-relic">New Relic</a></li>
          <li><a href="{{route('projects')}}/park-square">100 Park Square</a></li>
        </ul>
      </div>
      
      <div class="g__col g__col4--@md mb-4">
        <h5>2013</h5>
        <ul>
          <li><a href="{{route('projects')}}/raindrop-roofing">Raindrop Roofing</a></li>
          <li><a href="{{route('projects')}}/block-300">Block 300</a></li>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2012</h5>
        <ul>
          <li><a href="{{route('projects')}}/creatures">Creatures Book</a></li>
          <li><a href="{{route('projects')}}/publicity-center">Publicity Center</a></li>
          <li><a href="{{route('projects')}}/senior-showcase">WWU Senior Showcase</a></li>
          <li><a href="{{route('projects')}}/lettering-quote">William James Quote</a></li>
          <li><a href="{{route('projects')}}/grid-poster">Grid Poster</a></li>
          <li><a href="{{route('projects')}}/carlson-wedding">Carlson Wedding</a></li>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
        <h5>2011</h5>
        <ul>
          <li><a href="{{route('projects')}}/goalbook">Goalbook Planner</a></li>
          <li><a href="{{route('projects')}}/segd-brochure">SEGD Brochure</a></li>
          <li><a href="{{route('projects')}}/7-10-split">Seven Ten Split</a></li>
          <li><a href="{{route('projects')}}/relay-for-life">Relay For Life</a></li>
          <li><a href="{{route('projects')}}/head-and-the-heart">Head And The Heart</a></li>
        </ul>
      </div>

      <div class="g__col g__col4--@md mb-4">
          <h5>2010</h5>
          <ul>
            <li><a href="{{route('projects')}}/unfinished-comic">Unfinished Comic</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>

@endsection
