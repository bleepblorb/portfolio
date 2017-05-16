
window._ = require('lodash');
window.Tether = require('tether');
window.Shepherd = require('./components/shepherd.js');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// window.$ = window.jQuery = require('jquery');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

window.Blazy = require('./components/image-loader');
require('./components/scrollspy');

(function() {
    // Initialize
    var bLazy = new Blazy({
      selector : '[data-image-load]',
      successClass : '-loaded',
      breakpoints : [
        {
          width: 576,
          src: 'data-src-sm'
        },
        {
          width: 768,
          src: 'data-src-md'
        },
        {
          width: 992,
          src: 'data-src-lg'
        },
        {
          width: 1200,
          src: 'data-src-xl'
        },

      ]
    });
})();
