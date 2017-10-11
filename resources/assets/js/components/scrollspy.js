/**
 *  ScrollSpy
 *  ---------
 *  Will monitor DOM elements with the 'data-spy-*' attribute and watch for them to
 *  enter / exit. Settings can be passed using the 'data-spy' attribute;
 *
 *  Settings:
 *  - @param {string} class Will add/remove given class. Can provide multiple divided by a space.
 *  - @param {integer} delay Will delay adding class for given milliseconds
 *  - @param {selector} target will act on given targets that are children of object instead
 *
 *  Settings format example: data-spy="class: in-view; delay: 500"
 *
 */


// Load in in-veiw plugin
window.inView = require('in-view');

/**
 * Converts option string into usable data object
 * @param  {string} opts Options string
 * @return {object}      Options as an object
 */
function convertOptions(opts) {
  if ( !typeof opts === 'string' ) {
    return;
  }

  let options = {};

  let items = opts.split(';')
  items.forEach( (item) => {
    let newItem = item.split(':');
    let key =  newItem[0] ? newItem[0].trim().replace(' ', '-') : '';
    let value = newItem[1] ? value = newItem[1].trim() : '';

    key ? options[key] = value : null;
  });

  return options;
}

/**
 * Updates element based on based on settings
 * @param  {DOM} el       DOM element
 * @param  {string} type 'enter' or 'exit' depending on action of item
 * @return {boolean}      True on success
 */
function updateSpyElm(el, type) {

  let options = el.getAttribute('data-spy');
  let classes = ['-inview'];
  let data;

  if (options) {
    data = convertOptions(el.getAttribute('data-spy')) || null;
  }

  if (data && data.class) {
    classes = data.class.split(' ');
  }

  let delay = data ? data.delay : 0;

  if ( type === 'enter' ) {

    if (data && data.target) {
      let targets = data.target == 'child' ? el.children :  el.querySelectorAll(data.target);

      Array.from(targets).forEach( (item, index) => {
        window.setTimeout( () => {
          classes.forEach( (cls) => {
            item.classList.add(cls);
          });
        }, index * delay );
      })
    }
    else {
      window.setTimeout( () => {
        classes.forEach( (cls) => {
          el.classList.add(cls);
        })
      }, delay );
    }

    // if its a video, start it
    if (el.tagName == 'VIDEO') {
      el.play();
    }
  }
  else if ( type === 'exit' ) {
    classes.forEach( (cls) => {
      el.classList.remove(cls);
    })

    // if its a video, pause it
    if (el.tagName == 'VIDEO') {
      el.pause();
    }
  }

  return true;
}

// Setup inVeiew defaults
inView.offset(100);

// watch elements for enter / exit and call updateSpyElm()
document.addEventListener('DOMContentLoaded',function(){

  inView('[data-spy-in]').on( 'enter', el => {
    updateSpyElm(el, 'enter');
  });

  inView('[data-spy-out]').on( 'exit', el => {
    updateSpyElm(el, 'exit');
  });

  inView('[data-spy-in-out]')
    .on( 'enter', el => {
      updateSpyElm(el, 'enter');
    })
    .on( 'exit', el => {
      updateSpyElm(el, 'exit');
    });
});
