<template>
    <div>
        <span ref="trigger" class="popover-link">
          <slot></slot>
        </span>
        <transition name="popover">
          <div
            v-show="showState"
            tabindex="-1"
            :class="['popover',popoverAlignment]"
            ref="popover"
            @focus="$emit('focus')"
            @blur="$emit('blur')"
            :style="popoverStyle"
          >
              <button type="button" name="close" class="close" @click="hidePopover()"></button>
              <h5 class="popover-title" v-if="title" v-html="title"></h5>
              <div class="popover-content">
                  <div class="popover-content-wrapper">
                      <slot name="content"><span v-html="content"></span></slot>
                  </div>
              </div>
          </div>
        </transition>

    </div>
</template>

<script>
    import Tether from 'tether';

    // Controls which events are mapped for each named trigger, and the expected popover behavior for each.
    const triggerListeners = {
        click: {click: 'toggle'},
        hover: {mouseenter: 'show', mouseleave: 'hide'},
        focus: {focus: 'show', blur: 'hide'}
    };

    export default {
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
                default: () => ['click'],
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
            constraints: {
                type: Array,
                default() {
                    return [];
                }
            },
            offset: {
                type: String,
                default: '0 0',
                validator(value) {
                    return /^(\d+\s\d+)$/.test(value);
                }
            },
            delay: {
                type: [Number, Object],
                default: 0,
                validator(value) {
                    if (typeof value === 'number') {
                        return value >= 0;
                    } else if (value !== null && typeof value === 'object') {
                        return typeof value.show === 'number' &&
                            typeof value.hide === 'number' &&
                            value.show >= 0 &&
                            value.hide >= 0;
                    }

                    return false;
                }
            },
            debounce: {
                type: [Number],
                default: 300,
                validator(value) {
                    return value >= 0;
                }
            },
            popoverStyle: {
                type: Object,
                default: null
            },
            closeOnClickOff: {
                type: Boolean,
                default: true
            }
        },

        data() {
            return {
                showState: this.show,
                lastEvent: null
            };
        },

        computed: {
            popoverAlignment() {
                return !this.placement || this.placement === `default` ? `popover-top` : `popover-${this.placement}`;
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

            tetherOptions() {
                return {
                    element: this._popover,
                    target: this._trigger,
                    offset: this.offset,
                    constraints: this.constraints,
                    attachment: this.placementParameters.attachment,
                    targetAttachment: this.placementParameters.targetAttachment
                };
            }
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

        methods: {
          test() {
            alert('clicked');
          },
            /**
             * Display popover and fire event
             */
            showPopover() {

                clearTimeout(this._timeout);

                this._timeout = setTimeout(() => {
                  this._tether.enable();
                  this.showState = true;
                  // Make sure the popup is rendered in the correct location
                  this.refreshPosition();
                  this.$root.$emit('shown::popover');
                }, this.getDelay(true));
            },

            /**
             * Update tether options
             */
            setOptions() {
                if (this._tether) {
                    this._tether.setOptions(this.tetherOptions);
                }
            },

            /**
             * Refresh the Popover position in order to respond to changes
             */
            refreshPosition() {
              console.log('positioning');
                if (this._tether) {
                    this.$nextTick(() => {
                        this._tether.position();
                    });
                }
            },

            /**
             * Hide popover and fire event
             */
            hidePopover() {
                this.showState = false;
                this.$root.$emit('hidden::popover');

                if (this._tether) {
                  this._tether.disable();
                }
            },

            /**
             * Get the currently applicable popover delay
             * @returns Number
             */
            getDelay(state) {
                if (typeof this.delay === 'object') {
                    return state ? this.delay.show : this.delay.hide;
                }

                return this.delay;
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
                // eslint-disable-next-line guard-for-in
                for (const item in triggerListeners[trigger]) {
                    this._trigger.addEventListener(item, e => this.eventHandler(e));
                }
            },

            /**
             * Remove all event hooks for the given trigger
             * @param {String} trigger
             */
            removeListener(trigger) {
                // eslint-disable-next-line guard-for-in
                for (const item in triggerListeners[trigger]) {
                    this._trigger.removeEventListener(item, e => this.eventHandler(e));
                }
            },

            /**
             * Cleanup component listeners
             */
            cleanup() {
                // Remove all event listeners
                // eslint-disable-next-line guard-for-in
                for (const trigger in this.normalizedTriggers) {
                    this.removeListener(trigger);
                }

                clearTimeout(this._timeout);
                this._timeout = null;
                this.hidePopover();
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
        },

        mounted() {
            // Configure tether
            // this._trigger = this.$refs.trigger.children[0];
            console.log(this.$refs.trigger);
            this._trigger = this._trigger = this.$refs.trigger;
            this._popover = this.$refs.popover;
            this._timeout = 0;

            // Let tether do the magic, after element is shown
            this._tether = new Tether(this.tetherOptions);

            // Add listeners for specified triggers and complementary click event
            this.updateListeners(this.normalizedTriggers);

            // Display popover if prop is set on load
            if (this.showState) {
                this.showPopover();
            }

            if ( this.closeOnClickOff && this.normalizedTriggers.indexOf('click' > -1)) {
              document.addEventListener( 'click', (e) => {

                if ( (e.target !== this._popover ) && !this._popover.contains(e.target) && (e.target !== this._trigger) && this.showState ) {
                  this.hidePopover();
                }
              })
            }
        },

        beforeDestroy() {
            this.cleanup();
        }
    };

</script>
