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
      /**
       * is button disabled
       * @type {Object}
       */
      disabled: {
        type: Boolean,
        default: false
      },

      /**
       * size of button - 'sm', 'md', 'lg'
       * @type {string}
       */
      size: {
        type: String,
        default: null
      },

      /**
       * color of button
       * @type {string}
       */
      color: {
        type: String,
        default: null
      },

      /**
       * button variant - 'outline', 'rounded'
       * @type {string}
       */
      variant: {
        type: String,
        default: null
      },

      /**
       * link to. will convert button to <a> tag
       * @type {string}
       */
      href: {
        type: String
      },

      /**
       * target attribute, for links
       * @type {string}
       */
      target: {
        type: String
      },

      /**
       * rel attribute, for links
       * @type {string}
       */
      rel: {
        type: String
      },

      /**
       * add block styling - '.-block'
       * @type {boolean}
       */
      block: {
        type: Boolean,
        default: false
      },
    },

    computed : {
      /**
       * determines if link or button
       * @returns {string} (component type)
       */
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
