<!-- <template lang="html">
  <svg role="presentation" class="icon" :class="sizeClass">
    <use :xlink:href="sprite+'#'+name"></use>
  </svg>
</template> -->

<template lang="html">
  <svg role="presentation" class="icon" :class="sizeClass" :viewBox="icon.viewBox" v-html="icon.content" v-once>
  </svg>
</template>

<script>
  import {icons} from './icon-system.js';

  export default {

    props : {
      name : {
        type : String,
        validator(val) {
          return icons[val]
        }
      },
      size : {
        type : String,
        validator (val) {
          return val === 'xs' || val === 'sm' || val === 'md' || val === 'lg' || val === 'xl'
        },
      }
    },

    data() {
      return {
        icons : icons
      }
    },

    computed : {
      sizeClass() {
        return this.size ? '-' + this.size : '';
      },
      icon() {
        return icons[this.name];
      }
    },

    created() {
      console.log(this.icons);
    }
  }
</script>
