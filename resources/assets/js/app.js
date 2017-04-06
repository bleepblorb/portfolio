
require('./bootstrap');

import resume from './components/resume/resume';
import multiselect from './components/multiselect';
import modal from './components/modal.vue';

window.Event = new Vue();


const app = new Vue ({
  el: '#app',

  data : {
  },

  components : {
    resume,
    multiselect,
    modal,
  },

  methods : {
    Emit(name, ...args) {
      Event.$emit(name, ...args);
    }
  }
});




/**
 * Tether (required by bootstrap)
 */

// window.Tether = require('tether');


/**
 * Framework Dependancies
 */
// require('./components/alert');
// require('./components/button');
// require('./components/carousel');
// require('./components/collapse');
// require('./components/dropdown');
// require('./components/modal');
// require('./components/popover');
// require('./components/scrollspy');
// require('./components/tab');
// require('./components/tooltip');
// require('./components/util');
