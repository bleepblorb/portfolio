<template>
  <div>
      <span ref="trigger"><slot></slot></span>

      <div
        v-show="showState"
        tabindex="-1"
        :class="['popover',popoverAlignment]"
        ref="popover"
        @focus="$emit('focus')"
        @blur="$emit('blur')" :style="popoverStyle"
      >
          <button type="button" name="close" class="close" @click="hidePopover()"></button>
          <h3 class="popover-title" v-if="title" v-html="title"></h3>
          <div class="popover-content">
              <div class="popover-content-wrapper">
                  <slot name="content"><span v-html="content"></span></slot>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
  import popover from './popover.vue';

  export default {

    mixins : [
      popover
    ],

    created() {
      this.$on('show::popover', () => {
        this.showPopover();
      });
    }
  }

</script>
