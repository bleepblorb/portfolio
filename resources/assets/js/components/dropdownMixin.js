// Modified from https://github.com/monterail/vue-multiselect

import clickout from '../mixins/clickout';

export default {
  mixins : [clickout],
  props: {
    /**
     * Will be passed with all events as second param.
     * Useful for identifying events origin.
     * @default null
     * @type {String|Integer}
    */
    target: {
      type : String,
      default: ''
    },
    trigger : {
      type : String,
      validator(val) {
        return val == "hover" || val == 'click';
      },
      default : 'click'
    },
    closeOnClickout: {
      type : Boolean,
      default: true
    },
    closeOnSelect: {
      type : Boolean,
      default: true
    },
  },

  data () {
    return {
      isOpen: false,
      style : {},
      offsets : {
        y : 0,
        x : 0
      },
      overflow : {
        top: false,
        bottom: false
      }
    }
  },
  mounted () {

    document.addEventListener("scroll", _.throttle(this.adjustPosition, 15));
    window.addEventListener("resize", _.debounce(this.deactivate, 200, {
      'leading': true,
      'trailing': false
    }));
    this.$refs.menu.addEventListener("scroll", _.throttle(this.checkOverflow, 15));

    this._tether = new Tether({
      element: this.$refs.menu,
      target: this.$refs.target,
      enabled: false,
      attachment : 'top center',
      targetAttachment: 'center center',
      targetOffset: '0 0',
      constraints: [
        {
          to: 'window',
          attachment: "none"
        }
      ]
    });

  },
  created() {

  },
  computed: {},
  watch: {},
  methods: {
    /**
     * Determines if the content overflow the dropdown container.
     * Sets this.overflow.top and this.overflow.bottom to TRUE || FALSE
     */
    checkOverflow () {
      let el = this.$refs.menu;

      this.overflow.top = el.scrollTop > 5 ?  true : false;

      this.overflow.bottom = el.clientHeight + el.scrollTop >= el.scrollHeight - 5 ? false : true;
    },

    /**
     * Opens the multiselect’s dropdown.
     * Sets this.isOpen to TRUE
     */
    activate (event) {
      /* istanbul ignore else */
      if (this.isOpen || this.disabled) return

      this.isOpen = true;

      this.$emit('open', this.id);

      this.style.minWidth = (this.$el.clientWidth - 16) + 'px';

      this.$nextTick(() => {
        this._tether.enable();
        this.adjustPosition();
        this.checkOverflow();
      });
    },
    /**
     * Closes the multiselect’s dropdown.
     * Sets this.isOpen to FALSE
     */
    deactivate () {
      /* istanbul ignore else */
      if (!this.isOpen) return

      this.isOpen = false
      this.$el.blur();
      this._tether.disable();

      this.$emit('close', this.id);
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

      let el = this.$refs.target;
      let drop = this.$refs.menu;

      let winHeight = window.innerHeight,
          dim = el.getBoundingClientRect(),
          padTop  = dim.top + (el.clientHeight / 2) - 10,
          padBtm = winHeight - (dim.top + (dim.height / 2)) - 10,
          dropHeight = drop.clientHeight,
          offsetX = 0,
          offsetY = 0;

      offsetY += _.clamp( dropHeight - padBtm, 0, _.min([padTop, dropHeight - (dim.height / 2)]));

      this.offsets.y = offsetY;

      this._tether.offset.top = this.offsets.y + 'px';
      this._tether.position();
    },

    click() {
        if( this.closeOnSelect ) {
          this.deactivate();
        }
    },

    /**
     * Handles dropout when user clicks outside of element
     */
    clickOutListener() {
      if( this.closeOnClickout ) {
        this.deactivate();
      }
    },

    _clickOutListener(e) {
        if (!this.$refs.menu.contains(e.target) && !this.$el.contains(e.target)) {
            if (this.clickOutListener) {
                this.clickOutListener();
            }
        }
    }
  }
}
