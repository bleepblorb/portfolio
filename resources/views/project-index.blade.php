@extends('base')

@section('title', 'Projects')

@section('app')
<div id="project-index" class="pb-6">
  <!-- Intro -->
  @include('partials.pictures-menu', ['active' => 'projects'])

  <div class="container project-list -max--xl mt-6">
    <div class="g__row" data-spy-in data-spy="target: .project-list__item; delay: 200">

      {{-- Anderson Quality Spring --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/anderson-quality-spring" class="project-list__link py-5">
          <img src="{{asset('img/projects/aqs/aqs-logo.svg')}}" alt="" class="" height="72px">
          <h4 class="t--h4 project-list__title">Anderson Quality Spring</h4>
          <ul class="project-list__cats mt-2">
            <li>Web Design</li>
            <li>Development</li>
          </ul>
        </a>
      </div>

      {{-- Next Level Burger --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/next-level-burger" class="project-list__link py-5">
          <img src="{{asset('img/projects/nlb/nlb-logo.svg')}}" alt="" class="" height="72px">
          <h4 class="project-list__title">Next Level Burger</h4>
          <ul class="project-list__cats mt-2">
            <li>Interior Graphics</li>
            <li>Signage</li>
          </ul>
        </a>
      </div>

      {{-- Beaverton Toyota --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/beaverton-toyota" class="project-list__link py-5">
          <img src="{{asset('img/projects/bt/bt-logo.svg')}}" alt="" class="" height="72px">
          <h4  class="project-list__title">Beaverton Toyota</h4>
          <ul class="project-list__cats mt-2">
            <li>Interior Graphics</li>
            <li>Signage</li>
            <li>Marketing</li>
          </ul>
        </a>
      </div>

      {{-- Adair Homes --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/adair-homes" class="project-list__link py-5">
          <img src="{{asset('img/projects/adair/adair-logo.svg')}}" alt="" class="" height="72px">
          <h4 class="project-list__title">Adair Homes</h4>
          <ul class="project-list__cats mt-2">
            <li>Web Design</li>
            <li>Development</li>
          </ul>
        </a>
      </div>

      {{-- World Trade Center --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/world-trade-center" class="project-list__link py-5">
          <img src="{{asset('img/projects/wtc/wtc-logo.svg')}}" alt="" class="" height="72px">
          <h4 class="project-list__title">World Trade Center</h4>
          <ul class="project-list__cats mt-2">
            <li>Interactive Design</li>
            <li>Front End Development</li>
          </ul>
        </a>
      </div>

      {{-- New Relic --}}
      <div class="project-list__item enter__fade-in-up">
        <a href="{{route('projects')}}/new-relic" class="project-list__link py-5">
          <img src="{{asset('img/projects/nr/nr-logo.svg')}}" alt="" class="" height="72px">
          <h1 class="t--h4 project-list__title">New Relic</h1>
          <ul class="project-list__cats mt-2">
            <li>Interior Graphics</li>
            <li>Signage</li>
          </ul>
        </a>
      </div>
    </div>

    {{-- Archive --}}
    <div class="g__row mt-6">
      <div class="g__col">
        <p class="t--center">
          <a href="{{route('archive')}}" class="t--h4 c--jean-jacket">Archive <icon name="arrow__right-lg"></icon></a>
        </p>
      </div>
    </div>
  </div>

</div>

@endsection
