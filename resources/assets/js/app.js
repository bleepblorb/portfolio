
require('./bootstrap');

import {store} from './components/global.js';
import resume from './components/resume/resume';


// Setup a global event component for passing events to/from components
window.Event = new Vue();

const app = new Vue ({
  el: '#app',

  components : {
    resume,
  },

  data : {
    state : store.state
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
 * Framework Dependancies
 */
 require('./components/scrollspy');
 require('./components/image-loader');

