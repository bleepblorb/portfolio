<template lang="html">
  <div class="dropdown__link"
    @click.prevent="toggle()"
    @mouseenter="onHover"
    @mouseleave="onHoverOut"
    ref="target"
    >
      <slot name="target"></slot>

      <popup class="dropdown"
        ref="menu"
        :target="target"
        :show="isOpen"
        :position="position"
      >
        <div class="dropdown__drop-wrap" >
          <div ref="content" class="dropdown__content" :style="style">
            <slot></slot>
          </div>
        </div>
      </popup>
  </div>
</template>

<script>
  import popup from './popup';
  import clickout from '../mixins/clickout';

  export default {
    components : {popup},
    mixins : [clickout],
    methods : {
    },

    props : {
      /**
       * position of popup - 'top', 'bottom', 'left', 'right'
       */
      position : {
        type : String,
        default : 'bottom'
      },

      /**
       * max height of the dropdown
       */
      maxHeight : {
        type : Number,
        default : null
      },


      /**
       * disables dropdown link
       */
      disabled : {
        type : Boolean,
        default : false
      },

      /**
       * event triggers for dropdown
       */
      trigger : {
        type : String,
        default : 'click',
        validator(val) {
          return val == 'click' || val == 'hover';
        }
      },

      /**
       * Should the dropdown close when user clicks off of dropdown
       */
      closeOnClickOff : {
        type : Boolean,
        default : true
      },

      /**
       * Should the dropdown close when user clicks on the dropdown
       */
      closeOnSelect : {
        type : Boolean,
        default : true
      }
    },

    data() {
      return {
        isOpen : false,
        target : 'body',
        overflow : {
          top : false,
          bottom : false
        }
      }
    },

    computed : {
      style() {
        return {
          'max-height' : this.maxHeight ? this.maxHeight + 'px' : false,
        }
      },

      classList () {
        return {
          '-disabled': this.disabled,
          '-overflow-top' : this.overflow.top,
          '-overflow-btm' : this.overflow.bottom
        }
      }
    },

    watch : {
    },

    methods : {

      /**
       * determines if content overflows dropdown container.
       * If so, will add '-overflow-top' or '-overflow-btm' classes to element
       *
       */
      checkOverflow () {
        let el = this.$refs.content;
        let menu = this.$refs.menu.$el;

        if ( el.scrollTop > 5 ) {
          menu.classList.add('-overflow-top');
        } else {
          menu.classList.remove('-overflow-top');
        }

        if ( el.clientHeight + el.scrollTop <= el.scrollHeight - 5 ) {
          menu.classList.add('-overflow-btm');
        } else {
          menu.classList.remove('-overflow-btm');
        }
      },

      /**
       * retrieves the dropdown target element
       * @returns {DOM}
       */
      getTarget() {
        return this.$refs.target;
      },


      onHover() {
        if ( this.trigger == 'hover' ) {
          this.isOpen = true;
        }
      },

      onHoverOut() {
        if ( this.trigger == 'hover' ) {
          this.close();
        }
      },

      /**
       * toggle dropdown visibility
       */
      toggle() {
        this.isOpen ? this.close() : this.open();
      },

      /**
       * handle when user clicks away from dropdown
       */
      _clickOutListener(e) {
        if ( !this.$el.contains(e.target) && (!this.$refs.content.contains(e.target) || this.closeOnSelect) ) {
          if ( this.clickOutListener ) {
            this.clickOutListener();
          }
        }
      },

      clickOutListener() {
        if ( this.closeOnClickOff ) {
          this.close();
        }

      },

      close() {
        this.isOpen = false;
      },

      open() {
        this.isOpen = true;

        setTimeout( () => {
          this.$refs.content.scrollTop = 0;
          this.checkOverflow();
        }, 10);
      }
    },

    created() {
    },

    mounted() {
      this.target = this.getTarget();
      this.$refs.content.addEventListener("scroll", _.throttle(this.checkOverflow, 15));
      window.addEventListener("resize", _.debounce(this.close, 200, {
        'leading': true,
        'trailing': false
      }));
    },
  }
</script>
