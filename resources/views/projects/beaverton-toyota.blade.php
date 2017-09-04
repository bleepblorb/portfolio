@extends('project')

@section('title', 'Beaverton Toyota')

@section('heading', 'Beaverton Toyota')
@section('desc')
  <p class="">
    Beaverton Toyota is a locally owned Toyota dealership in – you guessed it – Beaverton. My firm tackled a huge, multi-year renovation of their existing building. The marketing team was responsible for all the new signage and graphics. During the process we also became their resource for design and marketing services.
  </p>
@endsection

@section('body')

  <div>
    <img src="{{asset('img/projects/bt/bt-intro.jpg')}}" alt="" class="-fill">
    <div class="container mt-1">
      <div class="g__row -max--wumbo -center">
        <div class="g__col">
          <p class="c--gray-light t--small" >© SRM Architecture and Marketing</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-7">
    <div class="g__row -max--md -center">
      <div class="g__col t--center">
        <h4>Signage</h4>
        <p class="mb-6 t--lead">
          Since we were doing a complete remodel, this meant plenty of graphics and signage was needed. Throughout the project I worked on wayfinding, ADA signage, dimensional signs, a cafe menu, vinyl graphics, an interactive kiosk wall, a tire display wall, and more.
        </p>
      </div>
    </div>
  </div>

  <div class="container -max--xl">
    <div class="g__row">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/bt/bt-community-wall-2.jpg')}}',
            '{{asset('img/projects/bt/bt-community-wall-1.jpg')}}',
            '{{asset('img/projects/bt/bt-tire-wall.jpg')}}',
            '{{asset('img/projects/bt/bt-cafe-signage.jpg')}}',
            '{{asset('img/projects/bt/bt-cafe-menu.jpg')}}',
            '{{asset('img/projects/bt/bt-retail-headers.jpg')}}',
          ]"
          caption="© SRM Architecture and Marketing"

        ></carousel>
      </div>
    </div>
  </div>

  <div class="container -max--md mt-7 mb-6">
    <div class="g__row">
      <div class="g__col t--center">
        <h4>Marketing</h4>
        <p class="t--lead">
          We also helped with marketing and other graphic design services. Below is a random assortment of projects I worked on over the years – mostly digital and print marketing. The brand was already established when I joined the team, but over the years I worked to refine and elevate its application.
        </p>
      </div>
    </div>
  </div>

  <carousel
    class="mt-6"
    :images="[
      '{{asset('img/projects/bt/bt-print-marketing.jpg')}}',
      '{{asset('img/projects/bt/bt-digital-marketing.jpg')}}',
      '{{asset('img/projects/bt/bt-clear-posters.jpg')}}',
      '{{asset('img/projects/bt/bt-clear-signage.jpg')}}',
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
      <li>2012 – 2016</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Interior Graphics / Signage</li>
      <li>Graphic Design</li>
      <li>Illustration</li>
    </ul>
  </div>


@endsection

@section('next-link')
  <a href="{{route('projects')}}/adair-homes" class="t--h1 c--white">Adair Homes</a>
@endsection
