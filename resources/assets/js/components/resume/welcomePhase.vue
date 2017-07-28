<template>
  <div :id="'phase__' + id">
    <div v-if="stoked" class="enter__fade-in-up -inview">
      <h4>I am <strong class="c--jazzy example-result">{{stoked}}</strong> pumped to get started!</h4>
      <h2>This has been a <toggler id="exampleToggle" :index="exampleToggle" :options="['wonderful', 'tedious']" class="example-toggle"></toggler> start!</h2>

    </div>
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
