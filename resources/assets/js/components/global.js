window.store = {
  resume : {},
  state : {
    showMenu : true
  }
};

window.Vue = require('vue');

// Alert
import alert from './alert.vue';
Vue.component('alert', alert);

// Button
import vButton from './button.vue';
Vue.component('v-button', vButton);

// Checkbox Group
import checkboxGroup from './checkboxGroup';
Vue.component('checkbox-group', checkboxGroup);

// Dropdown
import dropdown from './dropdown.vue';
Vue.component('dropdown', dropdown);

// Icons
import icon from './icon.vue';
Vue.component('icon', icon);

// Modal
import modal from './modal.vue';
Vue.component('modal', modal);

// Popover
import popover from './popover.vue';
Vue.component('popover', popover);

// Radial Group
import radialGroup from './radialGroup.vue';
Vue.component('radial-group', radialGroup);

// Revealer
import revealer from './revealer.vue';
Vue.component('revealer', revealer);

// Select
import vSelect from './select.vue';
Vue.component('v-select', vSelect);

// Slider Input
import sliderInput from './sliderInput';
Vue.component('slider-input', sliderInput);

// Toggler
import toggler from './toggler.vue';
Vue.component('toggler', toggler);

// Carousel
Vue.component('carousel', require('./carousel'));

export {store};
