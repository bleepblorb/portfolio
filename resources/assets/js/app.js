
require('./bootstrap');

import {store} from './components/global.js';
import resume from './components/resume/resume';
import multiselect from './components/multiselect';
import modal from './components/modal.vue';

window.Event = new Vue();


const app = new Vue ({
  el: '#app',

  data : {
    state : store.state
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
  },

  created() {
    Event.$on('hideMenu', () => {
      this.state.showMenu = false;
    });
    Event.$on('showMenu', () => {
      this.state.showMenu = true;
    });
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
