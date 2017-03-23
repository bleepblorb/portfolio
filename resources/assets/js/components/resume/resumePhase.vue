<template>
  <div :id="'phase__' + id">
    <slot></slot>
  </div>
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
      }
    },

    data() {
      return {
        state : store.resume.state,
      }
    },

    computed : {
      model() {
        return store.resume.model[this.id];
      }
    },

    watch : {
    },



    methods : {
    },

    created() {
    },

  }
</script>
