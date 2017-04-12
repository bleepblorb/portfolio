window.store = {
  resume : {},
  state : {
    showMenu : true
  }
};

window.Vue = require('vue');

import popover from './popover.vue';
Vue.component('popover', popover);

import hint from './hint.vue';
Vue.component('hint', hint);

export {store};
