<template>
    <div :id="'phase__' + id">
      <!-- <transition name="slide" mode="out-in"> -->

      <!-- Intro Heading -->
      <div v-if="state.currentStep == 1">
        <div class="" v-if="introStyle == 'standard'" key="standard">
          <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
          <h2>I’m a multidisciplinary Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to <toggler :active="state.editMode" id="togglerIntro" :index="togglerIntro.index" :options="['create things with value', 'make cool shit', 'get paid for doing something I love']"></toggler>.</h2>
        </div>
        <div class="" v-else-if="introStyle == 'haiku'" key="haiku">
          <h2>
            A maker of things. <small>(5)</small><br>
            Design, dev, &amp; draw – you bet! <small>(7)</small><br>
            A poet? <toggler :active="state.editMode" id="togglerPoem" :index="togglerPoem.index" :options="['oh yeah', 'why not', 'uh, meh', 'no way']"></toggler>.<popover class="c--gray-light" content="<b>Hint.</b> It's a haiku"><icon name="delete" size="sm"></icon></popover>
          </h2>
          <h6 class="c--gray-light mt-2">— Adam Volkman, 2017</h6>
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
        <div v-else >
          <h2>
            Let's get started with a <toggler :active="state.editMode" id="togglerTest" :index="togglerTest.index" :options="['perfect', 'complicated', 'badass', 'quirky', 'half-assed']"></toggler> intro.
          </h2>
          <div class="alert -info -max--sm">
            <p class="t--sans c--jazzy"><strong>Remember —</strong> Your first impression is very important. It sets the tone for the whole resume and everyone will decide instantly whether they hate you or not. <strong>Good Luck!</strong>
            </p>
          </div>
        </div>
      </div>
      <!-- </transition> -->

      <!-- More overview / Interests -->
      <div v-if="state.currentStep == 2">
        <div class="g__row mt-3">
          <div class="g__col">
            <h5 class="c--jazzy">Personal Interests include:</h5>
            <ul class="">
              <li class="t--h2 c--late-night" v-for="item in personal"><icon name="edit" size="md"></icon> {{item}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import resumePhase from './resumePhase';
  import toggler from '../toggler';

  export default {
    mixins : [ resumePhase ],

    components : {
      resumePhase, toggler
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
      personal() {
        if ( this.model ) {
          return this.model.personal;
        }
      }
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
