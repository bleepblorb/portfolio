<template>
  <ul class="revealer">
    <li class="revealer__item" v-for="n in activeIndex" :style="{'opacity': (1 - ((n - 1) / length)) }">{{randomOptions[n-1]}}</li>
    <li @click.prevent="reveal" v-if="activeIndex < length" class="t--h5 c--lightning revealer__clicker">+ More</li>
  </ul>
</template>

<script>

  export default {

    props : {
      id : {
        type : String,
        default : null
      },
      options : {
        type : Array,
        required : true
      },
      index : {
        type : Number,
        default : 1
      },
      active : {
        type : Boolean,
        default : true
      }
    },

    data() {
      return {
        activeIndex : this.index,
      }
    },

    computed : {
      length() {
        return this.options.length;
      },
      randomOptions() {
        return _.shuffle(this.options);
      }
    },

    methods : {
      reveal() {
        if (!this.active) { return;}

        if ( this.activeIndex < this.length ) {
          this.activeIndex ++;
        }
        this.$parent.$emit('toggleUpdate', this.id, this.activeIndex, this.options[this.activeIndex]);

        window.scrollBy(0,57);
      }
    },

    created() {

    }
  }

</script>
