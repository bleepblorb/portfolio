<template>
  <div @mousedown="setPreview(true)" class="resume__content g__col">
    <!-- <div class="preview-toggle" @click="togglePreview()"></div> -->
    <div id="resume__preview">
        <transition name="slide" mode="out-in">
          <welcome-phase class="preview__phase" key="welcome" id="welcome" v-if="state.currentPhase == 'welcome'"></welcome-phase>

          <intro-preview class="preview__phase" key="intro" id="intro" v-if="state.currentPhase == 0 && state.currentStep == 1"></intro-preview>

          <interests-preview class="preview__phase" key="interests" id="intro" v-if="state.currentPhase == 0 && state.currentStep == 2"></interests-preview>

          <portrait-phase class="preview__phase" key="portrait" id="portrait" v-if="state.currentPhase == 1"></portrait-phase>
        </transition>
      </div>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPreview from './preview__intro';
  import interestsPreview from './preview__interests';
  import portraitPhase from './portraitPhase';
  import welcomePhase from './welcomePhase';

  export default {

    components : {
      introPreview, portraitPhase, welcomePhase, interestsPreview
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
