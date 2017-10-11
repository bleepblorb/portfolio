@extends('project')

@section('title', 'New Relic')

@section('heading', 'New Relic')
@section('desc')
  <p class="">
    New Relic, an international software company full of self described 'data nerds', was expanding into the Pacific NW and wanted an office that showcases its unique culture. A bold graphics and signage system was developed to do just that while also blending seamlessly with the space.
  </p>
  <p class="t--small c--gray-light">Photography is copyright SRM Architecture and Marketing.</p>
@endsection

@section('body')

  <div>
    <img alt="" class="-fill" data-image-load
        src="{{ asset('img/blank_2-1.png') }}"
        data-src="{{asset('img/projects/nr/nr-intro__sm.jpg')}}"
        data-src-lg="{{asset('img/projects/nr/nr-intro.jpg')}}"
    >
  </div>

  <div class="container -max--md my-6">
      <div class="g__row">
          <div class="g__col">
            <p class="t--lead">
                New Relic wanted an extensive sign package to go with their new office buildouts in Portland and Seattle. The vibrant signage helped solidify the fun, energetic atmosphere they were shooting for. 
            </p>
            <p>
               The themes of floors are extensions of the employees hobbies / interests (like comics &amp; sci-fi) and were extremely fun to bring to life. I worked on privacy graphics, wall graphics, room signage, and wayfinding.
            </p>
          </div>
      </div>
  </div>

  <div class="container -max--xl">
    <div class="g__row -align-items--center">
      <div class="g__col12 g__col6--@md mb-4">
        <img src="{{asset('img/projects/nr/nr-technodrome.jpg')}}" alt="" class="-fill">
      </div>
      <div class="g__col12 g__col6--@md">
          <img src="{{asset('img/projects/nr/nr-bat-cave.jpg')}}" alt="" class="-fill mb-4">
          <img src="{{asset('img/projects/nr/nr-tardis.jpg')}}" alt="" class="-fill">
      </div>
    </div>
  </div>

  <div class="my-7">
    <img class="-fill" alt="" data-image-load
        src="{{ asset('img/blank_2-1.png') }}"
        data-src="{{asset('img/projects/nr/nr-conference-room__sm.jpg')}}"
        data-src-md="{{asset('img/projects/nr/nr-conference-room.jpg')}}"
    >
  </div>

  <div class="container -max--xl">
    <div class="g__row -align-items--center">
      <div class="g__col12 mb-4">
        <img alt="" class="-fill" data-image-load
            src="{{ asset('img/blank_2-1.png') }}"
            data-src="{{ asset('img/projects/nr/nr-pod-icons__sm.png') }}"
            data-src-md="{{ asset('img/projects/nr/nr-pod-icons.png') }}"
        >
      </div>
    </div>
    <div class="g__row">
      <div class="g__col mb-4">
        <img alt="" class="-fill" data-image-load 
            src="{{ asset('img/blank_2-1.png') }}"
            data-src="{{asset('img/projects/nr/nr-room-icons__sm.png')}}"
            data-src-md="{{asset('img/projects/nr/nr-room-icons.png')}}"
        >
      </div>
    </div>
  </div>

  <div class="container -max--md my-6">
    <div class="g__row">
      <div class="g__col">
        <h4 class="t--normal t--center mt-4">
          The "nerd couple" was originally developed as a more fun approach to denoting men's / women's restrooms. The client enjoyed them so much that soon they started making appearances in a variety of wardrobes.
        </h4>
      </div>
    </div>
  </div>

  <div class="mb-6">
    <img src="{{asset('img/projects/nr/nr-nerd-signs.png')}}" alt="" class="-fill">
  </div>


  <div class="container -max--xl mb-6">
    <div class="g__row -align-items--center">
      <div class="g__col12 g__col6--@md mb-4">
          <img src="{{asset('img/projects/nr/nr-mens-spock.jpg')}}" alt="" class="-fill mb-4">
          <img src="{{asset('img/projects/nr/nr-nerd-sprockets.jpg')}}" alt="" class="-fill">
      </div>
      <div class="g__col12 g__col6--@md">
          <img src="{{asset('img/projects/nr/nr-nerd-amsterdam.jpg')}}" alt="" class="-fill mb-4">
          <img src="{{asset('img/projects/nr/nr-nerd-womans.jpg')}}" alt="" class="-fill">
      </div>
    </div>
  </div>

 <div>
    <img class="-fill" alt="" data-image-load
        src="{{ asset('img/blank_2-1.png') }}"
        data-src="{{asset('img/projects/nr/nr-breakroom-graphic__sm.jpg')}}"
        data-src-md="{{asset('img/projects/nr/nr-breakroom-graphic.jpg')}}"
    >
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
      <li>2012-14</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Interior graphics / signage</li>
      <li>Illustration</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://amandabadgley.com" target="_blank">Amanda Badgley</a>, Creative Director</li>
      <li>Nathan Shigeta, Designer</li>
      <li>Thomas Averin, Designer</li>
    </ul>
  </div>

@endsection

@section('next-link')
  <a href="{{route('projects')}}/anderson-quality-spring" class="t--h1 c--white">Anderson Quality Spring</a>
@endsection
