<template>
  <div class="editor__phase">
    <transition name="slide-next">
      <div class="editor__step" v-if="state.currentStep == -1">
        <div class="editor__content">
          <div class="intro-photo">
            <!-- <img src="blank.jpg" alt=""> -->
          </div>

          <div class="editor__question">
            <h4 class="c--gummy">Welcome</h4>
            <h5>Thank you for taking the time to craft the perfect resume for me that will delight and impress you.</h5>
            <p>
              Read over the info in the Preview Pane to get a quick overview.
            </p>
            <p><button type="button" class="btn btn-primary" @click="begin()">Get Started Already</button></p>
          </div>
        </div>
      </div>
    </transition>
  </div>

</template>

<script>

  import {store} from '../global';
  import multiselect from '../multiselect';

  export default {

    components : {
      multiselect
    },

    data() {
      return {
        state : store.resume.state
      }
    },

    props : {
      options : {
        type : Array
      }
    },

    methods : {
      begin() {
        Event.$emit('setPhase', 0, 0);
      }
    }

  }

</script>
