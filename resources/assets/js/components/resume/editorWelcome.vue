<template>
  <div class="editor__phase">
    <transition name="slide-next">
      <div class="editor__step welcome-step" v-if="state.currentStep == -1">
        <div class="editor__content">
          <div class="intro-photo">
            <img src="/img/editor-intro.png" alt="">
          </div>

          <div class="editor__question">
            <h4 class="c--gummy">Welcome</h4>
            <h3 class="c--late-night">How pumped are you to begin?</h3>
          </div>
          <div class="editor__input -condensed">
            <multiselect
              v-model="value"
              :options="options"
              placeholder="Select"
              :allow-empty="false"
              >
            </multiselect>
          </div>

          <div class="editor__input -standard">
            <radial-group
              :options="options"
              id="welcome"
              v-model="value"
              >
            </radial-group>
          </div>
        </div>
      </div>
    </transition>
  </div>

</template>

<script>

  import {store} from '../global';
  import multiselect from '../multiselect';
  import radialGroup from '../radialGroup';

  export default {

    components : {
      multiselect, radialGroup
    },

    data() {
      return {
        state : store.resume.state,
        model : store.resume.model.tour,
        options: [
          { label : "Totally", value : 'totally'},
          { label : "Completely", value : 'completely'},
          { label : "110%", value : 'impossibly'},
          { label : "Meh", value : 'lying about being'},
        ]
      }
    },

    computed : {
      value : {
        get() {
          return store.resume.model.tour.value;
        },
        set(val) {
          store.resume.model.tour.value = val;
        }
      }
    },

    watch : {
      value (newVal, oldVal) {
        console.log('new val');
        if (oldVal === '') {
          if(Shepherd.activeTour) {
            Shepherd.activeTour.next();
          }
        }
      }
    },

    props : {
    },

    methods : {
      begin() {
        Event.$emit('setPhase', 0, 0);
      }
    }

  }

</script>
