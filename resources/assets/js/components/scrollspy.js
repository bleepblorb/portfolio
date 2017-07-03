window.inView = require('in-view');

function convertOptions(opts) {
  if ( !typeof opts === 'string' ) {
    return;
  }

  let options = {}

  let items = opts.split(';')

  items.forEach( (item) => {
    let newItem = item.split(':');
    let key =  newItem[0] ? newItem[0].trim().replace(' ', '-') : '';
    let value = newItem[1] ? value = newItem[1].trim() : '';

    key ? options[key] = value : null;
  });

  return options;
}

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
  }
  else if ( type === 'exit' ) {
    classes.forEach( (cls) => {
      el.classList.remove(cls);
    })
  }
}

// Setup inVeiew defaults
inView.offset(100);

document.addEventListener('DOMContentLoaded',function(){

  Array.from(document.querySelectorAll('[data-spy-in]')).forEach( item => {
    item.style.visiblity = 'hidden';
  })

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
