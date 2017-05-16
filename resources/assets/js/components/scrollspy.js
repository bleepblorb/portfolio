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
  let data = convertOptions(el.getAttribute('data-spy'));
  let classes = data.class.split(' ') || [];

  if ( type === 'enter' ) {
    classes.forEach( (cls) => {
      el.classList.add(cls);
    })
  }
  else if ( type === 'exit' ) {
    classes.forEach( (cls) => {
      el.classList.remove(cls);
    })
  }
}

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
