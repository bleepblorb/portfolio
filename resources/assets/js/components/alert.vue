<template>
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
      /**
       * whether alert is shown initially
       * @type {boolean}
       */
      show : {
        type : Boolean,
        default : true
      },

      /**
       * stylistic variant (applies class)
       * @type {string}
       */
      variant : {
        type : String
      },

      /**
       * whether alert can be dismissed
       * @type {boolean}
       */
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

      /**
       * list of classes
       * @returns {object}
       */
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
      /**
       * closes the alert
       */
      close() {
        this.visible = false;
      }
    }
  }
</script>
