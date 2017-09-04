@extends('project')

@section('title', 'Adair Homes')

@section('heading', 'Adair Homes')
@section('desc')
  <p class="">
    Adair Homes is one of the largest custom home builders in the Pacific Northwest. They came to me to help give their website a much needed update. Their old site was a slow, image-heavy site that wasn't mobile friendly and no longer matched their other marketing channels. We started from scratch to build a quality resource for potential clients.
  </p>
@endsection

@section('body')

  <div>
    <img src="{{asset('img/projects/adair/adair-intro.jpg')}}" alt="" class="-fill">
  </div>


  <div class="container -max--md">
    <div class="g__row mt-7 -align-items--center">
      <div class="g__col12">
          <p class="t--lead">Working within their current brand, I completely rebuilt their site to meet current web standards and provide a robust responsive experience. I worked directly with their internal marketing and development team to build a framework that the site can continue to evolve off of.</p>
      </div>
    </div>
  </div>

  <div class="bg--gray-lightest">
    <div class="container -max--lg">
      <div class="g__row mt-7 -align-items--center">
        <div class="g__col">
          <img src="{{asset('img/projects/adair/adair-home-full.jpg')}}" alt="" class="-fill">
        </div>
      </div>
    </div>
  </div>

  <div class="my-7">
    <div class="container -max--wumbo">
      <div class="g__row -align-items--center">
        <div class="g__col t--center mb-4">
          <img src="{{asset('img/projects/adair/adair-plan-link.jpg')}}" class="-fill mb-4" alt="">
          <img src="{{asset('img/projects/adair/adair-gallery-popup.jpg')}}" class="-fill" alt="">
        </div>
        <div class="g__col6--@md mb-4">
          <img src="{{asset('img/projects/adair/adair-custom-homes.jpg')}}" class="-fill" alt="">
        </div>
      </div>
    </div>
  </div>

  <carousel
    :images="[
      '{{asset('img/projects/adair/adair-ui.jpg')}}',
      '{{asset('img/projects/adair/adair-category-slider.jpg')}}',
      '{{asset('img/projects/adair/adair-menus.jpg')}}',
      '{{asset('img/projects/adair/adair-contact-map.jpg')}}',
      '{{asset('img/projects/adair/adair-path-to-ownership.jpg')}}',
    ]"
  ></carousel>

@endsection

@section('credits')
  <div class="g__col12 mb-7">
    <p class="t--normal">Visit the website: <a class="t--h5" href="http://adairhomes.com" target="_blank">adairhomes.com</a></p>
  </div>

  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>Freelance</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2016</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Site Design</li>
      <li>Development</li>
    </ul>
  </div>

@endsection

@section('next-link')
  <a href="{{route('projects')}}/anderson-quality-spring" class="t--h1 c--white">Anderson Quality Spring</a>
@endsection
