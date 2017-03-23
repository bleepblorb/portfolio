<template>
  <resume-phase :id="id">
    <div id="portrait" :style="backgroundImage"> </div>
  </resume-phase>
</template>

<script>
  import resumePhase from './resumePhase';

  export default {
    mixins : [ resumePhase ],

    components : {
      resumePhase
    },

    props : {
    },

    data() {
      return {
        url : "/storage/portrait/portrait-base.jpg"
      }
    },

    computed : {
      expression() {
        return this.model.expression;
      },
      backgroundImage() {
        return {
          backgroundImage : `url('${this.url}')`
        };
      }
    },

    watch : {
      model : {
        handler() {
          this.updatePortrait();
        },
        deep : true
      }
    },



    methods : {
      updatePortrait() {
        axios.post('/img/portrait', {
          facialHair: this.model.facialHair,
          background: this.model.background
        })
        .then(response => {
          this.url = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    },

    created() {
      this.updatePortrait();
    },

  }
</script>
