<template>
  <div class="editor__phase">
    <transition name="slide-next">
      <div class="editor__step" v-if="state.currentStep == -1">
        <div class="editor__content">
          <div class="intro-photo">
            <!-- <img src="blank.jpg" alt=""> -->
          </div>

          <div class="editor__question">
            <h4 class="c--gummy">Table of Contents</h4>
          </div>

          <div class="editor__input -condensed">
            <multiselect
              :options="options"
              placeholder="Go To..."
              :allow-empty="false"
              @input="phaseSelect"
              class="g__col">
            </multiselect>
          </div>

          <div class="editor__input -standard">
            <div class="radial-group g__row">
              <div v-for="option in options" class="g__col12">
                <v-button
                  @click="phaseSelect(option.value)"
                  block
                >
                  {{option.label}}
                </v-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>

</template>

<script>

  import {store} from '../global';
  import multiselect from '../multiselect';

  export default {

    components : {
      multiselect
    },

    data() {
      return {
        state : store.resume.state
      }
    },

    props : {
      options : {
        type : Array
      }
    },

    methods : {
      phaseSelect(value) {

        let index = _.findIndex(this.options, ['value', value]);
        if ( index > -1 ) {
          Event.$emit('setPhase', index, 0);
        }
      }
    }

  }

</script>
