<template>
  <div id="resume-intro" key="intro">

    <div class="resume-intro__text -align-items--center">
      <div class="container w-100">
        <div class="resume-intro__illo"
          data-image-load
          data-src="/img/resume-intro-sm.jpg"
          data-src-md="/img/resume-intro-md.jpg"
          data-src-xl="/img/resume-intro-xl.jpg"
        ></div>
        <div class="g__row -justify-content--center -max--lg -center">
          <div class="g__col12 g__col10--@sm g__col8--@md pb-6 pt-2 t--center">
            <h4 class="c--jazzy">Adam's build-a-resume®</h4>
            <h1 class="c--late-night">Get the
              <toggler
                :options="['designer', 'developer', 'doodler', 'bed tester', 'ice cream taster', 'underwear model', 'underling' ]"
              ></toggler> you’ve always wanted!<sup class="c--jean-jacket t--normal">*</sup></h1>
            <h5 class="c--jean-jacket t--normal">*as long as its me, of course</h5>
            <p class="mt-5">
              <v-button @click.prevent="start()" color="primary" size="lg" variant="outline">Lets Go!</v-button>
            </p>
            <p class="mt-2">
              <a href="#" class=" t--h6 c--gray-light" @click.prevent="setDefault()">or view the default resume <icon name="arrow__right-sm" size="md"></icon></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import {store} from '../global.js';

  export default {

    data() {
      return {
        state : store.resume.state
      }
    },

    methods : {
      start() {
        this.state.showIntro = false;
        this.state.editMode = true;
        // Event.$emit('setPhase', 0, 0);
        // this.state.currentPhase = 'toc';
        // this.state.currentStep = -1;
      },

      setDefault() {
        Event.$emit('setDefault', false);
      }
    }
  }

</script>
