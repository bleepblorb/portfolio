<template>
  <transition
    name="modal"
    v-on:after-enter="onEntered()"
    v-on:after-leave="onHidden()"
  >
    <div
      key="modal"
      :id="id"
      v-show="visible"
      :class="['modal',{fade :fade, show : visible}]"
      @click="onClickOut($event)"
    >

    <div :class="['modal__dialog']">
      <div class="modal__content" @click.stop="" :class="['-max--'+size]">

        <div class="modal__header" v-if="this.$slots['modal-footer'] || this.$slots['modal-title'] || this.title">
          <slot name="modal__header">
            <h5 class="modal__title">
              <slot name="modal-title">{{title}}</slot>
            </h5>
          </slot>
        </div>

        <div class="modal__body">
          <slot></slot>
        </div>

        <div class="modal__footer" v-if="confirmation">
          <slot name="modal-footer">
            <button class="btn btn-link -align-self--start"  @click="hide(false)">{{closeTitle}}</button>
            <button class="btn btn-primary" @click="hide(true)">{{okTitle}}</button>
          </slot>
        </div>
        <div class="modal__footer" v-else-if="this.$slots['modal-footer']">
          <slot name="modal-footer"></slot>
        </div>

        <button type="button" class="close" aria-label="Close" @click="hide()"></button>

      </div>
    </div>
  </div>
  <!-- </transition-group> -->
</template>


<script>
    export default {
        data() {
            return {
                visible: false,
            };
        },
        computed: {
            body() {
                if (typeof document !== 'undefined') {
                    return document.querySelector('body');
                }
            }
        },
        props: {
            id: {
                type: String,
                default: null
            },
            title: {
                type: String,
                default: ''
            },
            // Options: 'xl', 'lg', 'md', 'sm'
            size: {
                type: String,
                default: 'md'
            },
            fade: {
                type: Boolean,
                default: true
            },
            closeTitle: {
                type: String,
                default: 'Close'
            },
            okTitle: {
                type: String,
                default: 'OK'
            },
            closeOnBackdrop: {
                type: Boolean,
                default: true
            },
            hideHeader: {
                type: Boolean,
                default: false
            },
            hideFooter: {
                type: Boolean,
                default: false
            },
            confirmation: {
                type: Boolean,
                default: false
            },
        },
        methods: {
            show() {
                if (this.visible) {
                    return;
                }
                this.visible = true;
                this.body.classList.add('modal-open');
                this.$emit('shown');
            },
            hide(isOK) {
                if (!this.visible) {
                    return;
                }
                this.visible = false;
                this.body.classList.remove('modal-open');

                this.$emit('hidden', isOK);

                if (isOK === true) {
                    this.$emit('ok');
                } else if (isOK === false) {
                    this.$emit('cancel');
                }
            },
            onClickOut(e) {
                // If backdrop clicked, hide modal
                if (this.closeOnBackdrop) {
                  this.hide();
                }
            },
            pressedButton(e) {
                // If not visible don't do anything
                if (!this.visible) {
                    return;
                }

                // Support for esc key press
                const key = e.which || e.keyCode;
                if (key === 27) { // 27 is esc
                    this.hide();
                }
            },
            onEntered() {
              Event.$emit('shown::modal', this.id);
              this.$emit('shown');
            },
            onHidden() {
              Event.$emit('hidden::modal', this.id);
              this.$emit('hidden');
            }
        },
        created() {
            Event.$on('show::modal', id => {
                if (id === this.id) {
                    this.show();
                }
            });

            Event.$on('hide::modal', id => {
                if (id === this.id) {
                    this.hide();
                }
            });
        },
        mounted() {
            if (typeof document !== 'undefined') {
                document.addEventListener('keydown', this.pressedButton);
            }
        },
        destroyed() {
            if (typeof document !== 'undefined') {
                document.removeEventListener('keydown', this.pressedButton);
            }
        }
    };

</script>
