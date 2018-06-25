@extends('archived-project')

@section('title', 'Raindrop Roofing')

@section('heading', 'Raindrop Roofing')

@section('desc')
  <p>
    Raindrop NW came to SRM looking for a website that would help take their business to the next level. They had a rather reputable name in the residential side of their business, but their commercial volume was lacking. We raised the presence of their brand to a more corporate level, giving an equal weight to both commercial and residential services. The trick was balancing a commercial site that was sleek and efficient while still maintaining a residential site that was inviting and informative for the casual homeowner.
  </p>
@endsection

@section('body')

  <div class="container -max--xl">
    <div class="g__row t--center">
      <div class="g__col">
        <img src="{{asset('img/projects/raindrop/raindrop-web-01.png')}}" alt="" class="-fluid mb-6">
      </div>
    </div>
    <div class="g__row -align-items--center">
      <div class="g__col12 g__col6--@md t--center">
        <img src="{{asset('img/projects/raindrop/raindrop-web-03.jpg')}}" alt="" class="-fluid mb-4">
      </div>
      <div class="g__col12 g__col--@md t--center">
        <img src="{{asset('img/projects/raindrop/raindrop-web-04.jpg')}}" alt="" class="-fluid mb-4">
        <img src="{{asset('img/projects/raindrop/raindrop-web-06.jpg')}}" alt="" class="-fluid mb-4">
      </div>
    </div>
    <div class="g__row mt-6">
      <div class="g__col t--center">
        <img src="{{asset('img/projects/raindrop/raindrop-web-05.jpg')}}" alt="" class="-fluid mb-4">
        <img src="{{asset('img/projects/raindrop/raindrop-web-07.jpg')}}" alt="" class="-fluid mb-4">
      </div>
    </div>
  </div>
@endsection

@section('credits')
  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>SRM Architecture and Marketing</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2013</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Web Design / Development</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://amandabadgley.com/" target="_blank">Amanda Badgley</a>, Creative Director</li>
    </ul>
  </div>

@endsection
