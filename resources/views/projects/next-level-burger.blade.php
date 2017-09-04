@extends('project')

@section('title', 'Next Level Burger')

@section('heading', 'Next Level Burger')
@section('desc')
  <p class="">
    Next Level Burger is a 100% plant based burger joint that had gathered a following at their initial restaurant in Bend, OR. They were ready to start expanding, so naturally their first stop was Portland. They came to us to take their new restaurants to the next level (sorry).
  </p>
@endsection

@section('body')

  <div>
    <img src="{{asset('img/projects/nlb/nlb-mural-detail.jpg')}}" alt="" class="-fill">
  </div>

  <div class="container -max--xl">
    <div class="g__row mt-7 -align-items--center">
      <div class="g__col12 g__col6--@md">
          <p class="t--lead mb-6 mr-4">The client wanted the space have the feeling of a classic burger joint while still resonating with their core demographic of healthy eaters and vegans. We worked to create areas of large impactful graphics and incorporate fun 'brand experiences' throughout the space.</p>
        <img src="{{asset('img/projects/nlb/nlb-cup-design.jpg')}}" alt="" class="-fill">
      </div>
      <div class="g__col12 g__col6--@md">
          <img src="{{asset('img/projects/nlb/nlb-laser-wall.jpg')}}" alt="" class="-fill mb-4">
          <img src="{{asset('img/projects/nlb/nlb-bus-station.jpg')}}" alt="" class="-fill">
      </div>
    </div>
    <div class="g__row mt-7">
      <div class="g__col">
        <h4 class="t--normal t--center -max--md -center">
          The new graphics were built to push the existing brand and work with the new interior style. We aimed to make the brand feel more vibrant, joyous, and a bit quirky.
        </h4>
      </div>
    </div>
  </div>

  <div class="my-7">
      <img src="{{asset('img/projects/nlb/nlb-mural.jpg')}}" class="-fill" alt="">
  </div>

  <div class="container -max--xl">
    <div class="g__row -align-items--center">
      <div class="g__col12 g__col6--@md mb-4">
        {{-- <img src="{{asset('img/projects/nlb/nlb-burger-divider.jpg')}}" alt="" class="-fill mb-4"> --}}
        <img src="{{asset('img/projects/nlb/nlb-togo-bag.jpg')}}" alt="" class="-fill mb-4">
        <img src="{{asset('img/projects/nlb/nlb-menu-detail.jpg')}}" alt="" class="-fill">
      </div>

      <div class="g__col12 g__col6--@md mb-4">
        <img src="{{asset('img/projects/nlb/nlb-exterior-signage.jpg')}}" alt="" class="-fill">
      </div>
    </div>
  </div>

  <div class="container -max--md my-6">
    <div class="g__row">
      <div class="g__col">
        <h4 class="t--normal t--center mt-4">
          The menu is an important part of every restaurant (obviously). I set out to create a menu that was a beacon of the new brand experience, while making ordering effortless. I broke up the menu into phases – main dish, sides, and beverage – making their signature burgers the feature.
        </h4>
      </div>
    </div>
  </div>

  <carousel
    class="mt-7"
    :images="[
      '{{asset('img/projects/nlb/nlb-menu-board.jpg')}}',
      '{{asset('img/projects/nlb/nlb-menu-digital.jpg')}}',
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
      <li>2015</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Menu design / layout</li>
      <li>Interior graphics / signage</li>
      <li>Tableware design</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://cargocollective.com/mrfishyfish">John Fisher</a>, Creative Director</li>
      <li>Nathan Shigeta, Designer</li>
      <li><a href="http://dreshad.com">Dre Williams</a>, Designer</li>
    </ul>
  </div>

@endsection

@section('next-link')
  <a href="{{route('projects')}}/beaverton-toyota" class="t--h1 c--white">Beaverton Toyota</a>
@endsection
