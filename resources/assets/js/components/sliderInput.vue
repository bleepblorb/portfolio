
<template>
  <div>
    <h4 class="t--center c--gummy">{{text}}</h4>
    <div class="slider-input__bar">
      <label v-for="(item, index) in items" class="slider-input__item custom-control custom-radio custom-con">
        <input :id="id+'_'+index" :name="id" type="radio" class="custom-control-input" :value="item.value" v-model="updatedValue">
        <span class="custom-control-indicator"></span>
      </label>
    </div>
    <h6 class="t--center c--grover t--normal">{{label}}</h6>
  </div>
</template>

<script>
  export default {
    props : {
      items : {
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
      label : {
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
        let active =  _.find(this.items, item => {
          return item.value == this.value;
        });
        return active.text;
      }
    },

    watch : {
      updatedValue(newValue) {
        this.$emit('updateValue', newValue );
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
