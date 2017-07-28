<template>
    <div :id="'phase__interests'">
      <!-- More overview / Interests -->
      <div v-if="personal.length > 0" class="g__row mt-3">
        <div class="g__col">
            <transition-group name="slide-list" tag="ul" class="-checklist">
              <li key="header"><h5 class="c--jazzy mb-2">Personal Interests include:</h5></li>

              <li v-for="interest in model.personal" :key="interest" class="t--h2 c--late-night -checked">
                <!-- cooking -->
                <span v-if="interest == 'cooking'">
                  Creating dirty dishes
                </span>

                <!-- hiking -->
                <span v-if="interest === 'hiking'">
                  Sleeping outside
                </span>

                <!-- telivision -->
                <span v-if="interest === 'television'">
                  Watching Cartoons
                </span>

                <!-- tennis -->
                <span v-if="interest === 'tennis'">
                  Pretending I'm Federer
                </span>

                <!-- crafts -->
                <span v-if="interest === 'crafts'">
                  Making stuff for twice the price of just buying it
                </span>

                <!-- learning -->
                <span v-if="interest === 'learn'">
                  Google-ing everything
                </span>

              </li>
            </transition-group>
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
