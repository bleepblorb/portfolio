<template>
  <div id="resume__layout">
    <div class="resume__layout-wrap">

      <!-- Intro -->
      <div class="container py-4 -max--xl">
        <div class="g__row -justify-content--center">
          <!-- Heading -->
          <div class="g__col12 g__col10--@sm g__col8--@md">
            <div class="" v-if="introStyle == 'standard'" key="standard">
              <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
              <h2>I’m a multidisciplinary Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to {{model.intro.togglerIntro.value}}.</h2>
            </div>
            <div class="" v-else-if="introStyle == 'haiku'" key="haiku">
              <h2>
                A maker of things. <small>(5)</small><br>
                Design, dev, &amp; draw – you bet! <small>(7)</small><br>
                A poet? {{model.intro.togglerPoem.value}}.
              </h2>
            </div>
            <div class="" v-else-if="introStyle == 'value 3'" key="value2">
              <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
              <h4>section 3</h4>
            </div>
            <div class="" v-else-if="introStyle == 'value 4'" key="value3">
              <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
              <h4>section 4</h4>
            </div>
            <div class="" v-else-if="introStyle == 'value 5'" key="value4">
              <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
              <h4>section 5</h4>
            </div>
            <div class="" v-else-if="introStyle == 'value 6'" key="value5">
              <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
              <h4>section 6</h4>
            </div>

            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. To prove I'm an interesting person, I also enjoy
              <ul class="-inline-text">
                <li v-for="item in model.intro.personal">{{item}}</li>
              </ul>.
            </p>
            <p class="t--small t--sans mt-2">For more general info about me, visit the <a href="#">about page</a>.</p>

          </div>
        </div>
      </div>

      <!-- Portrait -->
      <div class="container -max--xl my-4">
        <portrait-phase id="portrait"></portrait-phase>
      </div>

      <!-- About -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--grover section-header">about —</h4>
          </div>
          <div class="g__col12 g__col9--@md">
            <h2 class="">It's not really what you do that matters, but how you do it.</h2>
            <p class="mb-6 t--lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>

            <div class="grid-thing -span-2">
              <div class="grid-thing__item">
                <h4>Craft</h4>
                <p>Every good idea deserves to be properly executed.</p>
              </div>
              <div class="grid-thing__item">
                <h4>Grow</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
              </div>
              <div class="grid-thing__item">
                <h4>Beyond</h4>
                <p>Normal is boring. Make something better.</p>
              </div>
              <div class="grid-thing__item">
                <h4>Climb</h4>
                <p>A natural evolution of learning, but also a simple challenge to myself. Make every project better than the last – in at least one way.</p>
              </div>
              <div class="grid-thing__item">
                <h4>Balance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
              </div>
              <div class="grid-thing__item">
                <h4>Enjoy</h4>
                <p>None of this matters much if you’re a boring jerk.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Past -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--jazzy section-header">past —</h4>
          </div>
          <div class="g__col12 g__col8--@md g__col7--@lg mb-4">
            <div class="job">
              <h6>
                <span class="job__date">2008–2012</span>
                <span class="job__location">Western Washington University</span>
              </h6>
              <h2 class="job__title">Grabbing a Bacholers of Arts degree in Graphic Design.</h2>
              <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p class="t--sans t--small c--gray-light">Read More</p>
            </div>

            <div class="job">
              <h6>
                <span class="job__date">2009–2012</span>
                <span class="job__location">Associated Students Publicity Center</span>
              </h6>
              <h2 class="job__title">Part time Graphic Designer.</h2>
              <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p class="t--sans t--small c--gray-light">Read More</p>
            </div>

            <div class="job">
              <h6>
                <span class="job__date">2009–2014</span>
                <span class="job__location">SRM Architecture and Marketing</span>
              </h6>
              <h2 class="job__title">Graphic Designer / Developer at a multidisciplinary design firm.</h2>
              <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p class="t--sans t--small c--gray-light">Read More</p>
            </div>

            <div class="job">
              <h6>
                <span class="job__date">2014–2017</span>
                <span class="job__location">SRM Architecture and Marketing</span>
              </h6>
              <h2 class="job__title">Upgrade to Lead Digital Designer.</h2>
              <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p class="t--sans t--small c--gray-light">Read More</p>
            </div>

          </div>
        </div>
      </div>

      <!-- Present -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--lightning section-header">present —</h4>
          </div>
          <div class="g__col12 g__col9--@md mb-4">
            <h4 class="c--gray-light t--normal">Currently</h4>
            <h2>Seeking new full-time or contract opportunities.</h2>
            <h5 class="c--gray">... hopefully that's why you're here.</h5>

            <h4 class="mt-6 mb-3 c--gray-light t--normal">Notable Skills and Experience</h4>
            <div class="g__row mb-4">
              <div class="g__col6 skill-list">
                <div class="card">
                  <div class="card-block">
                    <h4>ink —</h4>
                    <ul class="-relaxed">
                      <li>Print Design & Production</li>
                      <li>Environmental Graphics & Signage</li>
                      <li>Screen Printing</li>
                      <li>Letterpress Printing</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6 skill-list">
                <div class="card">
                  <div class="card-block">
                    <h4>pixels —</h4>
                    <ul class="-relaxed">
                      <li>Branding / Logos</li>
                      <li>Web / Digital Design</li>
                      <li>Iconography</li>
                      <li>Illustration</li>
                      <li>Photo Editing</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6 skill-list">
                <div class="card">
                  <div class="card-block">
                    <h4>bytes —</h4>
                    <ul class="-relaxed">
                      <li>HTML, CSS, LESS, SCSS, jQuery, PHP</li>
                      <li>Bootstrap, UIkit</li>
                      <li>Laravel, CraftCMS, Wordpress</li>
                      <li>Composer, NPM</li>
                      <li>Vagrant</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6 skill-list">
                <div class="card">
                  <div class="card-block">
                    <h4>software —</h4>
                    <ul class="-relaxed">
                      <li>Adobe inDesign / Photoshop / Illustrator</li>
                      <li>Apple Keynote</li>
                      <li>Microsoft Powerpoint</li>
                      <li>Sublime Text, Atom</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6 skill-list">
                <div class="card">
                  <div class="card-block">
                    <h4 class="">etc —</h4>
                    <ul class="-relaxed">
                      <li>Baked goods</li>
                      <li>Unicycling</li>
                      <li>Spoon carving</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <h4 class="mt-2">in progress / currently tinkering –</h4>
            <p>Git versioning &amp; deployment, Sketch, Photography, Vue.js, gulp, webpack, JavaScript ES6</p>
          </div>
        </div>
      </div>


      <!-- Future -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--gummy section-header">future —</h4>
          </div>
          <div class="g__col12 g__col9--@md mb-4">
            <h4 class="c--gray-light t--normal">Looking for</h4>
            <h2>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed D </h2>
            <p class="t--lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

            <!-- <div class="g__row mt-4">
              <div class="g__col6 mb-3">
                <h5>Collabortive</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>
              <div class="g__col6 mb-3">
                <h5>Invested</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>
              <div class="g__col6 mb-3">
                <h5>Opinionated</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>
              <div class="g__col6 mb-3">
                <h5>Opinionated</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>
            </div> -->

            <div class="g__row mt-5">
              <div class="g__col6--@sm mb-3">
                <h4 class="c--gray-light t--normal">In the queue</h4>
                <h4 class="mb-3">Wanting to Learn —</h4>
                <ul class="-relaxed">
                  <li>React / node / Too many web things</li>
                  <li>After Effects / Motion Graphics</li>
                  <li>Font Design</li>
                  <li>App Development</li>
                  <li>Calligraphy / lettering</li>
                  <!-- <li>Leathercraft</li>
                  <li>The Art of Bread making</li> -->
                </ul>
              </div>
              <div class="g__col6--@sm mb-3">
                <h4 class="c--gray-light t--normal">Bucket List</h4>
                <h4 class="mb-3">Would Love to Work On —</h4>
                <ul class="-relaxed">
                  <li>Application design</li>
                  <li>Restaurant branding / signage</li>
                  <li>Menu design</li>
                  <li>Beer / Food Packaging</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <section id="resume-outro" data-image-load data-src="/img/resume-outro.svg">
        <div class="container py-6">
          <div class="g__row t--center -max--md">
            <div class="g__col">
              <h3 class="mb-4 c--late-night">Think we'd work well together?</h3>
              <p>
                <v-button  size="lg" variant="outline" color="primary"> Get in touch </v-button>
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="bg--lightning py-6">
        <div class="container -max--md">
          <div class="g__row">
            <div class="g__col t--center">
              <a class="t--h2 c--jazzy" href="/visual-summary">Enough talk, show me some pictures.</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>

  import {store} from '../global.js';
  import portraitPhase from './portraitPhase';
  import resumeIntro from './resumeIntro';

  export default {

    components : {
      portraitPhase, resumeIntro
    },

    props : {
    },

    data() {
      return {
        state : store.resume.state,
        model: store.resume.model,
      }
    },

    computed : {
      introStyle() {
        return this.model.intro.introStyle;
      },
    },

    methods : {
      toggle() {
        Event.$emit('toggleEditMode');
      }
    }
  }
</script>
