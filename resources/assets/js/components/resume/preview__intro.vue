<template>
    <div :id="'phase__' + id">

      <!-- Intro Heading -->
      <div v-if="state.currentStep == 1" class="-max--md -center">
        <!-- standard -->
        <div class="" v-if="introStyle == 'standard'" key="standard">
          <h2>I’m a multidisciplinary Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to <toggler :active="state.editMode" id="togglerIntro" :index="togglerIntro.index" :options="['create things with value', 'make cool shit', 'get paid for doing something I love']"></toggler>.</h2>
        </div>

        <!-- poetic -->
        <div class="" v-else-if="introStyle == 'haiku'" key="haiku">
          <h2>
            A maker of things. <small>(5)</small><br>
            Design, dev, &amp; draw – you bet! <small>(7)</small><br>
            A poet? <toggler :active="state.editMode" id="togglerPoem" :index="togglerPoem.index" :options="['oh yeah', 'why not', 'uh, meh', 'no way']"></toggler>.<popover class="c--gray-light" content="<b>Hint.</b> It's a haiku"><icon name="delete" size="sm"></icon></popover>
          </h2>
          <h6 class="c--gray-light mt-2">— Adam Volkman, 2017</h6>
        </div>

        <!-- Minimal -->
        <div class="" v-else-if="introStyle == 'minimal'" key="minimal">
          <h3 class="">Adam Volkman:</h3><h1>Maker of things</h1>
        </div>

        <!-- confident -->
        <div class="" v-else-if="introStyle == 'confident'" key="confident">
          <h2>I'm a pretty slick dude with skills and straight teeth. Probably the best that ever was.</h2>
        </div>

        <!-- hard to get -->
        <div class="" v-else-if="introStyle == 'hard'" key="hard">
          <h2>I'm a graphic designer &amp; developer currently doing my own thing. It's pretty sweet. I mean, if you need some help out, I guess I could join you.</h2>
        </div>

        <!-- other -->
        <div class="" v-else-if="introStyle == 'value 6'" key="value5">
          <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
          <h4>section 6</h4>
        </div>

        <!-- intro -->
        <div v-else >
          <div class="alert -info -max--sm -center">
            <p class="t--sans c--jazzy"><strong>Remember —</strong> Your first impression is very important. It sets the tone for the whole resume and everyone will decide instantly whether they hate you or not. <strong>Good Luck!</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import resumePhase from './resumePhase';

  export default {
    mixins : [ resumePhase ],

    components : {
    },

    props : {
    },

    data() {
      return {
        togglerTest : {
          index : 0,
          value : ''
        }
      }
    },

    computed : {
      introStyle() {
        if(this.model) {
          return this.model.introStyle;
        }
      },
      togglerPoem : {
        get() {
          if(this.model) {
            return this.model.togglerPoem;
          }
        },
        set(value) {
          if(this.model) {
            this.model.togglerPoem = value;
          }
        }
      },
      togglerIntro : {
        get() {
          if(this.model) {
            return this.model.togglerIntro;
          }
        },
        set(value) {
          this.model.togglerIntro = value;
        }
      },
    },

    watch : {
    },



    methods : {
    },

    created() {
      this.$on('toggleUpdate', function(id, index, value) {
        this[id].index = index;
        this[id].value = value;
      });
    },

  }
</script>
