<template>
  <div id="resume__layout">
    <div class="resume__layout-wrap">
      <!-- Intro -->
      <div class="container py-4">
        <div class="g__row -justify-content--center">
          <div class="g__col8">
            <intro-phase id="intro"></intro-phase>
            <h6 class="mt-2">For more general info about me, visit the <a href="#">about page</a>.</h6>
            <p>
              <popover placement="top" title="Instant Regret?" content="I can’t give you back all the time you’ve just wasted, but you can go back and make edits anytime!" triggers="hover">
                <button class="btn btn-primary">Popover</button>
              </popover>
            </p>
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
  </div>
</template>

<script>

  import {store} from '../global.js';
  import introPhase from './introPhase';
  import portraitPhase from './portraitPhase';
  import resumeIntro from './resumeIntro';

  export default {

    components : {
      introPhase, portraitPhase, resumeIntro
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
    },

    methods : {
      toggle() {
        Event.$emit('toggleEditMode');
      }
    }
  }
</script>
