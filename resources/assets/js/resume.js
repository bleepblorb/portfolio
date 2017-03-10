/**
 * jquery
 */

import Vue from 'vue';
import resumeEditor from './components/resumeEditor';
import resumeStep from './components/resumeStep';
import radialGroup from './components/radialGroup';


const resume = new Vue ({

  el: '#resume',

  components : {
    resumeEditor, resumeStep, radialGroup
  },

  data : {
    editMode : false,
    model: {
      intro : 'value 1',
    },
    intro : [
      {
        text : "option 1",
        value : "value 1"
      },
      {
        text : "option 2",
        value : "value 2"
      },
      {
        text : "option 3",
        value : "value 3"
      }
    ]
  },

  created() {
    Event.$on('updateModel', (name, value) => {
      this.model[name] = value;
      console.log("updating", name, value);
    });
  }
})


$('.edit-btn').on('click', function() {
    resume.editMode = !resume.editMode;
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
