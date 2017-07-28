<template>
  <div class="editor__step">
    <div class="editor__content">
      <div class="intro-photo" v-if="imageUrl">
        <img :src="imageUrl" alt="">
      </div>

      <div class="editor__question">
        <h4 class="c--gummy">{{intro}}</h4>
        <h3 class="c--late-night">{{question}}</h3>
        <p class="c--gray mt-2" v-if="description">{{description}}</p>
      </div>

      <div
        class="editor__input -condensed"
        v-if="this.inputType !== 'intro'">
        <multiselect
          v-model="value"
          :options="options"
          :placeholder="placeholder || 'Select'"
          :multiple="this.inputType === 'checkbox-group'"
          :addSelectAll="this.inputType === 'checkbox-group'"
          :close-on-select="this.inputType !== 'checkbox-group'"
          :allow-empty="false"
          >
        </multiselect>
      </div>

      <div
        class="editor__input -standard"
        v-if="this.inputType !== 'intro'">
        <component :is="inputType"
          :options="options"
          :id="id"
          v-model="value"
          :placeholder="placeholder || 'Select'"
          :label="label">
        </component>
      </div>

      <div class="editor__errors">
        <p class="has-error">{{error}}</p>
      </div>
    </div>
  </div>
</template>

<script>
  import {store} from '../global';
  import radialGroup from '../radialGroup';
  import checkboxGroup from '../checkboxGroup';
  import sliderInput from '../sliderInput';
  import multiselect from '../multiselect';

  export default {

    components : {
      radialGroup, checkboxGroup, sliderInput, multiselect
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
      description : {
        type : String
      },
      inputType : {
        type : String
      },
      options : {
        type: Array,
      },
      imageUrl : {
        type : String
      },
      phase : {
        type : String,
        required : true
      },
      label : {
        type : String,
        required : false
      },
      placeholder : {
        type : String,
        required : false
      }
    },

    data() {
      return {
        state : store.resume.state,
        error : '',
      }
    },

    computed : {
      model() {
        return store.resume.model[this.phase]
      },
      value : {
        get() {
          return this.model[this.id];
        },
        set(newValue) {
          this.model[this.id] = newValue ;
        }
      },
      isSet() {
        return !this.isEmpty(this.value) || this.inputType == 'intro';
      }
    },

    watch : {
      isSet : function() {
        if(this.isSet) {
          console.log('value is set. Emit Step Completed', this.stepIndex);
          this.$emit('completedStep', this.stepIndex);
          Event.$emit('stepComplete', this.stepNum);
        }
      }
    },

    created() {
      if ( this.isSet ) {
        console.log('value is set. Emit Step Completed', this.stepIndex);
        this.$emit('completedStep', this.stepIndex);
        Event.$emit('stepComplete', this.stepNum);
      }

      this.$on('setError', (error) => {
        this.error = error;
        window.setTimeout( () => {
          this.error = '';
        }, 2000);
      });
    },

    methods : {
      isEmpty(value) {
        if( _.isEmpty(value)) {
          return true;
        }

        if (value) {
          return false;
        }

        return true;
      }
    }
  }
</script>
