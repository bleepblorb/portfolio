<template>
  <div id="resume__layout">
    <div class="resume__layout-wrap menu-pad">
      <!-- Intro -->
      <div class="container pb-6 -max--xl">
        <div class="g__row -justify-content--center">
          <!-- Heading -->
          <div class="g__col12 g__col10--@sm g__col8--@md enter__fade-in-up" data-spy-in>
            <h4 class="c--jean-jacket">Adam Volkman —</h4>

            <!-- standard -->
            <div v-if="introStyle == 'standard'" key="standard">
              <h2>I’m a multidisciplinary Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to {{model.intro.togglerIntro.options[model.intro.togglerIntro.index]}}.</h2>
            </div>

            <!-- haiku -->
            <div v-else-if="introStyle == 'haiku'">
              <h2>
                A maker of things. <small>(5)</small><br>
                Design, dev, &amp; draw – you bet! <small>(7)</small><br>
                A poet? {{model.intro.togglerPoem.options[model.intro.togglerPoiem.index]}}.
              </h2>
            </div>

            <!-- hard to get -->
            <div v-else-if="introStyle == 'hard'">
              <h2>I'm a graphic designer &amp; developer currently doing my own thing. It's pretty sweet. I mean, if you need some help out, I guess I could join you.</h2>
            </div>

            <!-- confident -->
            <div v-else-if="introStyle == 'confident'">
              <h2>I'm a pretty slick dude with skills and straight teeth. Probably the best that ever was.</h2>
            </div>

            <!-- minimal -->
            <div v-else-if="introStyle == 'minimal'">
              <h1>Maker of things</h1>
            </div>

            <!-- Elevator -->
            <div class="" v-else-if="introStyle == 'elevator'">
              <h2>Like {{model.intro.togglerElevator.options[model.intro.togglerElevator.index]}}.</h2>
            </div>

            <!-- intro par -->
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. To prove I'm an interesting person, I also enjoy
              <ul class="-inline-text">
                <li v-for="item in model.intro.personal">{{item}}</li>
              </ul>.
            </p>
          </div>
        </div>
      </div>

      <!-- Portrait -->
      <div class="container -max--xl my-4">
        <div id="portrait" class="enter__fade-in-up" data-spy-in>
          <div class="portrait__image" data-image-load ref="portrait"
            :data-src="model.portraitUrls.xs ? model.portraitUrls.xs : false"
            :data-src-sm="model.portraitUrls.sm ? model.portraitUrls.sm : false"
            :data-src-md="model.portraitUrls.md ? model.portraitUrls.md : false"
            :data-src-lg="model.portraitUrls.lg ? model.portraitUrls.lg : false"
            :data-src-xl="model.portraitUrls.xl ? model.portraitUrls.xl : false"
          ></div>
        </div>
        <!-- <img class="img-fluid" data-image-load
          :data-src="model.portraitUrls.xs ? model.portraitUrls.xs : false"
          :data-src-sm="model.portraitUrls.sm ? model.portraitUrls.sm : false"
          :data-src-md="model.portraitUrls.md ? model.portraitUrls.md : false"
          :data-src-lg="model.portraitUrls.lg ? model.portraitUrls.lg : false"
          :data-src-xl="model.portraitUrls.xl ? model.portraitUrls.xl : false"
        > -->
      </div>



      <!-- About -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--grover section-header">about —</h4>
          </div>
          <div class="g__col12 g__col9--@md">
            <div class="enter__fade-in-up" data-spy-in>
              <h2 class="">It's not really what you do that matters, but how you do it.</h2>
              <p class="mb-6 t--lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
            </div>
            <div class="grid-thing -span-2" data-spy-in  data-spy="target: .enter__fade-in-up; delay: 250">
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('craft') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/craft-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Craft</h4>
                  <p>Every good idea deserves to be properly executed. (icon = tool, robot)</p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('grow') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Grow</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. (icon = plant, tree)</p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('beyond') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Beyond</h4>
                  <p>Normal is boring. Make something better. (icon = space, spaceship)</p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('climb') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Climb</h4>
                  <p>A natural evolution of learning, but also a simple challenge to myself. Make every project better than the last – in at least one way. (icon = ladder, mountain)</p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('balance') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Balance</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('enjoy') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Enjoy</h4>
                  <p>None of this matters much if you’re a boring jerk. </p>
                </div>
              </div>
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('enjoy') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/grow-icon.jpg" class="mb-1" alt="" width="100px">
                  </div>
                  <h4>Purpose</h4>
                  <p>Everything should have one. Generally, this should be more than "looks cool". (icon = target)</p>
                </div>
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
            <past-preview id="past"></past-preview>
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
            <div class="g__row mb-4" data-spy-in  data-spy="target: .enter__fade-in-up; delay: 250">
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.present.skills.indexOf('print') > -1">
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
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.present.skills.indexOf('digital') > -1">
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
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.present.skills.indexOf('development') > -1">
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
              <div class="g__col6--@sm skill-list enter__fade-in-up">
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
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.present.skills.indexOf('other') > -1">
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
                <h4 class="c--gray-light t--normal">Interests</h4>
                <h4 class="mb-3">Would Love to Work On —</h4>
                <ul class="-relaxed">
                  <li>Application design</li>
                  <li>Websites</li>
                  <li>Restaurant branding / signage</li>
                  <li>Menu design</li>
                  <li>Beer / Food Packaging</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

      <section id="resume-outro"  data-src="/img/resume-outro.jpg">
        <div class="container py-6">
          <div class="g__row t--center -max--md -center">
            <div class="g__col enter__fade-in-up" data-spy-in>
              <img src="/img/about-illustration.jpg" alt="" width="200" class="mb-2">
              <h3 class="mb-4 c--late-night">Think we'd work well together?</h3>
              <p>
                <v-button  size="lg" variant="outline" color="primary"> Get in touch </v-button>
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="bg--jazzy py-6">
        <div class="container -max--lg">
          <div class="g__row">
            <div class="g__col t--center">
              <a class="t--h2 c--white" href="/visual-summary">Enough talk, show me some pictures. </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>

  import {store} from '../global.js';
  import pastPreview from './preview__past';
  import resumeIntro from './resumeIntro';

  export default {

    components : {
      pastPreview
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
      portraitUrls() {
        return this.model.portraitUrls;
      }
    },

    watch : {
      portraitUrls() {
        this.$nextTick( ()=> {
          window.bLazy.load(this.$refs.portrait, true);
        })
      }
    },

    methods : {
      toggle() {
        Event.$emit('toggleEditMode');
      }
    },

    created() {

    },


    mounted() {
      this._portrait = this.$refs.portrait;
    }

  }
</script>
