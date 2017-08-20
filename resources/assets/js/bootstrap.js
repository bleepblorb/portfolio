
/**
 * Vue.js - base js framework
 */

window.Vue = require('vue');


/**
 * Lodash utility library
 */

window._ = require('lodash');

/**
 * Tether is used for placing popups and tooltips
 */

window.Tether = require('tether');


/**
 * Shephered is used for making walkthrough / tours.
 * It is used on the resume page
 */

window.Shepherd = require('tether-shepherd');


/**
 * Velocity animation library
 */

window.Velocity = require('velocity-animate');


/**
 * axios HTTP library.This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};


/**
 * Blazy is a lazy loading library. I've modified it to work as my general
 * image loading system
 */

// window.Blazy = require('./components/image-loader');


/**
 * Cssuseragent determines browser details
 */

require('cssuseragent');
