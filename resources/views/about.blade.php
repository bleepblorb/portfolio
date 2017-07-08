@extends('base')

@section('app')
  <div id="about" class="container -max--lg">
    <div class="spacer" style="min-height: 40vh"></div>
    <div class="g__row mb-6">

      <div class="g__col12 enter__fade-in-up tester" data-spy-in data-spy="class: -inview">
        <h4 class="c--gray-light">Adam Volkman —</h4>
        <h1 class="mb-0">Designer, developer, doodler.</h1>
        <revealer class="t--h1" :options="[
          'More attractive in-person.',
          'Thinks he\'s funny.',
          'Bakes pies and shares.',
          'Telivision addict.',
          'Thinks mad libs are ___(adj)____.',
          'Feared by houseplants.',
          'Hikes around the outdoors.',
          'Photographs food, but doesn\'t post online.',
          'Always has music playing.',
          'Big fan of breakfast.',
          'Pretty nice guy.',
          'Sits a lot, but active at times.',
          'Dances when nobody\'s watching.',
          'Always an advocate of alliteration.',
          'Not fond of parties.',
          'Not much on first impression.',
        ]"></revealer>
      </div>
    </div>
  </div>

  <div class="container -max--xl" >
    <div class="g__row pt-4">
      <div class="g__col enter__fade-in-up" data-spy-in data-spy="class: -inview">
        <img data-image-load src="/img/blank.png" data-src="{{asset('img/about-portrait.jpg')}}" data-src-md="{{asset('img/about-portrait-2.jpg')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container -max--lg my-6">
    <div class="g__row" data-spy-in data-spy="target: child; delay: 200">
      <div class="g__col12  g__col5--@lg mb-6 enter__fade-in-up">
          <p class="">For information on me that is actually useful you'll want to take a peep at my resume. If you're interested in the tech/design behind the website you can take a look <a href="#">here.</a></p>
          <p>Thanks for stopping by</p>

        <p class="mt-4"><v-button color="primary" href="{{route('resume')}}" variant="outline">View Resume</v-button></p>
      </div>

      <div class="g__col6--@sm g__col4--@lg -offset-1--@lg mb-3 enter__fade-in-up">
        <h6 class="c--jean-jacket">Currently</h6>
        <p>Freelancing select projects.</p>
        <h6 class="c--jean-jacket mt-4">Location</h6>
        <p>Portland, Oregon</p>
        <h6 class="c--jean-jacket mt-4">Contact</h6>
        <p>adam.volkman@gmail.com</p>
      </div>

      <div class="g__col6--@sm g__col2--@lg mt- enter__fade-in-up">
        <h6 class="c--jean-jacket">Other Projects</h6>
        <ul class="-inline-text t--small">
          <li><a target="_blank" href="http://face-its.adamvolkman.com">Face-its</a></li>
        </ul>

        <h6 class="c--jean-jacket mt-4">Elsewhere</h6>
        <ul class="">
          <li><a href="https://twitter.com/adam_volkman" target="_blank">Twitter</a></li>
          <li><a href="https://www.linkedin.com/in/adamvolkman/" target="_blank">LinkedIn</a></li>
          <li><a href="https://github.com/bleepblorb" target="_blank">Github</a></li>
          <li><a href="http://adamvolkman.tumblr.com" target="_blank">Tumblr</a></li>
        </ul>
      </div>
    </div>
  </div>

@endsection
