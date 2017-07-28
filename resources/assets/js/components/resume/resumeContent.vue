<template>
  <div @mousedown="setPreview(true)" class="resume__content g__col">
    <div id="resume__preview">
      <transition name="slide" mode="out-in">
        <welcome-phase class="preview__phase" key="welcome" id="welcome" v-if="state.currentPhase == 'welcome'"></welcome-phase>

        <intro-preview class="preview__phase" key="intro" id="about" v-else-if="state.currentPhase == 0 && state.currentStep == 2"></intro-preview>

        <interests-preview class="preview__phase" key="interests" id="about" v-else-if="state.currentPhase == 0 && state.currentStep == 3"></interests-preview>

        <about-preview class="preview__phase" key="about" id="about" v-else-if="state.currentPhase == 0 && state.currentStep == 4"></about-preview>

        <portrait-phase class="preview__phase" key="portrait" id="portrait" v-else-if="state.currentPhase == 1"></portrait-phase>

        <skills-preview class="preview__phase" key="skills" id="experience" v-else-if="state.currentPhase == 2 && state.currentStep == 12"></skills-preview>

        <past-preview class="preview__phase" key="past" id="experience" v-else-if="state.currentPhase == 2 && state.currentStep == 13"></past-preview>
        <!-- Fix: Keeps transitions from jumping when switching phases -->
        <div class="preview__phase" v-else></div>

      </transition>
    </div>
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
