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
              <h2>A Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to {{model.about.togglerIntro.options[model.about.togglerIntro.index]}}.</h2>
            </div>

            <!-- haiku -->
            <div v-else-if="introStyle == 'poetic'">
              <h2>
                A maker of things.<br>
                Design, dev, &amp; draw – you bet!<br>
                A poet? {{model.about.togglerPoem.options[model.about.togglerPoem.index]}}.
              </h2>
            </div>

            <!-- hard to get -->
            <div v-else-if="introStyle == 'hard'">
              <h2>I'm a graphic designer &amp; developer currently doing my own thing. It's pretty sweet. I mean, if you need some help out, I guess I could join you.</h2>
            </div>

            <!-- confident -->
            <div v-else-if="introStyle == 'confident'">
              <h2>A pretty slick dude with sweet skills, a good attitude, and straight teeth. A true triple threat.</h2>
            </div>

            <!-- minimal -->
            <div v-else-if="introStyle == 'minimal'">
              <h1>Maker of things</h1>
            </div>

            <!-- Elevator -->
            <div class="" v-else-if="introStyle == 'elevator'">
              <h2>Like {{model.about.togglerElevator.options[model.about.togglerElevator.index]}}.</h2>
            </div>

            <!-- intro par -->
            <p class="mt-4">
              I'm a multidisciplinary graphic designer who works on all substrates, surfaces, and screens. I also do web development, illustration, and whatever else I can to get the job done. My approach tends to be simple and functional, yet I'm a sucker for hand lettering and illustrations.
            </p>
            <p>
              Creating is my greatest passion, but to show I'm an interesting person, I also enjoy
              <ul class="-inline-text">
                <!-- cooking -->
                <li v-if="model.about.personal.indexOf('cooking') > -1" key="cook">baking treats</li> <!-- hiking -->
                <li v-if="model.about.personal.indexOf('hiking') > -1" key="hike">hiking through the mountains</li>

                <!-- telivision -->
                <li v-if="model.about.personal.indexOf('television') > -1" key="tv">binging on television</li>

                <!-- tennis -->
                <li v-if="model.about.personal.indexOf('tennis') > -1" key="tennis">playing tennis</li>

                <!-- crafts -->
                <li v-if="model.about.personal.indexOf('crafts') > -1" key="crafts">crafting</li>

                <!-- learning -->
                <li v-if="model.about.personal.indexOf('learn') > -1" key="learn">learning new skills</li>
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
      </div>



      <!-- About -->
      <div class="container py-6 -max--lg">
        <div class="g__row ">
          <div class="g__col12 g__col3--@md mb-4">
            <h4 class="c--grover section-header">about —</h4>
          </div>
          <div class="g__col12 g__col9--@md">
            <div class="enter__fade-in-up" data-spy-in>
              <h2 class="">It's not just what you do that matters, but how you do it.</h2>
              <p class="mb-6 t--lead">Below is a collection of some of my views on how I approach design — or perhaps something greater. However cliché some may be, I think its a good way to sum up what to expect from me as a designer / human being.</p>
            </div>
            <div class="grid-thing -span-2" data-spy-in  data-spy="target: .enter__fade-in-up; delay: 250">
              <!-- care -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('craft') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-craft.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Craft</h4>
                  <p>Every good idea deserves to be properly executed. I take pride in honing my technical abilities and executing designs the right way.</p>
                </div>
              </div>

              <!-- care -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('care') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-care.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Care</h4>
                  <p>Care about what you do. If it's not worth doing right, it's not worth doing at all. <span class="c--gray-lighter">#ClicheButCorrect</span></p>
                </div>
              </div>

              <!-- purpose -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('purpose') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-purpose.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Purpose</h4>
                  <p>Everything should have one. When it comes to design, this is important. In life, probably even more so.</p>
                </div>
              </div>

              <!-- beyond -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('beyond') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-beyond.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Beyond</h4>
                  <p>Normal is boring, make something better. I shoot to deliver above expectations.</p>
                </div>
              </div>

              <!-- grow -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('grow') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-grow.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Grow</h4>
                  <p>Seek opportunities to learn and grow. Continued education is important and something I enjoy.</p>
                </div>
              </div>

              <!-- climb -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('climb') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-climb.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Climb</h4>
                  <p>A simple challenge to myself — Make every project better than the last, in at least one way.</p>
                </div>
              </div>

              <!-- balance -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('balance') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-balance.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Balance</h4>
                  <p>A more generic concept, but I think finding balance is important in most aspects of life. </p>
                </div>
              </div>

              <!-- enjoy -->
              <div class="grid-thing__item" v-if="model.about.manifesto.indexOf('enjoy') > -1">
                <div class="enter__fade-in-up">
                  <div class="t--center">
                    <img src="/img/manifesto-enjoy.png" class="mb-1" alt="" height="80px">
                  </div>
                  <h4>Enjoy</h4>
                  <p>None of this matters much if you’re a boring jerk. </p>
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
          <div class="g__col12 g__col9--@md mb-4">
            <past-preview id="experience"></past-preview>
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
            <div class="job">
              <h6>
                <span class="job__date">2017–Now</span>
                <span class="job__location">Well Done</span>
              </h6>
              <h2 class="job__title">Currently working select freelance projects.</h2>
              <p class="job__desc">I've been lucky enough to keep busy working on an assortment of freelance projects while I look for the right next step.</p>
            </div>

            <h4 class="mt-6 mb-3 c--gray-light t--normal">Notable Skills and Experience</h4>
            <div class="g__row mb-4" data-spy-in  data-spy="target: .enter__fade-in-up; delay: 250">
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.experience.skills.indexOf('print') > -1">
                <div class="card">
                  <div class="card-block">
                    <h4>ink —</h4>
                    <ul class="-relaxed">
                      <li>Print Design &amp; Production</li>
                      <li>Environmental Graphics</li>
                      <li>Signage &amp; Wayfinding</li>
                      <li>Screen Printing</li>
                      <li>Letterpress Printing</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.experience.skills.indexOf('digital') > -1">
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
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.experience.skills.indexOf('development') > -1">
                <div class="card">
                  <div class="card-block">
                    <h4>bytes —</h4>
                    <ul class="-relaxed">
                      <li>HTML, LESS, SCSS, jQuery, PHP</li>
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
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.experience.skills.indexOf('other') > -1">
                <div class="card">
                  <div class="card-block">
                    <h4 class="">etc —</h4>
                    <ul class="-relaxed">
                      <li>Baked goods</li>
                      <li>Book binding</li>
                      <li>Unicycling</li>
                      <li>Spoon carving</li>
                      <li>Entry level Ukelele skills</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="g__col6--@sm skill-list enter__fade-in-up" v-if="model.experience.skills.indexOf('other') > -1">
                <div class="card">
                  <div class="card-block">
                    <h4 class="">in progress —</h4>
                    <ul class="-relaxed">
                      <li>Git versioning &amp; deployment</li>
                      <li>Sketch</li>
                      <li>Photography</li>
                      <li>Vue.js</li>
                      <li>gulp</li>
                      <li>webpack</li>
                      <li>JavaScript ES6</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- <h4 class="mt-2">in progress / currently tinkering –</h4>
            <p>Git versioning &amp; deployment, Sketch, Photography, Vue.js, gulp, webpack, JavaScript ES6</p> -->
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
            <h4 class="c--gray-light t--normal">Seeking new full-time or contract work.</h4>
            <h2>I'm looking for a team that can benefit from my diverse set of skills and push me to my fullest potential.</h2>
            <p class="mt-3">A team who values quality, collaboration, and personal / professional growth. Who inspires and challenges me on a continual basis. In return I will strive to do the same. I can also offer hard work, commitment, and the occasional homemade pie. That and the design stuff, of course.</p>

            <div class="g__row mt-5">
              <div class="g__col6--@sm mb-3">
                <h4 class="c--gray-light t--normal">In the queue</h4>
                <h4 class="mb-3">Wanting to Learn —</h4>
                <ul class="-relaxed">
                  <li>React / node / Too many web things</li>
                  <li>After Effects / Motion Graphics</li>
                  <li>Web prototyping (Framer, or similar)</li>
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
                <v-button  href="mailto:adam.volkman@gmail.com?subject=I saw your resume and didnt hate you" size="lg" variant="outline" color="primary"> Get in touch </v-button>
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
        return this.model.about.introStyle;
      },
      portraitUrls() {
        return this.model.portraitUrls;
      }
    },

    watch : {
      portraitUrls() {
        this.$nextTick( ()=> {
          window.bLazy.load(this.$refs.portrait, true);
        });
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
