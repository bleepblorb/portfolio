
<template>
  <div class="resume__content">
    <div v-for="a in 2" v-show="state.currentPhase == a - 1">
      <transition-group tag="div">
        <div v-for="n in 5" class="list-item" v-show="state.currentStep == n" :key="n">
          <p>{{n}}</p>
        </div>
      </transition-group>
    </div>

    <slot></slot>
  </div>
</template>

<script>
  import {store} from './global.js';

  export default {

    components : {
    },

    props : {
      introVal : {
        type : String,
        default : ''
      }
    },

    data() {
      return {
        state : store.resume.state,
        currentStep : 0,
      }
    }
  }
</script>
