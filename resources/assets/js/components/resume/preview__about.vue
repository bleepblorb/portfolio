<template>
    <div :id="'phase__'+ id">
      <!-- More overview / Interests -->
        <div v-if="topics.length > 0" class="g__row mt-3">
          <div class="g__col">
            <div class="grid-thing -span-2">
              <div class="grid-thing__item" v-if="topics.indexOf('craft') > -1">
                <h4>Craft</h4>
                <p>Every good idea deserves to be properly executed.</p>
              </div>
              <div class="grid-thing__item" v-if="topics.indexOf('grow') > -1">
                <h4>Grow</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
              </div>
              <div class="grid-thing__item" v-if="topics.indexOf('beyond') > -1">
                <h4>Beyond</h4>
                <p>Normal is boring. Make something better.</p>
              </div>
              <div class="grid-thing__item" v-if="topics.indexOf('climb') > -1">
                <h4>Climb</h4>
                <p>A natural evolution of learning, but also a simple challenge to myself. Make every project better than the last – in at least one way.</p>
              </div>
              <div class="grid-thing__item" v-if="topics.indexOf('balance') > -1">
                <h4>Balance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
              </div>
              <div class="grid-thing__item" v-if="topics.indexOf('enjoy') > -1">
                <h4>Enjoy</h4>
                <p>None of this matters much if you’re a boring jerk.</p>
              </div>
            </div>
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
      topics() {
        if ( this.model ) {
          return this.model.manifesto;
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
