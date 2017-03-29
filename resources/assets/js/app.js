
require('./bootstrap');

import resume from './components/resume/resume';
import multiselect from './components/multiselect';

window.Event = new Vue();


const app = new Vue ({
  el: '#app',

  data : {
  },

  components : {
    resume, multiselect
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
