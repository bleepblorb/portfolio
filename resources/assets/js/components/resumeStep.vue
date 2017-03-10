<template>
  <div class="editor__step">
    <div class="editor__content">
      <img class="intro-photo" v-if="imageUrl" :src="imageUrl" alt="">
      <div class="editor__question">
        <h4 class="c--gummy">{{intro}}</h4>
        <h3 class="c--late-night">{{question}}</h3>
      </div>

      <div class="editor__input" :class="inputType">
        <radial-group
          @updateValue="updateModel"
          :items="items"
          :value="value">
        </radial-group>
      </div>
    </div>
  </div>
</template>

<script>
  import {store} from './global';
  import radialGroup from './radialGroup';

  export default {

    components : {
      radialGroup
    },

    props : {
      id : {
        type : String,
        required : true
      },
      stepNum : {
        type: Number,
        required : true
      },
      stepIndex : {
        type: Number,
        required : true
      },
      intro : {
        type : String
      },
      question : {
        type : String
      },
      inputType : {
        type : String
      },
      items : {
        required : true
      },
      imageUrl : {
        type : String
      },
      animation : {
        type : String
      }
    },

    data() {
      return {
        state : store.resume.state
      }
    },

    computed : {
      value() {
        return store.resume.model[this.id];
      },
      isSet() {
        return this.value ? true : false;
      }
    },

    watch : {
      isSet : function() {
        if(this.value) {
          console.log('value is set. Emit Step Completed', this.stepIndex);
          this.$emit('completedStep', this.stepIndex);
          Event.$emit('stepComplete');
        }
      }
    },

    created() {
      // this.$emit('completedStep', this.stepIndex);
    },

    methods : {
      updateModel : function(newValue) {
        Event.$emit("updateModel", this.id, newValue);
      }
    }
  }
</script>
