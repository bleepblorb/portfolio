<template>
  <div @mousedown="setPreview(true)" class="resume__content g__col">
    <!-- <div class="preview-toggle" @click="togglePreview()"></div> -->
    <div id="resume__preview">
      <div class="preview__phase">
        <div class="container -max--lg">
          <transition name="slide" mode="out-in">
            <welcome-phase key="welcome" id="welcome" v-if="state.currentPhase == 'welcome'"></welcome-phase>
            <intro-phase key="intro" id="intro" v-if="state.currentPhase == 0"></intro-phase>
            <portrait-phase key="portrait" id="portrait" v-if="state.currentPhase == 1"></portrait-phase>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPhase from './introPhase';
  import portraitPhase from './portraitPhase';
  import welcomePhase from './welcomePhase';

  export default {

    components : {
      introPhase, portraitPhase, welcomePhase
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
