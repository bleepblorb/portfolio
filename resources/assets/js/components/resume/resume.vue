<template>
  <div id="resume" :class="{'edit-mode' : editMode, 'preview-mode' : state.previewMode}">
    <transition name="intro">
      <resume-intro v-show="state.showIntro" key="intro"></resume-intro>
    </transition>
    <transition name="edit-mode">
      <div v-show="editMode" class="resume__editor-mode">
        <div class="preview-toggle">
          <div class="preview-toggle__btn" @click="togglePreview()">
            <span class="i--arrow"></span>
          </div>
        </div>
        <resume-editor :schema="schema"></resume-editor>
        <resume-content :schema="schema"></resume-content>
        <div class="close-btn" @click="closeEditor(!isComplete)">close <button  v-if="editMode" class="close"></button></div>
      </div>
    </transition>

    <transition name="edit-mode">
      <resume-layout  v-show="!state.showIntro && state.isComplete"></resume-layout>
    </transition>

    <transition>
      <div class="sidebar" v-show="!state.showIntro && !state.editMode && state.isComplete">
        <popover position="right" content="Start Over" triggers="hover" :delay="800">
          <button @click="reset(true)" class="btn -link edit-btn"><icon name="delete"></icon></button>
        </popover>
        <popover ref="editPopover" position="right" title="Instant Regret?" content="I can’t give you back all the time you’ve just wasted, but you can go back and make edits anytime!" :closeOnClickOff="false" :trigger="false">
          <button @click="toggle()" class="edit-btn btn -link"><icon name="edit"></icon></button>
        </popover>
      </div>
    </transition>

    <modal id="modal-close" confirmation ok-title="Yeah, Don't Care" close-title="Fine, I'll do it." size="sm" @ok="closeEditor()">
      <div class="p-3">
        <h3 class="c--jazzy">But, you aren't finished yet...</h3>
        <p class="t--sans">I'll have to finish the rest of the resume for you</p>
      </div>
    </modal>

    <modal id="modal-reset" confirmation ok-title="Yes, please" close-title="Nevermind" size="sm" @ok="reset()">
      <div class="p-3">
        <h3 class="c--jazzy">Are you sure?</h3>
        <p class="t--sans">Just checking, because this will erase all the things.</p>
        <h6 class="c--gray">... no do-overs</h6>
      </div>
    </modal>

    <modal id="modal-tour" confirmation ok-title="•sigh• Alright" close-title="Veto" size="sm" @ok="startTour()" @cancel="skipTour()">
      <div class="p-3">
        <h3 class="c--jazzy">Welcome</h3>
        <p class="t--sans">Thank you for taking the time to create the perfect resume. Let's just take a quick tour.</p>
      </div>
    </modal>

  </div>
</template>

<script>

require('../../bootstrap')


import {store} from '../global.js';
import {schema} from './schema.js';
import resumeEditor from './resumeEditor';
import resumeContent from './resumeContent';
import resumeLayout from './resumeLayout';
import resumeIntro from './resumeIntro';
import modal from '../modal.vue';

store.resume.state = {
  currentStep : 1,
  currentPhase: 0,
  furthestAllowed : 0,
  completedSteps : 0,
  totalSteps : 0,
  direction : '',
  isComplete : false,
  showIntro : false,
  editMode : false,
  previewMode : false,
  readerMode : false,
  tourComplete : false,
};

store.resume.model = {
  intro : {
    introStyle : '',
    personal : [],
    togglerPoem : {
      index : 0,
      value : ''
    },
    togglerIntro : {
      index : 0,
      value : ''
    },
    togglerElevator : {
      index : 0,
      value : '',
      options : []
    }
  },
  portrait : {
    expression : '',
    facialHair : '',
    attire : '',
    hands : '',
    background : '',
  },
  portraitUrls : {},
  about : {
    manifesto : [],
  },
  past : {
    format : '',
  },
  present : {
    skills : [],
  }
};

export default {
  components : {
    resumeEditor, resumeContent, resumeLayout, resumeIntro, modal
  },

  data() {
    return {
      state : store.resume.state,
      model : store.resume.model,
      schema : schema,
    }
  },

  computed :{
    isComplete() {
      return this.state.completedSteps == this.state.totalSteps ? true : false;
    },
    totalSteps() {
      let count = 0;

      _.forEach(this.schema.phases, (phase) => {
        count += phase.steps.length;
      });

      return count;
    },
    furthestAllowed() {
      return _.min([this.state.completedSteps + 1, this.state.totalSteps]);
    },
    editMode() {
      return this.state.editMode;
    }
  },

  watch : {
    isComplete(newVal) {
      this.state.isComplete = newVal;

      if ( newVal ) {
        console.log('iscompleteChange');
        // this.$refs.editPopover.$emit('show::popover');
      }
    },
    'state.isComplete' : function(val) {
      console.log('state change', val)
    },
    furthestAllowed() {
      this.state.furthestAllowed = this.furthestAllowed;
    },
    editMode(newVal) {
      newVal ? Event.$emit('hideMenu') : Event.$emit('showMenu');

      if ( !this.state.tourComplete ) {
        Event.$emit( 'show::modal', 'modal-tour' );
      }

      history.replaceState("", document.title, '/resume');


      this.$nextTick(() => {
        if (newVal) {
          document.querySelector('body').classList.add('edit');
        } else {
          document.querySelector('body').classList.remove('edit');
        }
      })
    },
    model : {
      handler() {
        this.save();
      },
      deep : true
    },
    state : {
      handler() {
        this.save();
      },
      deep : true
    }
  },

  methods : {

    openEditor() {

      if ( this.state.editMode ) {
        return;
      }

      this.state.currentPhase = 'toc';
      this.state.currentStep = -1;
      this.state.direction = 'next';
      this.state.editMode = true;
    },

    closeEditor(confirm = false) {

      if ( !this.state.editMode ) {
        return;
      }

      if ( confirm ) {

        Event.$emit( 'show::modal', 'modal-close' );

      } else {


        if ( !this.isComplete ) {
          this.setDefault();
        }

        this.state.editMode = false;
        window.setTimeout( () => {
          this.state.currentPhase = 'toc';
          this.state.previewMode = false;
        }, 850)
      }
    },

    open() {
      axios.get('/api/resume/open')
      .then(response => {
        console.log("opening", response )
        _.forEach(response.data.model, (item, key) => {
          store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
        });

        _.forEach(response.data.state, (item, key) => {
          // store.resume.state[key] = Object.assign({}, store.resume.state[key], item );
          store.resume.state[key] = item;
          // console.log(item, key);
        });

        console.log('Opened Saved data', response);
      })
      .catch((error) => {
        this.new();
      });
    },

    new() {
      axios.get('/api/resume/new')
      .then(response => {
        console.log('Set New', response );

        _.forEach(response.data.model, (item, key) => {
          store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
        });

        _.forEach(response.data.state, (item, key) => {
          store.resume.state[key] = item;
        });

        this.state.showIntro = true;
      })
      .catch(function (error) {
        console.log(error);
      });
    },

    save() {

      clearTimeout(this._saveTimer);

      this._saveTimer = window.setTimeout( () => {
        console.log('saving', this.model, this.state);
        axios.patch('/api/resume/', {
          model : this.model,
          state : this.state
        })
        .then(response => {
          console.log('Saved', response);
        })
        .catch(function (error) {
          console.log(error);
        });
      }, 200);
    },

    reset(confirm = false) {

      if ( confirm ) {
        Event.$emit( 'show::modal', 'modal-reset' );
      }
      else {
        console.log('Resetting');
        history.replaceState("", document.title, '/resume');
        this.new();

        Event.$emit('reset');
      }
    },

    toggle() {
      Event.$emit('toggleEditMode');
    },

    togglePreview() {
      Event.$emit('togglePreviewMode');
    },

    setPreview(bool) {
      console.log(bool);
      if ( (bool && !this.state.previewMode) || (!bool && this.state.previewMode) ) {
        Event.$emit('togglePreviewMode');
      }
    },

    setDefault(data = true) {
      console.log('Set Default', data);

      axios.post('/api/resume/default', {
        model : data ? this.model : []
      })
      .then(response => {
        _.forEach(response.data, (item, key) => {
          store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
        });

        Event.$emit('setComplete');
      })
      .catch(function (error) {
        console.log(error);
      });
    },

    startTour() {
      this._editorTour.start();
    },

    skipTour() {
      this._editorTour.complete();
    },
  },

  beforeCreate() {
  },

  created() {

    let params = window.location.pathname.split( '/' );
    this._saveTimer;

    if ( params[2] == 'default' ) {
      this.setDefault(false);
    }
    else {
      this.open();
    }

    this.state.totalSteps = this.totalSteps;

    Event.$on('updateModel', (phase, step, value) => {
      this.$set(this.model[phase], step, value);
      console.log("updating " + phase +"->" + step + " to " + value);
    });

    Event.$on('toggleEditMode', () => {
      this.state.editMode ? this.closeEditor() : this.openEditor();
    });

    Event.$on('stepComplete', (step) => {
      console.log(step, this.state.completedSteps);
      if ( step > this.state.completedSteps ) {
        this.state.completedSteps = step;
      }
    });

    Event.$on('togglePreviewMode', () => {
      this.state.previewMode = !this.state.previewMode;
    });

    Event.$on('setPreviewMode', (bool) => {
      this.state.previewMode = bool;
    });

    Event.$on('setDefault', (data) => {
      this.setDefault(data);
    });

    Event.$on('setComplete', () => {
      console.log('Event: setComplete');
      this.state.showIntro = false;
      this.state.isComplete = true;
      this.state.completedSteps = this.state.totalSteps;

      console.log('isComplete:', this.state.isComplete);
    });

    Event.$on('closeEdit', (confirm = false) => {
      console.log('closeEditor');
      this.closeEditor(confirm);
    });

    //
    // Editor Tour
    this._editorTour = new Shepherd.Tour({
      defaults : {
        classes : 'popover',
        tetherOptions : {
          classPrefix: 'popup',
          optimizations: {
            // gpu: false
          }
        },
      }
    });

    this._editorTour.addStep('editor', {
      text : "This the editor pane. You just have to answer a few questions.",
      attachTo : ".editor__question top"
    });

    this._editorTour.addStep('navigation', {
      text : "This is the nav",
      attachTo : ".editor__nav top"
    });

    this._editorTour.addStep('moreNav', {
      text : "This is also some nav",
      attachTo : ".editor__phase__dots bottom",
    });

    this._editorTour.addStep('preview-toggle', {
      title : "Preview Toggle",
      text : "This button will toggle the preview mode (on smaller screens)",
      attachTo : ".preview-toggle__btn left",
      when : {
        'before-show' : function() {
          let toggle = document.querySelector('.preview-toggle__btn');
          toggle.style.display = 'flex';
          toggle.style.opacity = '1';
        },
        hide : function() {
          let toggle = document.querySelector('.preview-toggle__btn');
          toggle.style = '';
        }
      }
    });

    this._editorTour.addStep('preview', {
      title : "Preview Area",
      text : "This is the preview area. You can preview your answers, and sometimes make further edits.",
      attachTo : ".preview__phase top",
      when : {
        'before-show' : function() {
          Event.$emit('setPreviewMode', true);
        },
        show : function() {
          this.el.classList.remove('shepherd-open');
          window.setTimeout(()=> {
            this.el.classList.add('shepherd-open');
            this.tether.position();
          }, 650);
        }
      }
    });

    this._editorTour.addStep('toggler', {
      title : "Get the perfect wording",
      text : "Underlied areas allow you to toggle through wording options. <strong>Try it out</strong>",
      attachTo : "#phase__intro.toggler top",
      advanceOn : {selector: '.toggler', event: 'click'},
      buttons : false
    });

    this._editorTour.addStep('toggler-response', {
      title : "Sweet, looking good",
      attachTo : ".toggler top",
      when : {
        hide : function() {
          Event.$emit('setPreviewMode', false);
        }
      }
    });

    this._editorTour.addStep('done', {
      title : "Done",
      text : "I think you are ready to tackle it on your own, young padawan",
      buttons : [
        {
          text : 'Finish',
          action : this._editorTour.complete
        }
      ]
    });

    this._editorTour.on('complete', () => {
      this.state.tourComplete = true;
    });
  }
}
</script>
