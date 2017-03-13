<template>
  <div class="resume__content">
    <transition name="intro" mode="out-in" :appear="true">
      <div v-if="state.showIntro" id="resume__intro" key="intro">
        <div class="container -max--xl">
          <div class="g__row -align-items--center">
            <div class="g__col8">
              <img src="/img/resume-builder-lg.svg" class="img-fluid" alt="">
            </div>
            <div class="g__col4">
              <h5 class="c--gummy">Adam's Resumé Builder</h5>
              <h2 class="c--late-night">Build the designer you’ve been dreaming of!<sup>*</sup></h2>
              <h5 class="c--gray-light">*so long as its me</h5>
              <p class="mt-4">
                <button @click="start()" class="btn btn-primary"> Lets Go! </button>
              </p>
              <h6 class="t--sans">
                <a href="#" class="c--gray">I'm boring, just show me a resume <span class="i--arrow"></span></a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div id="resume__layout" v-else key="layout">
        <intro-phase id="intro" :phase-index="0" :phase="schema.phases[0]"></intro-phase>
        <button @click="toggle()" class="edit-btn btn btn-secondary">{{this.state.editMode ? 'close': 'edit'}}</button>
      </div>
    </transition>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPhase from './introPhase';

  export default {

    components : {
      introPhase
    },

    props : {
      schema : {
        type : Object,
        required : true
      }
    },

    data() {
      return {
        state : store.resume.state,
        model: store.resume.model,
      }
    },

    computed : {
      animation() {
        return "slide-"+ this.state.direction;
      }
    },

    methods : {
      start() {
        Event.$emit('toggleEditMode');
        this.state.showIntro = false;
      },
      toggle() {
        Event.$emit('toggleEditMode');
      }
    }
  }
</script>
