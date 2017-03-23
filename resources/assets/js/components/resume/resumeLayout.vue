<template>
  <div id="resume__layout">
    <!-- Intro -->
    <div class="container py-4">
      <div class="g__row -justify-content--center">
        <div class="g__col8">
          <intro-phase id="intro"></intro-phase>
          <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
        </div>
      </div>
    </div>
    <div class="container -max--xl my-4">
      <portrait-phase id="portrait"></portrait-phase>
    </div>
    <div class="container py-4 -max--xl">
      <div class="g__row">
        <div class="g__col4">
          <h4 class="c--gummy">About —</h4>
        </div>
        <div class="g__col8">
          <h3 class="-max--md">Its not just what you do, but how you do it.</h3>
          <p class="-max--md">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPhase from './introPhase';
  import portraitPhase from './portraitPhase';

  export default {

    components : {
      introPhase, portraitPhase
    },

    props : {
    },

    data() {
      return {
        state : store.resume.state,
        model: store.resume.model,
      }
    },

    computed : {
      introStyle() {
        return this.model.intro.introStyle;
      },
    }
  }
</script>
