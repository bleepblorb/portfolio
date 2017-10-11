@extends('project')

@section('title', 'World Trade Center Portland')

@section('heading', 'Wold Trade Center Portland')
@section('desc')
  <p class="">
    The World Trade Center's leadership is committed to continual improvement of the sustainability of its campus and the well being of its tenants. While remodeling the main lobby, they wanted to include a dashboard to showcase these sustainability initiatives. We built out a platform for users to actively engage with the content and included helpful resources for tenants and visitors.
  </p>
@endsection

@section('body')

  <div>
    <img src="{{asset('img/projects/wtc/wtc-dashboard-wall.jpg')}}" alt="" class="-fill">
    <div class="container py-2">
      <div class="g__row">
        <div class="g__col">
          <p class="t--small">® World Trade Center Portland</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container -max--md">
    <div class="g__row my-6 -align-items--center">
      <div class="g__col12">
        <h4>Lobby Dashboard</h4>
        <p class="t--lead">The dashboard was made up of three touch panels positioned to look seamless, yet function individually. The design was built to fit within the overall World Trade Center brand, but is unique enough to have it's own Portland flair.
        </p>
        <p>One panel features current sustainable initiatives, one (provided by Seimens) shows a live feed of current resource usage, and the last is a digital directory for the building. The directory also provides helpful information for tenants – like the weather and nearby Trimet times.</p>
      </div>
    </div>
  </div>


 <div style="padding-top: 15%">
    <div class="container" style="background-color: #5284b9;">
      <div class="g__row -max--xl -center" >
        <div class="g__col mb-6">
          <video class="-rounded -floating" loop playsinline style="margin-top:-15%;" data-spy-in-out>
            <source src="{{ asset('img/projects/wtc/wtc-dash-story-web.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </div>
  {{--  <div>
    <img src="{{asset('img/projects/wtc/wtc-story-intro.jpg')}}" alt="" class="-fill">
  </div>  --}}

  <div class="bg--gray-lightest pb-6"></div>
  <carousel
    :images="[
      '{{asset('img/projects/wtc/wtc-story-explore.jpg')}}',
      '{{asset('img/projects/wtc/wtc-story-explore-modal.jpg')}}',
      '{{asset('img/projects/wtc/wtc-story-mission.jpg')}}',
      '{{asset('img/projects/wtc/wtc-directory-home.jpg')}}',
      '{{asset('img/projects/wtc/wtc-directory-listing.jpg')}}',
      '{{asset('img/projects/wtc/wtc-directory-listing-modal.jpg')}}',
      '{{asset('img/projects/wtc/wtc-directory-map.jpg')}}',
    ]"
  ></carousel>
  

@endsection

@section('credits')
  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>SRM Architecture and Marketing</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2016</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>UX Design</li>
      <li>Front End Development</li>
    </ul>
  </div>


  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://lee-feidelson.squarespace.com">Lee Feidelson</a>, Creative Director</li>
    </ul>
  </div>

@endsection

@section('next-link')
  <a href="{{route('projects')}}/new-relic" class="t--h1 c--white">New Relic</a>
@endsection
