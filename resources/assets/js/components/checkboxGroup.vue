
<template>
  <div class="g__row checkbox-group">
    <div v-for="option in options" class="checkbox-group__item">
      <label class="form-check" >
        <input type="checkbox" class="form-check__input" :value="option.value" v-model="internalValue">
        <span class="form-check__indicator"></span>
        <span class="form-check__description">{{option.label}}</span>
      </label>
    </div>
    <div class="g__col12">
      <p class="t--small c--gray-light t--sans t--center mb-0">
       or just  <a @click.prevent="selectAll" href="#">Select All</a>
      </p>
    </div>
  </div>
</template>

<script>
  export default {
    props : {
      /**
       * List of checkbox options
       * @type {array}
       */
      options : {
        type : Array,
        required : true
      },

      /**
       * Initial value
       * @type {array}
       */
      value : {
        type: Array,
        default: []
      }
    },

    data() {
      return {
        internalValue : this.value
      }
    },

    computed : {
      /**
       * list of all option values
       * @returns {array}
       */
      allItems() {
        let values = [];

        _.each(this.options, (option) => {
          values.push(option.value);
        });

        return values;
      },
    },

    watch : {
      internalValue(newValue) {
        if ( _.isEmpty(newValue) ) {
          this.$parent.$emit('setError', 'You must have at least one item selected');
          this.internalValue = this.value;
        }
        else {
          this.$emit('input', newValue);
        }
      },
      value (newValue) {
        this.internalValue = newValue;
      }
    },

    created() {
    },

    methods : {
      selectAll() {
        // find all unselected values
        let newVals = _.difference(this.allItems, this.internalValue);

        // add remaining values in order.
        this.internalValue = this.internalValue.concat(newVals);
      }
    }
  }
</script>
