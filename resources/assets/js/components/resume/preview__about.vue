<template>
    <div :id="'phase__'+ id">
      <!-- More overview / Interests -->
        <div class="g__row">
          <transition-group name="slide-list" tag="ol" class="">

            <li v-for="(topic, index) in topics" :key="topic" class="t--h2">
              <span class="c--late-night" v-if="topic === 'craft'" >
                Quality of craft.
              </span>


              <span class="c--late-night" v-else-if="topic === 'care'">
                Care about what you do.
              </span>


              <span class="c--late-night" v-else-if="topic === 'purpose'">
                Everything needs a purpose.
              </span>


              <span class="c--late-night" v-else-if="topic === 'beyond'">
                Go above and beyond.
              </span>


              <span class="c--late-night" v-else-if="topic === 'grow'">
                Seek opportunities for growth.
              </span>


              <span class="c--late-night" v-else-if="topic === 'climb'">
                Continual improvement.
              </span>


              <span class="c--late-night" v-else-if="topic === 'balance'">
                Find the right balance.
              </span>


              <span class="c--late-night" v-else-if="topic === 'enjoy'" key="learn">
                Have a good time.
              </span>
            </li>
          </transition-group>
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
