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
      position : {
        type : String,
        default : 'bottom'
      },
      maxHeight : {
        type : Number,
        default : null
      },
      disabled : {
        type : Boolean,
        default : false
      },
      trigger : {
        type : String,
        default : 'click',
        validator(val) {
          return val == 'click' || val == 'hover';
        }
      },
      /**
       * Should the dropdown close when user clicks off of dropdown
       * @type {Boolean}
       * @default {True}
       */
      closeOnClickOff : {
        type : Boolean,
        default : true
      },
      /**
       * Should the dropdown close when user clicks on the dropdown
       * @type {Boolean}
       * @default {True}
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
          'max-height' : this.maxHeight ? this.maxHeight + 'px' : false
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

    methods : {

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

      toggle() {
        this.isOpen ? this.close() : this.open();
      },

      _clickOutListener(e) {
          if ( !this.$el.contains(e.target) && (!this.$refs.content.contains(e.target) || this.closeOnSelect) ) {
              if (this.clickOutListener) {

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
    }
  }
</script>
