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

// Popover
import popover from './popover.vue';
Vue.component('popover', popover);

// Hint
import hint from './hint.vue';
Vue.component('hint', hint);

// Icons
import icon from './icon.vue';
Vue.component('icon', icon);



export {store};
