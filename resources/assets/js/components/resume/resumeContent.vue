<template>
  <div @mousedown="setPreview(true)" class="resume__content g__col">
    <!-- <div class="preview-toggle" @click="togglePreview()"></div> -->
      <transition-group name="slide" mode="" tag="div" id="resume__preview">
        <welcome-phase class="preview__phase" key="welcome" id="welcome" v-show="state.currentPhase == 'welcome'"></welcome-phase>

        <intro-preview class="preview__phase" key="intro" id="about" v-show="state.currentPhase == 0 && state.currentStep == 2"></intro-preview>

        <interests-preview class="preview__phase" key="interests" id="about" v-show="state.currentPhase == 0 && state.currentStep == 3"></interests-preview>

        <about-preview class="preview__phase" key="about" id="about" v-show="state.currentPhase == 0 && state.currentStep == 4"></about-preview>

        <portrait-phase class="preview__phase" key="portrait" id="portrait" v-show="state.currentPhase == 1"></portrait-phase>

        <skills-preview class="preview__phase" key="skills" id="experience" v-show="state.currentPhase == 2 && state.currentStep == 12"></skills-preview>

        <past-preview class="preview__phase" key="past" id="experience" v-show="state.currentPhase == 2 && state.currentStep == 13"></past-preview>

      </transition-group>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPreview from './preview__intro';
  import interestsPreview from './preview__interests';
  import pastPreview from './preview__past';
  import aboutPreview from './preview__about';
  import skillsPreview from './preview__skills';
  import portraitPhase from './portraitPhase';
  import welcomePhase from './welcomePhase';

  export default {

    components : {
      introPreview, portraitPhase, welcomePhase, interestsPreview, aboutPreview, pastPreview, skillsPreview
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
        style : {}
      }
    },

    computed : {
      animation() {
        return "slide-"+ this.state.direction;
      },
      editMode() {
        return this.state.editMode;
      }
    },

    watch : {
    },

    methods : {
      toggle() {
        Event.$emit('toggleEditMode');
      },
      setPreview(bool) {
        if ( this.state.previewMode !== bool ) {
          Event.$emit('setPreviewMode', bool);
        }
      },
    }
  }
</script>
