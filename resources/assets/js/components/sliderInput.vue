
<template>
  <div>
    <h4 class="t--center c--gummy">{{text}}</h4>
    <div class="slider-input__bar">
      <label v-for="(option, index) in options" class="slider-input__item form-radio">
        <input :id="id+'_'+index" :name="id" type="radio" class="form-radio__input" :value="option.value" v-model="updatedValue">
        <span class="form-radio__indicator"></span>
      </label>
    </div>
    <h6 v-if="placeholder" class="t--center c--grover t--normal">{{placeholder}}</h6>
  </div>
</template>

<script>
  export default {
    props : {
      options : {
        type : Array,
        required : true
      },
      value : {
        type: String,
        default: ''
      },
      id : {
        type : String,
        required : true
      },
      placeholder : {
        type : String
      }
    },

    data() {
      return {
        updatedValue : this.value,
      }
    },

    computed : {
      text() {
        let active =  _.find(this.options, item => {
          return item.value == this.value;
        });

        if (active) {
          return active.label;
        }
      }
    },

    watch : {
      updatedValue(newValue) {
        this.$emit('input', newValue );
      }
    },

    created() {
    },

    methods : {
      selectAll() {
        this.updatedValue = this.allItems;
      }
    }
  }
</script>
