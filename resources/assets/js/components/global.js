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

// Hint
import hint from './hint.vue';
Vue.component('hint', hint);

// Icons
import icon from './icon.vue';
Vue.component('icon', icon);

// Popover
import popover from './popover.vue';
Vue.component('popover', popover);

// Dropdown
import dropdown from './dropdown.vue';
Vue.component('dropdown', dropdown);

// Toggler
import toggler from './toggler.vue';
Vue.component('toggler', toggler);


export {store};
