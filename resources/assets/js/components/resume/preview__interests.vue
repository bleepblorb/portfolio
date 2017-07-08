<template>
    <div :id="'phase__interests'">
      <!-- More overview / Interests -->
      <div v-if="personal.length > 0" class="g__row mt-3">
        <div class="g__col">
          <ul class="">
            <transition-group name="slide-list">
              <li key="header"><h5 class="c--jazzy mb-2">Personal Interests include:</h5></li>

              <!-- cooking -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('cooking') > -1" key="cook">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Creating dirty dishes
              </li>

              <!-- hiking -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('hiking') > -1" key="hike">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Sleeping outside
              </li>

              <!-- telivision -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('television') > -1" key="tv">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Watching Cartoons
              </li>

              <!-- tennis -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('tennis') > -1" key="tennis">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Pretending I'm Federer
              </li>

              <!-- crafts -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('crafts') > -1" key="crafts">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Making stuff for twice the price of just buying it
              </li>

              <!-- learning -->
              <li class="t--h1 c--late-night" v-if="model.personal.indexOf('learn') > -1" key="learn">
                <icon name="check" size="lg" class="c--gray-light"></icon>
                Google-ing everything
              </li>
            </transition-group>
          </ul>
        </div>
      </div>
      <div v-else class="alert -info -max--sm -center my-4">
        <p class="t--sans c--jazzy"><strong>Pro Tip! —</strong> Look for items you are also interested in so that it will make a personal connection.
        </p>
      </div>
    </div>
</template>

<script>
  import resumePhase from './resumePhase';
    import {store} from '../global';

  export default {
    mixins : [ resumePhase ],

    components : {
    },

    props : {
    },


    computed : {
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
    },

  }
</script>
