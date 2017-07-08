<template>
    <div :id="'phase__' + id">

      <!-- Intro Heading -->
      <div class="-max--md -center">
        <!-- standard -->
        <div class="" v-if="introStyle == 'standard'" key="standard">
          <h2>A Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal <toggler :active="state.editMode" id="togglerIntro" :index="togglerIntro.index" :options="togglerIntro.options"></toggler>.</h2>
        </div>

        <!-- poetic -->
        <div class="" v-else-if="introStyle == 'poetic'" key="poetic">
          <h2>
            A maker of things. <small>(5)</small><br>
            Design, dev, &amp; draw – you bet! <small>(7)</small><br>
            A poet? <toggler :active="state.editMode" id="togglerPoem" :index="togglerPoem.index" :options="togglerPoem.options"></toggler>.<popover class="c--gray-light" content="<b>Hint.</b> It's a haiku"><icon name="delete" size="sm"></icon></popover>
          </h2>
          <h6 class="c--gray-light mt-2">— Adam Volkman, 2017</h6>
        </div>

        <!-- Minimal -->
        <div class="" v-else-if="introStyle == 'minimal'" key="minimal">
          <h3 class="">Adam Volkman:</h3><h1>Maker of things</h1>
        </div>

        <!-- confident -->
        <div class="" v-else-if="introStyle == 'confident'" key="confident">
          <h2>A pretty slick dude with sweet skills, a good attitude, and straight teeth. A true triple threat.</h2>
        </div>

        <!-- hard to get -->
        <div class="" v-else-if="introStyle == 'hard'" key="hard">
          <h2>I'm a graphic designer and developer currently doing my own thing. It's pretty sweet. I mean, I could maybe help you out if you need me.</h2>
        </div>

        <!-- Elevator -->
        <div class="" v-else-if="introStyle == 'elevator'" key="elevator">
          <h4>Okay, picture this —</h4>
          <h2>It's like
            <toggler
              id="togglerElevator"
              :index="togglerElevator.index"
              :options="togglerElevator.options"
            ></toggler>.
          </h2>
        </div>

        <!-- intro -->
        <div v-else >
          <div class="alert -info -max--sm -center">
            <p class="t--sans c--jazzy"><strong>Remember —</strong> The first impression is very important. It sets the tone for the whole resume and you will decide instantly whether you hate me or not.
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
      togglerElevator : {
        get() {
          if(this.model) {
            return this.model.togglerElevator;
          }
        },
        set(value) {
          this.model.togglerElevator = value;
        }
      },
    },

    watch : {
    },



    methods : {
    },

    created() {
      console.log('toggler:', this.togglerElevator.options);
      this.$on('toggleUpdate', function(id, index, value) {
        this[id].index = index;
        this[id].value = value;
      });
    },

  }
</script>
