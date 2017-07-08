<template>
    <div :id="'phase__'+ id">
      <!-- More overview / Interests -->
        <div v-if="topics.length > 0" class="g__row mt-3">
          <div class="g__col">
            <div class="grid-thing -span-2">
              <!-- care -->
              <div class="grid-thing__item" v-if="topics.indexOf('craft') > -1">
                <h4>Craft</h4>
                <p>Every good idea deserves to be properly executed. I take pride in honing my technical abilities and executing designs the right way.</p>
              </div>

              <!-- care -->
              <div class="grid-thing__item" v-if="topics.indexOf('care') > -1">
                <h4>Care</h4>
                <p>Care about what you do. If it's not worth doing right, it's not worth doing at all. <span class="c--gray-lighter">#ClicheButCorrect</span></p>
              </div>

              <!-- purpose -->
              <div class="grid-thing__item" v-if="topics.indexOf('purpose') > -1">
                <h4>Purpose</h4>
                <p>Everything should have one. When it comes to design, this is important. In life, probably even more so.</p>
              </div>

              <!-- beyond -->
              <div class="grid-thing__item" v-if="topics.indexOf('beyond') > -1">
                <h4>Beyond</h4>
                <p>Normal is boring, make something better. I shoot to deliver above expectations.</p>
              </div>

              <!-- grow -->
              <div class="grid-thing__item" v-if="topics.indexOf('grow') > -1">
                <h4>Grow</h4>
                <p>Seek opportunities to learn and expand. Continued education is important... and fun!</p>
              </div>

              <!-- climb -->
              <div class="grid-thing__item" v-if="topics.indexOf('climb') > -1">
                <h4>Climb</h4>
                <p>A simple challenge to myself — Make every project better than the last, in at least one way.</p>
              </div>

              <!-- balance -->
              <div class="grid-thing__item" v-if="topics.indexOf('balance') > -1">
                <h4>Balance</h4>
                <p>A more generic concept, but I think finding balance is important in most aspects of life. </p>
              </div>

              <!-- enjoy -->
              <div class="grid-thing__item" v-if="topics.indexOf('enjoy') > -1">
                <h4>Enjoy</h4>
                <p>None of this matters much if you’re a boring jerk. </p>
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
