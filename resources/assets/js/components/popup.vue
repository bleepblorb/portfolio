// Modified from https://github.com/monterail/vue-multiselect
<template>
  <div v-show="isOpen">
    <slot></slot>
  </div>
</template>

<script>

  import clickout from '../mixins/clickout';

  const transitionEndEvents = {
    'WebkitTransition' : 'webkitTransitionEnd',
    'MozTransition'    : 'transitionend',
    'OTransition'      : 'otransitionend',
    'transition'       : 'transitionend'
  };

  let transitionEndEvent = '';
  for (let name in transitionEndEvents) {
    if ({}.hasOwnProperty.call(transitionEndEvents, name)) {
      let tempEl = document.createElement('p');
      if (typeof tempEl.style[name] !== 'undefined') {
        transitionEndEvent = transitionEndEvents[name];
      }
    }
  }

  function getTransitionProperty(element) {
    // Note that in some versions of IE9 it is critical that
    // msTransform appear in this list before MozTransform
    var properties = [
      'transition',
      'WebkitTransition',
      'msTransition',
      'MozTransition',
      'OTransition'
    ];
    var p;
    while (p = properties.shift()) {
      if (typeof element.style[p] != 'undefined') {
        return p;
      }
    }
    return false;
  }

  export default {
    mixins : [clickout],
    props: {

      /**
       * Whether Popup is visible
       * @type {Boolean}
       * @default false
       */
      show: {
        type : Boolean,
        default: false
      },

      position : {
        type : String,
        validator(val) {
          return ['top', 'bottom', 'left', 'right', 'middle'].indexOf(val) !== -1;
        },
        default : "bottom"
      },
      /**
       * Target to link popup to
       * @type {String}
       */
      target: {
        required : true,
        default : null
      },
      arrow : {
        type : String,
        default : ''
      },
      delay : {
        type : [Number, Array],
        default : 0
      },
    },

    data () {
      return {
        isOpen : false,
        isActive : false,
        style : {},
        offsets : {
          y : 0,
          x : 0
        },
      }
    },
    computed: {
      delayIn() {
        return typeof this.delay == 'number' ? this.delay : this.delay[0];
      },
      delayOut() {
        return typeof this.delay == 'number' ? this.delay : this.delay[1];
      }
    },
    watch: {
      target(newVal) {
        this.setOptions();
      },
      show( newVal ) {
        if( newVal ) {
          this.activate();
        }
        else {
          this.deactivate();
        }
      },
      isActive(val) {
        if ( val ) {
          this.$el.classList.add('-active');
        } else {
          this.$el.classList.remove('-active');
        }
      }
    },
    mounted () {
      document.addEventListener("scroll", _.throttle(this.adjustPosition, 15));
      window.addEventListener("resize", _.throttle(this.adjustPosition, 15));

      this._tether = new Tether(this.tetherOptions());
      this._timeout = 0;
      this._timeoutOut = 0;
    },
    created() {
      this._transitionDur = 350;
      this._attachments = {
        top: {
          el : "bottom center",
          tar : "top center",
          attach : "together none"
        },
        bottom: {
          el : "top center",
          tar : "bottom center",
          attach : "together none"
        },
        left : {
          el : "middle right",
          tar : "middle left",
          attach : "none together"
        },
        right : {
          el : "middle left",
          tar : "middle right",
          attach : "none together"
        },
        middle : {
          el : "middle center",
          tar : "middle center",
          attach : "none"
        }

      }
    },

    methods: {
      transitionEndHandler(e) {
        if(e.target == this.$el) {
          this.isOpen = false;
          this.$el.removeEventListener(transitionEndEvent, this.transitionEndHandler);
        }
      },
      tetherOptions() {
        return {
          element: this.$el,
          target: this.target || 'body',
          attachment : this._attachments[this.position].el,
          targetAttachment: this._attachments[this.position].tar,
          classPrefix: 'popup',
          enabled : false,
          classes: {
            'enabled': '-enabled',
          },
          offset: '0 0',
          targetOffset: '0 0',
          constraints: [
            {
              to: 'window',
              attachment: this._attachments[this.position].attach
            }
          ],
          addTargetClasses: false,
        }
      },

      /**
       * Update tether options
       */
      setOptions() {
        if (this._tether) {
            this._tether.setOptions(this.tetherOptions());
        }
      },

      /**
       * Opens the multiselect’s dropdown.
       * Sets this.isOpen to TRUE
       */
      activate (event) {

        clearTimeout(this._timeout);

        if ( (this.isOpen && this.isActive) || this.disabled) return

        this.$el.style.minWidth = (this.target.clientWidth - 16) + 'px';

        this._timeout = setTimeout( ()=> {
          this.isOpen = true;

          this.$nextTick(() => {
            this._tether.enable();
            this.adjustPosition();
            this.isActive = true;
          });

          // setTimeout( () => {
          //   this._tether.enable();
          //   this.adjustPosition();
          // }, 10);

          this.$emit('open', this.id);
        }, this.delayIn );

      },
      /**
       * Closes the multiselect’s dropdown.
       * Sets this.isOpen to FALSE
       */
      deactivate () {
        clearTimeout(this._timeout);

        if (!this.isOpen) return
          this._timeout = setTimeout( ()=> {

          this.$el.blur();
          this._tether.disable();
          this.isActive = false;

          // Check to see if element has transition duraton property;
          if ( window.getComputedStyle(this.$el, null)[getTransitionProperty(this.$el) + 'Duration'] == '0s') {
            this.$nextTick( () => {
              this.isOpen = false;
            })
          } else {
            this.$el.addEventListener(transitionEndEvent, this.transitionEndHandler);
          }

          this.$emit('close', this.id);
        }, this.delayOut);
      },
      /**
       * Call this.activate() or this.deactivate()
       * depending on this.isOpen value.
       *
       * @fires this#activate || this#deactivate
       * @property {Boolean} isOpen indicates if dropdown is open
       */
      toggle () {
        this.isOpen
          ? this.deactivate()
          : this.activate()
      },
      /**
       * Updates the hasEnoughSpace variable used for
       * detecting where to expand the dropdown
       */
      adjustPosition () {
        if ( !this.isOpen ) return;

        let offsetX = 0;
        let offsetY = 0;

        let target = this.target;
        let drop = this.$el;
        let dim = target.getBoundingClientRect();
        let dropWidth = drop.clientWidth;
        let dropHeight = drop.clientHeight;
        let arrow;

        if ( this.arrow ) {
          let temp = this.$el.getElementsByClassName(this.arrow)[0];
          arrow = {
            el : temp,
            h : temp.clientHeight,
            w : temp.clientWidth,
            originY : (dropHeight / 2) - (temp.clientHeight / 2),
            originX : (dropWidth / 2) - (temp.clientWidth / 2)
          }
        }

        // determine Y offset based on location of window
        if( this.position == 'left' || this.position == 'right' || this.position == 'middle'){

          let winHeight = window.innerHeight;
          let origin = dim.top + (target.clientHeight / 2);
          let top  = origin - (dropHeight/ 2);
          let btm = top + dropHeight;

          if ( top < 10 ) {
            offsetY += _.clamp(top - 10, -(dim.bottom - top) + 30, 0);
          }

          if ( winHeight - btm  < 10 ) {
            offsetY +=  _.clamp(-(winHeight - btm ) + 10, 0, -(dim.top - btm) - 30);
          }

          if ( this.arrow ) {
            arrow.el.style.top = _.clamp(arrow.originY + offsetY, 0, dropHeight - arrow.h) + 'px';
          }
        }
        // determine X offset based on location of window
        if (this.position == 'top' || this.position == 'bottom' || this.position == 'middle') {
          let winWidth = window.innerWidth;
          let origin = dim.left + (target.clientWidth / 2);
          let left  = origin - (dropWidth / 2);
          let right = left + dropWidth;

          if ( left < 10 ) {
            offsetX += _.clamp(left - 10, -(dim.right - left) + 30, 0);
          }

          if ( winWidth - right  < 10 ) {
            offsetX +=  _.clamp(-(winWidth - right ) + 10, 0, -(dim.left - right) - 30);
          }

          if ( this.arrow ) {
            arrow.el.style.left = _.clamp(arrow.originX + offsetX, 0, dropWidth - arrow.w) + 'px';
          }
        }
        this.offsets.y = offsetY;
        this.offsets.x = offsetX;
        this._tether.offset.top = this.offsets.y + 'px';
        this._tether.offset.left = this.offsets.x + 'px';
        this._tether.position();
      },

      click() {
      },
    }
  }
</script>
