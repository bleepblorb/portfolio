
<template>
  <div class="g__row">

    <div v-for="item in items" class="checkbox-group__item">
      <label class="custom-control custom-checkbox" >
        <input type="checkbox" class="custom-control-input" :value="item.value" v-model="updatedValue">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">{{item.text}}</span>
      </label>
    </div>
    <!-- <div class="g__col12">
      <p class="t--small c--gray-light t--left t--sans mb-2 t--center">
        <a @click.prevent="selectAll" href="#" class="btn btn-sm btn-secondary">Select All</a>
      </p>
    </div> -->
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
        type: Array,
        default: []
      }
    },

    data() {
      return {
        updatedValue : this.value,
      }
    },

    computed : {
      allItems() {
        let values = [];

        _.each(this.items, (item) => {
          values.push(item.value);
        });

        return values;
      },
    },

    watch : {
      updatedValue(newValue) {
        if ( _.isEmpty(newValue) ) {
          this.$parent.$emit('setError', 'You must have at least one item selected');
          this.updatedValue = this.value;
        }
        else {
          this.$emit('updateValue', newValue);
        }
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
