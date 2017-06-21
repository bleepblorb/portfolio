<template>
    <div :id="'phase__interests'">
      <!-- More overview / Interests -->
      <div v-if="state.currentStep == 2">
        <div v-if="personal.length > 0" class="g__row mt-3">
          <div class="g__col">
            <ul class="">
              <transition-group name="slide-list">
                <li key="header"><h5 class="c--jazzy mb-2">Personal Interests include:</h5></li>
                <li class="t--h2 c--late-night" v-for="(item, index) in personal" :key="item"><icon name="edit" size="md"></icon> {{item}}</li>
              </transition-group>
            </ul>
          </div>
        </div>
        <div v-else class="alert -info -max--sm -center my-4">
          <p class="t--sans c--jazzy"><strong>Pro Tip! —</strong> Look for items you are also interested in so that it will make a personal connection.
          </p>
        </div>
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
