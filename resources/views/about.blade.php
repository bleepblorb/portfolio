@extends('base')

@section('app')
  <div id="about" class="container -max--lg">
    <div class="spacer" style="min-height: 40vh"></div>
    <div class="g__row mb-6">

      <div class="g__col12 -max-lg">
        <h4 class="c--gray-light">Adam Volkman —</h4>
        <h1 class="mb-0">Designer, developer, doodler.</h1>
        <revealer class="t--h1 c--jazzy" :options="[
          'More attractive in-person.',
          'Looking for new skills.',
          'Thinks he\'s funny.',
          'Bakes pies and shares.',
          'Telivision addict.',
          'Eats healthy or terrible.',
          'Fond of ___________.',
          'Wishes ________.',
          'Thinks mad libs are ___(adj)____.',
          'Feared by houseplants.',
          'Walks in / around nature.',
          'Photographs food, but doesn\'t post online.',
          'Usually listening to music.',
          'Pretty good guy.',
          'Would rather talk about you.',
          'Bless him, he tries.',
          'Sits a lot, but active at times.',
          'Dances when nobody\'s watching.',
          'Always an advocate of alliteration.',
        ]"></revealer>

        <p class="mt-4">For more details, please view my <a href="{{route('resume')}}" >resume</a>.</p>
      </div>
    </div>
  </div>

  <div class="container -max--xl">
    <div class="g__row pt-4">
      <div class="g__col">
        <img data-image-load src="/img/blank.png" data-src="{{asset('img/about-portrait.jpg')}}" data-src-md="{{asset('img/about-portrait-2.jpg')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  {{-- <img data-image-load src="/img/blank.png" data-src="{{asset('img/about-portrait.jpg')}}" data-src-md="{{asset('img/about-portrait-2.jpg')}}" alt="" class="img-fluid"> --}}

  {{-- <div class="container -max--xl my-6">
    <div class="g__row">
      <div class="g__col6--@sm g__col3--@lg mb-3">
        <h6 class="c--jean-jacket">Currently</h6>
        <p>Looking for full time work.</p>
      </div>

      <div class="g__col6--@sm g__col3--@lg mb-3">
        <h6 class="c--jean-jacket">Location</h6>
        <p>Portland, Oregon</p>
      </div>

      <div class="g__col6--@sm g__col3--@lg mb-3">
        <h6 class="c--jean-jacket">Contact</h6>
        <p>adam.volkman@gmail.com</p>
      </div>

      <div class="g__col6--@sm g__col3--@lg mt-">
        <h6 class="c--jean-jacket">Elsewhere</h6>
        <ul class="-inline-text t--small">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Github</a></li>
          <li><a href="#">Tumblr</a></li>
        </ul>
      </div>
    </div> --}}

  <div class="container -max--lg my-6">
    <div class="g__row -max--lg">
      <div class="g__col12  g__col4--@lg mb-3">
        <p><v-button color="primary" variant="outline">View Resume</v-button></p>
      </div>

      <div class="g__col6--@sm g__col4--@lg mb-3">
        <h6 class="c--jean-jacket">Currently</h6>
        <p>Freelancing select projects.</p>
        <h6 class="c--jean-jacket mt-4">Location</h6>
        <p>Portland, Oregon</p>
        <h6 class="c--jean-jacket mt-4">Contact</h6>
        <p>adam.volkman@gmail.com</p>
      </div>

      <div class="g__col6--@sm g__col4--@lg mt-">
        <h6 class="c--jean-jacket">Other Projects</h6>
        <ul class="-inline-text t--small">
          <li><a target="_blank" href="http://face-its.adamvolkman.com">Face-its</a></li>
        </ul>

        <h6 class="c--jean-jacket mt-4">Elsewhere</h6>
        <ul class="">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Github</a></li>
          <li><a href="#">Tumblr</a></li>
        </ul>
      </div>
    </div>

    <div style="height: 30vh"></div>

    <div class="g__row mt-6">
      <div class="g__col">
        <p class="t--small c--gray-light">For information about the development of the site, go <a href="#">here</a>.</p>
      </div>
    </div>

  </div>

  <div class="container">
    <div class="g__row my-6 t--center -max--lg">

    </div>
  </div>
@endsection
