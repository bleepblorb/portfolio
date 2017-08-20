// Modified from https://github.com/monterail/vue-multiselect

let searchTextTimeout;

function includes (str, query) {
  /* istanbul ignore else */
  if (!str) return false
  const text = str.toString().toLowerCase()

  return text.substr(0, query.length) === query;
}

function filterOptions (options, search, label) {
  return label
    ? options.filter(option => includes(option[label], search))
    : options.filter(option => includes(option, search))
}

function stripGroups (options) {
  return options.filter(option => !option.$isLabel)
}

function flattenOptions (values, label) {
  return (options) =>
    options.reduce((prev, curr) => {
      /* istanbul ignore else */
      if (curr[values] && curr[values].length) {
        prev.push({
          $groupLabel: curr[label],
          $isLabel: true
        })
        return prev.concat(curr[values])
      }
      return prev.concat(curr)
    }, [])
}

function isRepeatedChar (str) {
  return Array.prototype.reduce.call(str, (a, b) => {
    return a === b ? b : false;
  });
}

function filterGroups (search, label, values, groupLabel) {
  return (groups) =>
    groups.map(group => {
      const groupOptions = filterOptions(group[values], search, label)

      return groupOptions.length
        ? {
          [groupLabel]: group[groupLabel],
          [values]: groupOptions
        }
        : []
    })
}

const flow = (...fns) => x => fns.reduce((v, f) => f(v), x)

export default {

  props: {
    /**
     * Array of available options: Objects, Strings or Integers.
     * If array of objects, visible label will default to option.label.
     * If `labal` prop is passed, label will equal option['label']
     * @type {Array}
     */
    options: {
      type: Array,
      required: true
    },
    /**
     * Equivalent to the `multiple` attribute on a `<select>` input.
     * @default false
     * @type {Boolean}
     */
    multiple: {
      type: Boolean,
      default: false
    },
    /**
     * Presets the selected options value.
     * @type {Array||String}
     */
    value: {
      type: [Array, String],
      default () {
        return []
      }
    },
    /**
     * Key to compare objects
     * @default 'id'
     * @type {String}
     */
    trackBy: {
      type: String,
      default: 'value'
    },
    /**
     * Label to look for in option Object
     * @default 'label'
     * @type {String}
     */
    label: {
      type: String,
      default: 'label'
    },
    /**
     * Enable/disable search in options
     * @default true
     * @type {Boolean}
     */
    searchable: {
      type: Boolean,
      default: true
    },
    /**
     * Clear the search input after select()
     * @default true
     * @type {Boolean}
     */
    clearOnSelect: {
      type: Boolean,
      default: true
    },
    /**
     * Hide already selected options
     * @default false
     * @type {Boolean}
     */
    hideSelected: {
      type: Boolean,
      default: false
    },
    /**
     * Equivalent to the `placeholder` attribute on a `<select>` input.
     * @default 'Select option'
     * @type {String}
     */
    placeholder: {
      type: String,
      default: 'Select An Option'
    },
    /**
     * Allow to remove all selected values
     * @default true
     * @type {Boolean}
     */
    allowEmpty: {
      type: Boolean,
      default: true
    },
    /**
     * Reset this.internalValue, this.search after this.internalValue changes.
     * Useful if want to create a stateless dropdown.
     * @default false
     * @type {Boolean}
     */
    resetAfter: {
      type: Boolean,
      default: false
    },
    /**
     * Enable/disable closing after selecting an option
     * @default true
     * @type {Boolean}
     */
    closeOnSelect: {
      type: Boolean,
      default: true
    },
    /**
     * Function to interpolate the custom label
     * @default false
     * @type {Function}
     */
    customLabel: {
      type: Function,
      default (option, label) {
        return label ? option[label] : option
      }
    },

    /**
     * Number of allowed selected options. No limit if false.
     * @default False
     * @type {Number}
    */
    max: {
      type: Number
    },
    /**
     * Will be passed with all events as second param.
     * Useful for identifying events origin.
     * @default null
     * @type {String|Integer}
    */
    id: {
      default: null
    },
    /**
     * Limits the options displayed in the dropdown
     * to the first X options.
     * @default 1000
     * @type {Integer}
    */
    optionsLimit: {
      type: Number,
      default: 1000
    },

    /**
     * Array of keyboard keys to block
     * when selecting
     * @type {String}
    */
    blockKeys: {
      type: Array,
      default () {
        return []
      }
    },

    /**
     * Should there be a 'select all' option
     * Will only show up if multiple is true
     * @type {Boolean}
    */
    addSelectAll: {
      type: Boolean,
      default: false
    }
  },

  data () {
    return {
      search: '',
      showSearch: false,
      isOpen: false,
      isSelectable: false,
      internalValue: this.getInternalValue(this.value),
      tether : {},
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
    /* istanbul ignore else */
    if (!this.multiple && !this.clearOnSelect) {
      console.warn('[Vue-Multiselect warn]: ClearOnSelect and Multiple props can’t be both set to false.')
    }

    document.addEventListener("scroll", _.throttle(this.adjustPosition, 15));
    window.addEventListener("resize", _.debounce(this.deactivate, 200, {
      'leading': true,
      'trailing': false
    }));
    this.$refs.list.addEventListener("scroll", _.throttle(this.checkOverflow, 15));

    this.tether = new Tether({
      element: this.$refs.drop,
      target: this.$el,
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
  computed: {
    filteredOptions () {
      const search = this.search || ''
      const normalizedSearch = search.toLowerCase()

      let options = this.options.concat()

      options = this.hideSelected
        ? options.filter(this.isNotSelected)
        : options

      // } else {
      //   options = this.groupValues ? flattenOptions(this.groupValues, this.groupLabel)(options) : options
      // }
      return options.slice(0, this.optionsLimit)
    },
    valueKeys () {
      if (this.trackBy) {
        return this.internalValue.map(element => element[this.trackBy])
      } else {
        return this.internalValue
      }
    },
    optionKeys () {
      const options = this.groupValues ? this.flatAndStrip(this.options) : this.options
      return this.label
        ? options.map(element => element[this.label].toString().toLowerCase())
        : options.map(element => element.toString().toLowerCase())
    },
    currentOptionLabel () {
      return this.multiple
        ? this.searchable ? '' : this.placeholder
        : this.internalValue[0]
          ? this.getOptionLabel(this.internalValue[0])
          : this.searchable ? '' : this.placeholder
    }
  },
  watch: {
    'internalValue' (newVal, oldVal) {
      /* istanbul ignore else */
      if (this.resetAfter && this.internalValue.length) {
        this.search = ''
        this.internalValue = []
      }
    },
    'search' () {

      const search = this.search || ''

      if ( search === '' ) return;

      this.$emit('search-change', this.search, this.id)
      this.setSearch(search)
    },
    'value' (value) {
      this.internalValue = this.getInternalValue(value)
    }
  },
  methods: {

    setSearch (query) {
      const normalizedSearch = query.toLowerCase()
      let options = this.options.concat()

      options = filterOptions(options, normalizedSearch, this.label)

      if (options.length === 1) {
        // We have an exact match, choose it
        this.pointerSet(options[0]);
      }

      if (options.length === 1) {
        // We have an exact match, choose it
        this.pointerSet(options[0]);
      }

      if (normalizedSearch.length > 1 && isRepeatedChar(normalizedSearch)) {
        // They hit the same char over and over, maybe they want to cycle through
        // the options that start with that char
        const repeatedOptions = filterOptions(this.options, normalizedSearch[0], this.label);

        if (repeatedOptions.length) {
          let selected = repeatedOptions.indexOf(this.options[this.pointer]);

          // Pick the next thing (if something with this prefix wasen't selected
          // we'll end up with the first option)
          selected += 1;
          selected = selected % repeatedOptions.length;

          this.pointerSet(repeatedOptions[selected]);
          return;
        }
      }

      if (options.length) {
        // We have multiple things that start with this prefix.  Based on the
        // behavior of native select, this is considered after the repeated case.
        this.pointerSet(options[0]);
        return;
      }
    },

    checkOverflow () {
      let el = this.$refs.list;

      this.overflow.top = el.scrollTop > 5 ?  true : false;

      this.overflow.bottom = el.clientHeight + el.scrollTop >= el.scrollHeight - 5 ? false : true;

      console.log(el.scrollTop, this.overflow.top, this.overflow.bottom);
    },

    /**
     * Converts the internal value to the external value
     * @returns {Object||Array||String||Integer} returns the external value
     */
    getValue () {
      let curValue = _.map( this.internalValue, this.trackBy );
      console.log('get select value', curValue, this.internalValue);
      return this.multiple
        ? curValue
        : curValue.length === 0
          ? ''
          : curValue[0]
    },
    /**
     * Converts the external value to the internal value
     * @returns {Array} returns the internal value
     */
    getInternalValue (values) {
      let internalValue = [];

      console.log('values', values);
      // maintain order of passed in values.
      let trackBy = this.trackBy;

      // convert to array if string
      if ( typeof values === 'string') {
        values = [values];
      }

      for (var i=0; i < values.length; i++){
        let found = _.find(this.options, [trackBy, values[i]]);
        if (found) {
          internalValue.push(found);
        }
      };

      console.log('returning internalValue', internalValue);

      return internalValue;
    },
    /**
     * Filters and then flattens the options list
     * @param  {Array}
     * @returns {Array} returns a filtered and flat options list
     */
    filterAndFlat (options) {
      return flow(
        filterGroups(this.search, this.label, this.groupValues, this.groupLabel),
        flattenOptions(this.groupValues, this.groupLabel)
      )(options)
    },
    /**
     * Flattens and then strips the group labels from the options list
     * @param  {Array}
     * @returns {Array} returns a flat options list without group labels
     */
    flatAndStrip (options) {
      return flow(
        flattenOptions(this.groupValues, this.groupLabel),
        stripGroups
      )(options)
    },
    /**
     * Updates the search value
     * @param  {String}
     */
    updateSearch (event) {

      // const ENTER = 13;
      // const ESCAPE = 27;
      const SPACE = 32;

      // this.search = event
      if (event.charCode === 0) {
        return;
      }

      if (event.keyCode === SPACE) {
        event.preventDefault();
      }

      clearTimeout(searchTextTimeout);
      searchTextTimeout = setTimeout(() => {
        this.search = '';
      }, 500);

      this.search += String.fromCharCode(event.charCode);
    },
    /**
     * Finds out if the given query is already present
     * in the available options
     * @param  {String}
     * @returns {Boolean} returns true if element is available
     */
    isExistingOption (query) {
      return !this.options
        ? false
        : this.optionKeys.indexOf(query) > -1
    },
    /**
     * Finds out if the given element is already present
     * in the result value
     * @param  {Object||String||Integer} option passed element to check
     * @returns {Boolean} returns true if element is selected
     */
    isSelected (option) {
      const opt = this.trackBy
        ? option[this.trackBy]
        : option
      return this.valueKeys.indexOf(opt) > -1
    },
    /**
     * Finds out if the given element is NOT already present
     * in the result value. Negated isSelected method.
     * @param  {Object||String||Integer} option passed element to check
     * @returns {Boolean} returns true if element is not selected
     */
    isNotSelected (option) {
      return !this.isSelected(option)
    },
    /**
     * Returns empty string when options is null/undefined
     * Returns tag query if option is tag.
     * Returns the customLabel() results and casts it to string.
     *
     * @param  {Object||String||Integer} Passed option
     * @returns {Object||String}
     */
    getOptionLabel (option) {
      /* istanbul ignore else */
      if (!option && option !== 0) return ''
      /* istanbul ignore else */
      if (option.isTag) return option.label
      return this.customLabel(option, this.label) || ''
    },
    /**
     * Add the given option to the list of selected options
     * or sets the option as the selected option.
     * If option is already selected -> remove it from the results.
     *
     * @param  {Object||String||Integer} option to select/deselect
     * @param  {Boolean} block removing
     */
    select (option, key) {

      if (this.blockKeys.indexOf(key) !== -1 || this.disabled || !this.isSelectable) return

      if (this.max && this.multiple && this.internalValue.length === this.max) return


      const isSelected = this.isSelected(option)

      if (isSelected && this.multiple) {
        if (key !== 'Tab') this.removeElement(option)
        return
      } else if ( this.multiple ) {
        this.internalValue.push(option)
      } else {
        this.internalValue = [option]
      }

      console.log('direct select value', this.internalValue);

      // this.$emit('select', _.cloneDeep(option), this.id)
      this.$emit('input', this.getValue(), this.id)

      if (this.closeOnSelect) this.deactivate()
    },
    /**
     * Removes the given option from the selected options.
     * Additionally checks this.allowEmpty prop if option can be removed when
     * it is the last selected option.
     *
     * @param  {type} option description
     * @returns {type}        description
     */
    removeElement (option) {
      /* istanbul ignore else */
      if (this.disabled) return
      /* istanbul ignore else */
      if (!this.allowEmpty && this.internalValue.length <= 1) {
        this.$parent.$emit('setError', 'You must have at least one item selected');
        return
      }

      const index = typeof option === 'object'
        ? this.valueKeys.indexOf(option[this.trackBy])
        : this.valueKeys.indexOf(option)

      this.internalValue.splice(index, 1)
      this.$emit('remove', _.cloneDeep(option), this.id)
      this.$emit('input', this.getValue(), this.id)

      /* istanbul ignore else */
      if (this.closeOnSelect) this.deactivate()
    },
    /**
     * Calls this.removeElement() with the last element
     * from this.internalValue (selected element Array)
     *
     * @fires this#removeElement
     */
    removeLastElement () {
      console.log('removeLastElement');

      if (this.blockKeys.indexOf('Delete') !== -1) return

      if (this.search.length === 0 && Array.isArray(this.internalValue)) {
        this.removeElement(this.internalValue[this.internalValue.length - 1])
      }
    },
    /**
     * Opens the multiselect’s dropdown.
     * Sets this.isOpen to TRUE
     */
    activate (event) {
      /* istanbul ignore else */
      if (this.isOpen || this.disabled) return

      /* istanbul ignore else  */
      if (this.groupValues && this.pointer === 0 && this.filteredOptions.length) {
        this.pointer = 1
      }

      this.pointer = null;

      this.isOpen = true;

      window.setTimeout(() => {
        this.isSelectable = true;
      }, 350);

      /* istanbul ignore else  */
      if (this.searchable) {
        this.search = ''
        // this.$refs.search.focus()
        this.$el.focus()
      } else {
        this.$el.focus()
      }
      this.$emit('open', this.id)

      this.style.minWidth = (this.$el.clientWidth - 16) + 'px';

      this.$nextTick(() => {
        this.tether.enable();
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
      this.isSelectable = false
      this.$el.blur()
      this.search = '';
      this.pointer = null;
      this.tether.disable();

      this.$emit('close', this.getValue(), this.id)
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

      let el = this.$el;
      let drop = this.$refs.drop;
      let active = this.$refs.list.getElementsByClassName('-selected')[0];
      let activeOffset = active && !this.multiple ? active.offsetTop + (active.clientHeight / 2) : this.$refs.list.children[0].clientHeight / 2;

      let winHeight = window.innerHeight,
          dim = el.getBoundingClientRect(),
          padTop  = dim.top + (el.clientHeight / 2) - 10,
          padBtm = winHeight - (dim.top + (dim.height / 2)) - 10,
          dropHeight = drop.clientHeight,
          offsetX = 0,
          offsetY = 0;

      offsetY += _.clamp( _.max([activeOffset, dropHeight - padBtm]), 0, _.min([padTop, dropHeight - (dim.height / 2)]));
      let scroll = activeOffset  - offsetY;

      if ( this.pointer === null ) {
        this.$refs.list.scrollTop = scroll;
      }

      this.offsets.y = offsetY;

      this.tether.offset.top = this.offsets.y + 'px';
      this.tether.position();
    },

    selectAll() {
      this.options.forEach( option => {
        if( !this.isSelected(option) ) {
          this.select(option);
        }
      });
      this.deactivate();
    }
  }
}
