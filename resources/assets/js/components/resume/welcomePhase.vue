<template>
    <div :id="'phase__' + id" class="alert alert--info">
      <h4>This is the Preview Pane.</h4>
      <p>It will update as you make choices in the editor. Keep an eye on this to see how things will turn out.</p>
      <p>Also, if you see any underlined items, you can click on them to cycle through differnt wordings or options. Finding the right word is essential. <toggler id="exampleToggle" :index="exampleToggle" :options="['Awesome', 'Radical', 'Okay', 'Whatever', 'Stupid']"></toggler>!</p>
    </div>
</template>

<script>

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
      introStyle() {
        if(this.model) {
          return this.model.introStyle;
        }
      },
      togglerPoem : {
        get() {
          if(this.model) {
            return this.model.togglerPoem;
          }
        },
        set(value) {
          if(this.model) {
            this.model.togglerPoem = value;
          }
        }
      },
      togglerIntro : {
        get() {
          if(this.model) {
            return this.model.togglerIntro;
          }
        },
        set(value) {
          this.model.togglerIntro = value;
        }
      },
      personal() {
        if ( this.model ) {
          return this.model.personal;
        }
      }
    },

    watch : {
    },



    methods : {
    },

    created() {
      this.$on('toggleUpdate', function(id, value) {
        this[id] = value;
      });
    },

  }
</script>
