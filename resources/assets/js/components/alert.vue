<template lang="html">
  <transition>
    <div class="alert" :class="classList" role="alert" v-if="visible">
      <button
        v-if="dismissable"
        @click="close"
        type="button" class="close" data-dismiss="alert" aria-label="close">
      </button>
      <slot></slot>
    </div>
  </transition>
</template>

<script>
  export default {
    props : {
      show : {
        type : Boolean,
        default : true
      },
      variant : {
        type : String
      },
      dismissable : {
        type : Boolean,
        default : false
      }
    },

    data() {
      return {
        visible : this.show
      }
    },

    computed : {
      classList() {
        return {
          '-info' : this.variant == 'info',
          '-success' : this.variant == 'success',
          '-warning' : this.variant == 'warning',
          '-danger' : this.variant == 'danger',
        }
      }
    },

    methods : {
      close() {
        this.visible = false;
      }
    }
  }
</script>
