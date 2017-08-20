<template>
  <div class="radial-group g__row">
    <div v-for="option in options" class="g__col6">
      <v-button
        @click="setValue(option.value)"
        variant="outline"
        size="lg"
        :class="{'-selected' : isActive(option.value)}"
        block
      >
        {{option.label}}
      </v-button>
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
