// Modified from https://github.com/monterail/vue-multiselect

export default {
  data () {
    return {
      pointer: 0,
      visibleElements: this.maxHeight / this.optionHeight
    }
  },
  props: {
    /**
     * Enable/disable highlighting of the pointed value.
     * @type {Boolean}
     * @default true
     */
    showPointer: {
      type: Boolean,
      default: true
    },
    optionHeight: {
      type: Number,
      default: 40
    }
  },
  computed: {
  },

  watch: {
    filteredOptions () {
      this.pointerAdjust()
    }
  },

  methods: {
    optionHighlight (index, option) {
      return {
        '-highlighted': index === this.pointer && this.showPointer,
        '-selected': this.isSelected(option)
      }
    },
    addPointerElement ({ key } = 'Enter') {

      /* istanbul ignore else */
      if (this.filteredOptions.length > 0) {
        this.select(this.filteredOptions[this.pointer], key)
      }
    },
    pointerForward () {
      /* istanbul ignore else */
      if (this.pointer < this.filteredOptions.length - 1) {
        this.pointer++
        this.pointerPosition()
      }
    },
    pointerBackward () {
      if (this.pointer > 0) {
        this.pointer--
        this.pointerPosition()
      }
    },
    pointerReset () {
      /* istanbul ignore else */
      if (!this.closeOnSelect) return
      this.pointer = 0
      /* istanbul ignore else */
      if (this.$refs.list) {
        this.$refs.list.scrollTop = 0
      }
    },
    pointerAdjust () {
      /* istanbul ignore else */
      if (this.pointer >= this.filteredOptions.length - 1) {
        this.pointer = this.filteredOptions.length
          ? this.filteredOptions.length - 1
          : 0
      }
    },

    pointerPosition () {
      let containerHeight = this.$refs.list.clientHeight
      let scrollTop = this.$refs.list.scrollTop
      let el = this.$refs.list.children[this.pointer]
      let elHeight = el.clientHeight
      let offset = el.offsetTop

      // Item is out of range below
      if (offset + elHeight >= scrollTop + containerHeight - 32) {
        this.$refs.list.scrollTop = offset + (elHeight) - containerHeight + 32;
      }

      // Item is out of range above
      if (offset - 32 <  scrollTop) {
        this.$refs.list.scrollTop = offset - 32
      }
    },

    pointerSet(option) {
      this.pointerSetIndex( _.findIndex(this.options, [this.trackBy, option[this.trackBy]]));
    },

    pointerSetIndex (index) {
      this.pointer = index
    }
  }
}
