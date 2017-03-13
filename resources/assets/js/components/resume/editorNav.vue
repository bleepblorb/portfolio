<template>
  <div class="editor__nav">
    <div
      class="editor__back-btn"
      :disabled="disablePrev"
      @click="prevStep()" >
      <span class="i--arrow"></span>
    </div>

    <transition name="nav-btn" mode="out-in">
      <div
        v-if="showPrompt"
        class="editor__next-btn -active -next"
        @click="nextStep()"
        :key="2" >
        <span class="editor-btn__text">{{promptText}}</span>
        <span class="i--arrow"></span>
      </div>
      <div
        v-if="!showPrompt"
        class="editor__next-btn"
        :disabled="disableNext"
        :key="3"
        @click="nextStep()" >
        <span class="i--arrow"></span>
      </div>
    </transition>
    <transition name="nav-btn">
      <div
        v-if="showDone"
        class="editor__next-btn -active -done"
        @click="close()"
        >
        <span class="editor-btn__text">Finish</span>
      </div>
    </transition>
  </div>
</template>

<script>

  import {store} from '../global';


  export default {

    props : {
    },

    data() {
      return {
        state : store.resume.state,
        showPrompt : false,
        promptText : true,
        showDone : false
      }
    },

    computed : {
      disableNext() {
        return this.state.currentStep < this.state.furthestAllowed ? false : true;
      },
      disablePrev() {
        return this.state.currentStep > 1 ? false : true;
      },
      isComplete() {
        return this.state.isComplete;
      }
    },

    watch : {
      isComplete() {
        if ( this.isComplete ) {
          this.showPrompt = false;
          this.showDone = this.isComplete;
        }
      }
    },

    methods : {
      nextStep() {
        if ( this.state.currentStep < this.state.furthestAllowed ) {
          Event.$emit('nextStep');
        }
      },

      prevStep() {
        if ( this.state.currentStep > 1 ) {
          Event.$emit('prevStep');
        }
      },

      close() {
        this.showDone = false;
        Event.$emit('toggleEditMode');
        Event.$emit('setPhase', 0, 0);
      }
    },

    created() {
      Event.$on('showPrompt', (text = "next") => {
        this.showPrompt = true;
        let promptOptions = [
          "Next", "Onward", "This Way", "More"
        ]

        this.promptText = promptOptions[_.random(0, promptOptions.length - 1)];
      });

      Event.$on('hidePrompt', () => {
        this.showPrompt = false;
      });

      Event.$on('disablePrev', () => {
        this.disablePrev = true;
      });

      Event.$on('enablePrev', () => {
        this.disablePrev = false;
      });
    }
  }

</script>
