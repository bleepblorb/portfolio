<template>
  <span @click="toggle" class="toggler" :class="{'-active' : active }">{{options[activeIndex]}}</span>

</template>

<script>

  export default {

    props : {
      id : {
        type : String,
        default : null
      },
      options : {
        type : Array,
        required : true
      },
      index : {
        type : Number,
        default : 0
      },
      active : {
        type : Boolean,
        default : true
      }
    },

    data() {
      return {
        activeIndex : this.index
      }
    },

    computed : {
      length() {
        return this.options.length;
      }
    },

    methods : {
      toggle() {
        if (!this.active) { return;}

        if ( this.activeIndex == this.length - 1 ) {
          this.activeIndex = 0;
        }
        else {
          this.activeIndex ++;
        }
        this.$parent.$emit('toggleUpdate', this.id, this.activeIndex);
      }
    }
  }

</script>
