
<template>
  <div class="radial__group g__row">
    <div v-for="item in items" class="g__col6">
      <button
        type="button"
        class="btn"
        @click="setValue(item.value)"
        :class="{'-selected' : isActive(item.value)}">
        {{item.text}}
      </button>
    </div>
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
      }
    },

    data() {
      return {

      }
    },

    created() {
    },

    methods : {
      setValue : function(newValue) {
        this.$emit('updateValue', newValue);
      },
      isActive : function(value) {
        return this.value === value;
      }
    }
  }
</script>
