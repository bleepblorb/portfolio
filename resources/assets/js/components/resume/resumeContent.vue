<template>
  <div class="resume__content" :class="{editing : editing}" :style="style">
    <transition name="intro" mode="out-in" :appear="true">
      <div id="resume__preview" v-if="state.editMode" key="preview">
        <div class="content__phase-wrap">
          <div class="content__phase">
            <div class="container">
              <transition name="slide" mode="out-in">
                <intro-phase id="intro" v-if="state.currentPhase == 0"></intro-phase>
                <portrait-phase id="portrait" v-if="state.currentPhase == 1"></portrait-phase>
              </transition>
          </div>
          </div>
        </div>
        <button @click="toggle()" v-if="state.editMode" class="close"></button>
      </div>
      <resume-layout v-else key="layout"></resume-layout>
    </transition>
  </div>
</template>

<script>
  import {store} from '../global.js';
  import introPhase from './introPhase';
  import portraitPhase from './portraitPhase';
  import resumeLayout from './resumeLayout';

  export default {

    components : {
      introPhase, portraitPhase, resumeLayout,
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
        editing : false,
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
      editMode(value) {
        this.style = {
          opacity : 0,
          transform : 'translateY(100px)'
        };

        window.setTimeout(() => {
          this.editing = value;
          this.style = {
            opacity : 1,
            transform : 'translateY(0px)'
          }
        }, 1250);
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
