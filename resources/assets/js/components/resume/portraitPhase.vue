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
        url : ""
      }
    },

    computed : {
      expression() {
        if(this.model) {
          return this.model.expression;
        }
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
        if (this.model) {
          axios.post('/img/portrait', this.model)
          .then(response => {
            this.url = response.data;
          })
          .catch(function (error) {
            console.log(error);
          });
        }
      }
    },

    created() {
      this.updatePortrait();
    },

  }
</script>
