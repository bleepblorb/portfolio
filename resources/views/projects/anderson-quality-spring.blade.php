@extends('project')

@section('title', 'Anderson Quality Spring')

@section('heading', 'Anderson Quality Spring')
@section('desc')
  <p class="">
    Anderson Quality Spring is a local custom spring manufacturer with a global client base. They came to SRM to update their existing website to reflect their global presence and emphasize their commitment to quality product and top notch customer service.
  </p>
@endsection

@section('body')

  <div>
    <img src="{{asset('img/projects/aqs/aqs-intro.jpg')}}" alt="" class="-fill">
  </div>


  <div class="container -max--md">
    <div class="g__row mt-7 -align-items--center">
      <div class="g__col12">
          <p class="t--lead">The existing site and brand had little to offer, so with the exception of the logo, we basically started from scratch. The site was custom built on Craft CMS, allowing a lot of the content to be managed by the client.</p>
      </div>
    </div>
  </div>

  <div class="bg--gray-lightest">
    <div class="container -max--lg">
      <div class="g__row mt-7 -align-items--center">
        <div class="g__col">
          <img src="{{asset('img/projects/aqs/aqs-home-full.jpg')}}" alt="" class="-fill">
        </div>
      </div>
    </div>
  </div>

  <div class="container -max--lg mb-7">
    <div class="g__row -max--md -center my-6">
      <div class="g__col">
        <h4 class="t--normal t--center">
          The product photography for the site was shot in-house. I helped determine the photographic style and was on-site during the shoot to help manage the shots and spring arrangements. I also helped with some of the final image touch-ups.
        </h4>
      </div>
    </div>

    <div class="g__row -align-items--center">
      <div class="g__col12 g__col6--@md mb-4">
        <img src="{{asset('img/projects/aqs/aqs-spring-022.jpg')}}" alt="" class="-fill mb-4">
        <img src="{{asset('img/projects/aqs/aqs-spring-034.jpg')}}" alt="" class="-fill">
      </div>

      <div class="g__col12 g__col6--@md mb-4">
        <img src="{{asset('img/projects/aqs/aqs-spring-031.jpg')}}" alt="" class="-fill">
      </div>
    </div>
  </div>

  <div class="mb-7">
    <img src="{{asset('img/projects/aqs/aqs-icons.png')}}" class="-fill mb-5" alt="">

    <div class="container">
      <div class="g__row">
        <div class="g__col3--@md mb-4">
          <p><strong>Above–</strong> A custom icon set to represent their top client industries.</p>
        </div>
        <div class="g__col t--center">
          <img src="{{asset('img/projects/aqs/aqs-map.gif')}}" class="-fluid" alt="">
        </div>
      </div>
    </div>
  </div>

  <carousel
    :images="[
      '{{asset('img/projects/aqs/aqs-ui.jpg')}}',
      '{{asset('img/projects/aqs/aqs-mobile-collage.jpg')}}',
      '{{asset('img/projects/aqs/aqs-page-collage.jpg')}}',
      '{{asset('img/projects/aqs/aqs-photography.jpg')}}',
      '{{asset('img/projects/aqs/aqs-page-rfq.jpg')}}',
    ]"
  ></carousel>

@endsection

@section('credits')
  <div class="g__col12 mb-7">
    <p class="t--normal">Visit the website: <a class="t--h5" href="http://andersonqualityspring.com" target="_blank">andersonqualityspring.com</a></p>
  </div>

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
      <li>Site Design</li>
      <li>Development</li>
      <li>Iconography</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://cargocollective.com/mrfishyfish">John Fisher</a>, Creative Director</li>
      <li><a href="http://dreshad.com">Dre Williams</a>, Photographer</li>
    </ul>
  </div>

@endsection

@section('next-link')
  <a href="{{route('projects')}}/next-level-burger" class="t--h1 c--white">Next Level Burger</a>
@endsection
