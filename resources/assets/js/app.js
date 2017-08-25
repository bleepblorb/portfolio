
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

    // ** Old browser Warning
    // set an initial sessionstorage value if one is already set
    if(Modernizr.sessionstorage && !sessionStorage.getItem('warningHidden')){
      sessionStorage.setItem('warningHidden', false);
    }
    // set value to true once dismissed
    Event.$on('hidden::modal', (id) => {
      if ( id == 'globalMessage' ) {
        sessionStorage.setItem('warningHidden', true);   
      }
    });
  },
  mounted() {
    
    // Launching Old browser Warning
    let failed = false;

    _.forEach(Modernizr, (test) => {
      if( test == true ) {
        failed = true;
      }
    });

    console.log();

    if( failed && (sessionStorage.getItem('warningHidden') == 'false')) {
      Event.$emit('show::modal', 'globalMessage');
    }
  }
});



/**
 * Framework Dependancies
 */
 require('./components/scrollspy');
 require('./components/image-loader');


