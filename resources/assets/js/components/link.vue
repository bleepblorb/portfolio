<template>
  <a
    :disabled="disabled"
    :aria-disabled="disabled ? 'true' : 'false'"
    :href="_href"
    :target="target || null"
    :rel="computedRel"
    :class="linkClassObject"
    @click="linkClick"
  >
    <slot></slot>
  </a>
</template>

<script>
  export default {
    computed: {
      _href() {
        if (this.disabled) {
          return '#';
        }

        // If href explicitly provided
        if (this.href) {
          return this.href;
        }

        // Fallback to `to` prop
        if (this.to && typeof this.to === 'string') {
          return this.to;
        }
      },
      computedRel() {
        if (this.target === '_blank' && this.rel === null) {
          return 'noopener';
        }
        return this.rel || null;
      },
      linkClassObject() {
        return [
          this.active ?  this.activeClass : null,
          this.disabled ? 'disabled' : null
        ];
      }
    },
    props: {
      active: {
        type: Boolean,
        default: false
      },

      disabled: Boolean,

      href: {
        type: String,
        default: '#'
      },

      target: {
        type: String,
        default: '_self'
      },

      rel: {
        type: String,
        default: null
      },

      to: {
        type: [String, Object],
        default: null
      },

      tag: {
        type: String,
        default: 'a'
      },

      append: Boolean,

      replace: Boolean,

      activeClass: {
        type: String,
        default: '-active'
      },

      event: {
        type: [String, Array],
        default: 'click'
      }
    },
    methods: {
      linkClick(e) {
        if (!this.disabled) {
          this.$root.$emit('clicked::link', this);
          this.$emit('click', e);
        } else {
          e.stopPropagation();
        }

        if (!this.isRouterLink && this._href === '#') {
          // stop scroll-to-top behavior
          e.preventDefault();
        }
      }
    }
  };
</script>
