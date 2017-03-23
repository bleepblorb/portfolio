<template>
  <span @click="toggle" class="toggler" :class="{'-active' : active }">{{options[index]}}</span>

</template>

<script>

  export default {

    props : {
      id : {
        type : String,
        required : true
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

        let activeIndex = this.index;

        if ( this.index == this.length - 1 ) {
          activeIndex = 0;
        }
        else {
          activeIndex = this.index + 1;
        }
        console.log(this.id);
        this.$parent.$emit('toggleUpdate', this.id, activeIndex);
      }
    }
  }

</script>
