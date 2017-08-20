// Modified from https://github.com/monterail/vue-multiselect

<template>
  <div
    @focus="activate()"
    @blur="deactivate()"
    @keydown.self.down.prevent="pointerForward()"
    @keydown.self.up.prevent="pointerBackward()"
    @keydown.enter.tab.stop.self="addPointerElement()"
    @keypress.self="updateSearch($event)"
    @keyup.esc="deactivate()"
    :class="classList"
    tabindex="0"
    class="select"
  >
    <slot name="carret">
      <div class="select__selector"></div>
    </slot>

    <div ref="tags" class="select__tags">
      <span
        v-for="option of visibleValue"
        @keydown.enter.prevent="removeElement(option)"
        @click.prevent="removeElement(option)"
        v-text="getOptionLabel(option)"
        tabindex="1"
        class="select__tag">
      </span>

      <template v-if="internalValue && internalValue.length > limit">
        <strong v-text="limitText(internalValue.length - limit)"></strong>
      </template>

      <transition name="select__loading">
        <slot name="loading"><div v-show="loading" class="select__spinner"></div></slot>
      </transition>

      <span
        v-if="(internalValue.length == 0)"
        class="select__placeholder"
        v-text="placeholder">
      </span>

      <span
        v-else-if="!multiple"
        class="select__single"
        v-text="currentOptionLabel">
      </span>
    </div>

    <transition name="select">
      <div class="select__drop" :class="classList" ref="drop" v-show="isOpen">
        <div class="select__drop-wrap" :style="style">
          <ul ref="list" class="select__content">

            <slot name="beforeList"></slot>

            <li v-if="multiple && max === internalValue.length">
              <span class="select__option">
                <slot name="maxElements">
                  Maximum of {{ max }} options selected. First remove a selected option to select another.
                </slot>
              </span>
            </li>

            <template v-if="!max || internalValue.length < max">
              <li
                v-for="(option, index) of filteredOptions"
                :key="index"
                :class="optionHighlight(index, option)"
                class="select__element"
              >
                <span
                  tabindex="0"
                  @mousedown.prevent=""
                  @mouseup.prevent="select(option)"
                  @mouseenter="pointerSetIndex(index)"
                  class="select__option">
                    <slot name="option" :option="option">
                      {{ getOptionLabel(option) }}
                    </slot>
                </span>
              </li>
              <li
                v-if="multiple && addSelectAll"
                @mousedown.prevent=""
                @mouseup.prevent="selectAll()"
              >
                <span class="select__option">Select All</span>
              </li>
            </template>

            <slot name="afterList"></slot>

          </ul>
        </div>
      </div>
    </transition>

  </div>
</template>

<script>
  import selectMixin from './selectMixin'
  import pointerMixin from './pointerMixin'

  export default {
    mixins: [selectMixin, pointerMixin],
    props: {

      /**
       * Limit the display of selected options. The rest will be hidden within the limitText string.
       * @default 'label'
       * @type {String}
       */
      limit: {
        type: Number,
        default: 99999
      },
      /**
       * Sets maxHeight style value of the dropdown
       * @default 300
       * @type {Integer}
       */
      maxHeight: {
        type: Number,
        default: 300
      },
      /**
       * Function that process the message shown when selected
       * elements pass the defined limit.
       * @default 'and * more'
       * @param {Int} count Number of elements more than limit
       * @type {Function}
       */
      limitText: {
        type: Function,
        default: count => `and ${count} more`
      },
      /**
       * Set true to trigger the loading spinner.
       * @default False
       * @type {Boolean}
      */
      loading: {
        type: Boolean,
        default: false
      },
      /**
       * Disables the multiselect if true.
       * @default false
       * @type {Boolean}
      */
      disabled: {
        type: Boolean,
        default: false
      }
    },
    computed: {
      visibleValue () {
        return this.multiple
          ? this.internalValue.slice(0, this.limit)
          : []
      },
      classList () {
        return {
          '-active': this.isOpen,
          '-disabled': this.disabled,
          '-overflow-top' : this.overflow.top,
          '-overflow-btm' : this.overflow.bottom
        }
      }
    }
  }
</script>
