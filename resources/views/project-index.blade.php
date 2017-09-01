@extends('base')

@section('title', 'Projects')

@section('app')
<div id="project-index" class="menu-pad pb-6">
  <!-- Intro -->
  @include('partials.pictures-menu', ['active' => 'projects'])

  <div class="container">
    <div class="g__row">
      <div class="g__col t--center">
        <p>I'm still working on populating these... more to come.</p>
      </div>
    </div>
  </div>

  <div class="container project-list -max--md mt-6">
    <div class="g__row">

      {{-- Anderson Quality Spring --}}
      <div class="project-list__item py-5">
        <a href="{{route('projects')}}/anderson-quality-spring" class="t--h1 project-list__title">Anderson Quality Spring</a>
        <ul class="project-list__cats mt-2">
          <li>Web Design</li>
          <li>Development</li>
        </ul>
      </div>

      {{-- Next Level Burger --}}
      <div class="project-list__item py-5">
        <a href="{{route('projects')}}/next-level-burger" class="t--h1 project-list__title">Next Level Burger</a>
        <ul class="project-list__cats mt-2">
          <li>Interior Graphics</li>
          <li>Signage</li>
        </ul>
      </div>

      {{-- Beaverton Toyota --}}
      <div class="project-list__item py-5">
        <a href="{{route('projects')}}/beaverton-toyota" class="t--h1 project-list__title">Beaverton Toyota</a>
        <ul class="project-list__cats mt-2">
          <li>Interior Graphics</li>
          <li>Signage</li>
          <li>Marketing Materials</li>
        </ul>
      </div>

      {{-- Adair Homes --}}
      <div class="project-list__item py-5">
        <h5 class="c--jazzy">Coming Soon</h5>
        <h1 href="#" class="project-list__title c--gray-light">Adair Homes</h1>
        <ul class="project-list__cats mt-2">
          <li>Web Design</li>
          <li>Development</li>
        </ul>
        <p>For now, you can visit the site at <a href="http://adairhomes.com" target="_blank">adairhomes.com</a></p>
      </div>

      {{-- World Trade Center --}}
      <div class="project-list__item py-5">
        <h5 class="c--jazzy">Working on it</h5>
        <h1 class="t--h1 project-list__title c--gray-light">World Trade Center</h1>
        <ul class="project-list__cats mt-2">
          <li>Interactive Design</li>
          <li>Front End Development</li>
        </ul>
      </div>

      {{-- New Relic --}}
      <div class="project-list__item py-5">
        <h5 class="c--jazzy">In the Queue</h5>
        <h1 class="t--h1 project-list__title c--gray-light">New Relic</h1>
        <ul class="project-list__cats mt-2">
          <li>Interior Graphics</li>
          <li>Signage</li>
        </ul>
      </div>

    </div>
  </div>

</div>

@endsection
