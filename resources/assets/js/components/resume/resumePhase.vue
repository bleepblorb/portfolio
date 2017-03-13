<template>
  <transition name="slide" mode="out-in">
    <div :id="'phase__' + id" v-if="phaseIndex == state.currentPhase" class="content__phase-wrap">
      <div class="phase__title">
        <div class="container -max--lg">
          <div class="g__row">
            <div class="g__col mb-4">
              <h4 class="c--jean-jacket">{{phase.title}} —</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="content__phase">
        <div class="container -max--lg">
          <div class="g__row">
            <div class="g__col">
              <slot></slot>
            </div>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
  import {store} from '../global';

  export default {
    components : {

    },

    props : {
      id : {
        type : String,
        required : true
      },
      phaseIndex : {
        type : Number,
        required : true
      },
      phase : {
        type : Object
      }
    },

    data() {
      return {
        state : store.resume.state,
        model : store.resume.model,
      }
    },

    computed : {
    },

    watch : {
    },



    methods : {
    },

    created() {
    },

  }
</script>
