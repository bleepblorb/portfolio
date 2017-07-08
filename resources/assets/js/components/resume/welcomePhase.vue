<template>
  <div :id="'phase__' + id">
    <h4 v-if="stoked">Yeah! I am <strong class="c--jazzy example-result">{{stoked}}</strong> pumped to get started!</h4>
    <h2 v-if="stoked">This has been an <toggler id="exampleToggle" :index="exampleToggle" :options="['wonderful', 'tedious']" class="example-toggle"></toggler> start!</h2>
  </div>
</template>

<script>

  import {store} from '../global';
  import toggler from '../toggler';

  export default {

    components : {
      toggler
    },

    props : {
      id : {
        type : String
      }
    },

    data() {
      return {
        exampleToggle : 0
      }
    },

    computed : {
      stoked() {
        return store.resume.model.tour.value;
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
