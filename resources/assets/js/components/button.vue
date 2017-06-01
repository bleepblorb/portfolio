<template lang="html">
  <button
    :is="componentType"
    :class="classList"
    :href="href"
    :rel="rel"
    :target="target"
    @click="onclick"
    :disabled="disabled"
  >
    <slot></slot>
  </button>
</template>

<script>
  import vLink from './link';

  export default {
    components : { vLink },
    props : {
      block: {
        type: Boolean,
        default: false
      },
      disabled: {
        type: Boolean,
        default: false
      },
      size: {
        type: String,
        default: null
      },
      color: {
        type: String,
        default: null
      },
      variant: {
        type: String,
        default: null
      },
      href: {
        type: String
      },
      target: {
        type: String
      },
      rel: {
        type: String
      }
    },

    computed : {
      componentType() {
        return (this.href || this.to) ? 'v-link' : 'button';
      },
      btnBlock() {
        return this.block ? `-block` : '';
      },
      btnColor() {
        return this.color ? `-${this.color}` : '';
      },
      btnVariant() {
        return this.variant ? `-${this.variant}` : '';
      },
      btnSize() {
        return this.size ? `-${this.size}` : '';
      },
      classList() {
        return [
          'btn',
          this.btnVariant,
          this.btnColor,
          this.btnSize,
          this.btnBlock,
        ];
      },
    },

    methods : {
      onclick(e) {
        if (this.disabled) {
          e.stopPropagation();
          e.preventDefault();
        } else {
          this.$emit('click', e);
        }
      }
    }
  }
</script>
