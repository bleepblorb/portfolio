
<template>
  <div class="radial-group g__row">
    <div v-for="option in options" class="g__col6">
      <button
        type="button"
        class="btn"
        @click="setValue(option.value)"
        :class="{'-selected' : isActive(option.value)}">
        {{option.label}}
      </button>
    </div>
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
        this.$emit('input', newValue);
      },
      isActive : function(value) {
        return this.value === value;
      }
    }
  }
</script>
