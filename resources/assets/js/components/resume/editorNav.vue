<template>
  <div class="editor__nav">
    <div
      class="editor__back-btn"
      :disabled="disablePrev"
      @click="prevStep()" >
      <div class="arrow-wrap">
        <icon name="arrow__left-xl"></icon>
      </div>
    </div>

    <transition name="nav-btn" mode="out-in">
      <div
        v-if="showPrompt"
        class="editor__next-btn -active -next"
        @click="nextStep()"
        :key="2" >
        <span class="editor-btn__text">{{promptText}}</span>
        <div class="arrow-wrap">
          <icon name="arrow__right-xl"></icon>
        </div>
      </div>
      <div
        v-if="!showPrompt"
        class="editor__next-btn"
        :disabled="disableNext"
        :key="3"
        @click="nextStep()" >
        <div class="arrow-wrap">
          <icon name="arrow__right-xl"></icon>
        </div>
      </div>
    </transition>
    <transition name="nav-btn">
      <div
        v-if="this.isComplete"
        class="editor__next-btn -active -done"
        @click="close()"
        >
        <span class="editor-btn__text">Done</span>
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
        }
      }
    },

    methods : {
      nextStep() {
        if ( this.state.currentStep < this.state.furthestAllowed  && this.state.currentStep >= 0) {
          Event.$emit('nextStep');
        }
      },

      prevStep() {
        if ( this.state.currentStep > 1 ) {
          Event.$emit('prevStep');
        }
      },

      close() {
        Event.$emit('closeEdit');
      }
    },

    created() {
      Event.$on('showPrompt', (text = "next") => {
        console.log('ShowPrompt Recieved');
        this.promptText = text;
        this.showPrompt = true;
      });

      Event.$on('hidePrompt', () => {
        this.showPrompt = false;
      });
    }
  }

</script>
