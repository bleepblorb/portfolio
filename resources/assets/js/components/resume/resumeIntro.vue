<template>
  <div id="resume-intro" key="intro">

    <div class="resume-intro__text -align-items--center">
      <div class="container w-100">
        <div class="resume-intro__illo" data-image-load data-src="/img/resume-intro-sm.svg"> </div>
        <div class="g__row -justify-content--center t--center -max--xl">
          <div class="g__col12 g__col8--@sm pb-6 pt-2">
            <h5 class="c--gummy">Adam's build-a-resume®</h5>
            <h1 class="c--jazzy">Build the perfect
              <toggler
                :options="['designer', 'developer', 'doodler', 'bed tester', 'ice cream taster', 'underwear model', 'underling' ]"
              ></toggler> you’ve always wanted!<sup class="c--gray-light t--normal">*</sup></h1>
            <h4 class="c--jean-jacket t--normal">*as long as its me, of course</h4>
            <p class="mt-5">
              <v-button @click.prevent="start()" color="primary" size="lg" variant="outline">Lets Go!</v-button>
            </p>
            <h6 class="t--sans mt-2">
              <a href="#" class="c--gray-light" @click.prevent="setDefault()">I'm no fun. Just show me a resume</a>
            </h6>
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
        Event.$emit('setPhase', 0, 0);
      },

      setDefault() {
        Event.$emit('setDefault');
      }
    }
  }

</script>
