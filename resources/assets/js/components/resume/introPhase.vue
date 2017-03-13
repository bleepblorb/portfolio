<template>
  <resume-phase :id="id" :phaseIndex="phaseIndex" :phase="phase">
    <transition name="slide" mode="out-in">
      <div class="" v-if="introStyle == 'standard'" key="standard">
        <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4>
        <h2>I’m a multidisciplinary Graphic Designer, Web Developer, and Illustrator using all the tools at my disposal to make things with worth.</h2>
      </div>
      <div class="" v-else-if="introStyle == 'haiku'" key="haiku">
        <!-- <h4 class="c--gray-light"><span class="c--gummy">Adam Volkman</span> – Maker of things</h4> -->
        <h2>
          A maker of things. <small>(5)</small><br>
          Design, dev, & draw – you bet! <small>(7)</small><br>
          A poet? why not. <small>(5)</small>
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
      <div v-else class="alert alert--info -max--sm">
        <p class="t--sans c--jazzy"><strong>Remember —</strong> Your first impression is very important. It sets the tone for the whole resume and everyone will decide instantly whether they hate you or not. <strong>Good Luck!</strong></p>
        </div>
      </div>
    </transition>
  </resume-phase>
</template>

<script>
  import resumePhase from './resumePhase';

  export default {
    mixins : [ resumePhase ],

    components : {
      resumePhase
    },

    props : {
    },

    data() {
      return {

      }
    },

    computed : {
      introStyle() {
        return this.model.introStyle;
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
