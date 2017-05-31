<template>
  <span class="popover">
    <span ref="target" class="popover__link" @click="onClick">
      <slot></slot>
    </span>
          <popup
            class="popover__drop"
            :show="showState"
            :target="target"
            :position="position"
            :delay="delayEdited"
            ref="menu"
            arrow="nub"
            @focus="$emit('focus')"
            @blur="$emit('blur')"
          >
            <div class="popover__drop-wrap">
              <div class="nub"></div>
              <button type="button" name="close" class="close" @click="hidePopover()" v-if="triggers == 'click'"></button>
              <h5 class="popover__title" v-if="title" v-html="title"></h5>
              <div class="popover__content">
                <div v-html="content"></div>
              </div>
            </div>
          </popup>

  </span>
</template>

<script>
    import popup from './popup';
    import clickout from '../mixins/clickout';

    // Controls which events are mapped for each named trigger, and the expected popover behavior for each.
    const triggerListeners = {
        click: {click: 'toggle'},
        hover: {mouseenter: 'show', mouseleave: 'hide'},
        focus: {focus: 'show', blur: 'hide'}
    };

    export default {
      components : { popup },
      mixins : [clickout],
      props: {
        placement: {
          type: String,
          default: 'top',
          validator(value) {
              return ['top', 'bottom', 'left', 'right'].indexOf(value) !== -1;
          }
        },
        triggers: {
          type: [Boolean, String, Array],
          default: () => 'hover',
          validator(value) {
            // Allow falsy value to disable all event triggers (equivalent to 'manual') in Bootstrap 4
            if (value === false || value === '') {
              return true;
            } else if (typeof value === 'string') {
              return Object.keys(triggerListeners).indexOf(value) !== -1;
            } else if (Array.isArray(value)) {
              const keys = Object.keys(triggerListeners);
              value.forEach(item => {
                if (keys.indexOf(item) === -1) {
                  return false;
                }
              });
              return true;
            }
            return false;
          }
        },

        title: {
            type: String,
            default: ''
        },

        content: {
            type: String,
            default: ''
        },

        show: {
            type: Boolean,
            default: false
        },

        position : {
          type : String,
          default : 'top'
        },

        offset: {
            type: String,
            default: '0 0',
            validator(value) {
                return /^(\d+\s\d+)$/.test(value);
            }
        },
        delay: {
            type: [Number, Array],
            default: null,
            validator(value) {
              if (typeof value === 'number') {
                return value >= 0;
              } else if (value !== null && typeof value === 'array') {
                return typeof value[0] === 'number' &&
                  typeof value[1] === 'number' &&
                  value[0] >= 0 &&
                  value[1] >= 0;
              }
              return false;
            }
        },

        popoverStyle: {
            type: Object,
            default: null
        },
        /**
         * Close popover on click off
         * @type {boolean}
         * @default {true}
         */
        clickOff: {
            type: Boolean,
            default: true
        }
    },

    data() {
      return {
        showState: this.show,
        lastEvent: null,
        target : null,
      };
    },

    computed: {
      delayEdited() {
        if ( this.delay == null ) {
          return this.normalizedTriggers.indexOf('hover') > -1 ? [100, 0] : 0;
        }
        else {
          return this.delay;
        }
      },

      normalizedTriggers() {
        if (this.triggers === false) {
          return [];
        } else if (typeof this.triggers === 'string') {
          return [this.triggers];
        }
        return this.triggers;
      },

      placementParameters() {
        switch (this.placement) {
          case 'bottom':
            return {
              attachment: 'top center',
              targetAttachment: 'bottom center'
            };
          case 'left':
            return {
              attachment: 'middle right',
              targetAttachment: 'middle left'
            };
          case 'right':
            return {
              attachment: 'middle left',
              targetAttachment: 'middle right'
            };
          default:
            return {
              attachment: 'bottom center',
              targetAttachment: 'top center'
            };
        }
      },

        useDebounce() {
          return this.normalizedTriggers.length > 1;
        },
    },

    watch: {
      /**
       * Propagate 'show' property change
       * @param  {Boolean} newShow
       */
      show(newShow) {
          this.showState = newShow;
      },

      normalizedTriggers(newTriggers, oldTriggers) {
          this.updateListeners(newTriggers, oldTriggers);
      },

      placement() {
          this.setOptions();
      },

      offset() {
          this.setOptions();
      },

      constraints() {
          this.setOptions();
      },

      content() {
          this.refreshPosition();
      },

      title() {
          this.refreshPosition();
      }
    },

    created() {
      const hub = this.$root;

      hub.$on('hide::popover', () => {
          this.showState = false;
      });

      hub.$on('hide::modal', () => {
          this.cleanup();
      });

      this.$on('show::popover', () => {
        this.showPopover();
      });
    },

    mounted() {
      this._trigger = this.$refs.target;
      this.target = this.getTarget();
      this._timeout = 0;

      // Add listeners for specified triggers and complementary click event
      this.updateListeners(this.normalizedTriggers);

      // Display popover if prop is set on load
      if (this.showState) {
        this.showPopover();
      }
    },

    beforeDestroy() {
      this.cleanup();
    },

    methods: {

      onClick(e) {
        if ( this.normalizedTriggers.indexOf('click') > -1 ) {
          e.preventDefault();
        }
      },

      getTarget() {
        return this.$refs.target;
      },
      /**
       * Display popover and fire event
       */
      showPopover() {
          this.showState = true;
          this.$root.$emit('shown::popover');
        },

      /**
       * Hide popover and fire event
       */
      hidePopover() {
          this.showState = false;
          this.$root.$emit('hidden::popover');
      },


      /**
       * Handle multiple event triggers
       * @param  {Object} e
       */
      eventHandler(e) {
        // If this event is right after a previous successful event, ignore it
        if (this.useDebounce && this.debounce > 0 && this.lastEvent !== null && e.timeStamp <= this.lastEvent + this.debounce) {
          return;
        }

        // Look up the expected popover action for the event
        // eslint-disable-next-line guard-for-in
        for (const trigger in triggerListeners) {
          for (const event in triggerListeners[trigger]) {
            if (event === e.type) {
              const action = triggerListeners[trigger][event];

              // If the expected event action is the opposite of the current state, allow it
              if (action === 'toggle' || (this.showState && action === 'hide') || (!this.showState && action === 'show')) {
                this.showState ? this.hidePopover() : this.showPopover();
                this.lastEvent = e.timeStamp;
              }
              return;
            }
          }
        }
      },

      /**
       * Study the 'triggers' component property and apply all selected triggers
       * @param {Array} triggers
       * @param {Array} appliedTriggers
       */
      updateListeners(triggers, appliedTriggers = []) {
        const newTriggers = [];
        const removeTriggers = [];

        // Look for new events not yet mapped (all of them on first load)
        triggers.forEach(item => {
          if (appliedTriggers.indexOf(item) === -1) {
            newTriggers.push(item);
          }
        });

        // Disable any removed event triggers
        appliedTriggers.forEach(item => {
          if (triggers.indexOf(item) === -1) {
            removeTriggers.push(item);
          }
        });

        // Apply trigger mapping changes
        newTriggers.forEach(item => this.addListener(item));
        removeTriggers.forEach(item => this.removeListener(item));
      },

      /**
       * Add all event hooks for the given trigger
       * @param {String} trigger
       */
      addListener(trigger) {
        for (const item in triggerListeners[trigger]) {
          this._trigger.addEventListener(item, e => this.eventHandler(e));
        }
      },

      /**
       * Remove all event hooks for the given trigger
       * @param {String} trigger
       */
      removeListener(trigger) {
        for (const item in triggerListeners[trigger]) {
          this._trigger.removeEventListener(item, e => this.eventHandler(e));
        }
      },

      /**
       * Cleanup component listeners
       */
      cleanup() {
        // Remove all event listeners
        for (const trigger in this.normalizedTriggers) {
          this.removeListener(trigger);
        }

        this.hidePopover();
      },

      clickOutListener() {
        if ( this.clickOff && this.normalizedTriggers.indexOf('click') > -1 ) {
          this.hidePopover();
        }
      },
  }
};

</script>
