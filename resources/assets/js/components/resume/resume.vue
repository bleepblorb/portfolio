<template>
  <div id="resume" :class="{'edit-mode' : state.editMode, 'preview-mode' : state.previewMode}">
    <transition name="intro">
      <resume-intro v-show="state.showIntro" key="intro"></resume-intro>
    </transition>
    <transition name="edit-mode">
      <div v-show="state.editMode" class="resume__editor-mode">
        <div class="preview-toggle">
          <div class="preview-toggle__btn" @click="togglePreview()">
            <span class="i--arrow"></span>
          </div>
        </div>
        <resume-editor :schema="schema"></resume-editor>
        <resume-content :schema="schema"></resume-content>
        <v-button class="close-btn -rounded" variant="outline" size="sm" color="info" @click="closeEditor(!state.isComplete)" v-if="state.editMode && state.tourComplete">close</v-button>
      </div>
    </transition>

    <transition name="edit-mode">
      <resume-layout  v-show="!state.showIntro && state.isComplete"></resume-layout>
    </transition>

    <!-- Sidebar -->
    <transition>
      <div class="sidebar" v-show="!state.showIntro && !state.editMode && state.isComplete">
        <popover
          type="tooltip"
          position="right"
          content="Start Over"
          :delay="[800,0]"
          >
          <div @click="reset(true)" class="sidebar-btn"><icon name="trash" size="md"></icon> <span class="hidden-sm-up">restart</span></div>
        </popover>
        <popover
          ref="editPopover"
          position="right"
          title="Instant Regret?"
          content="I can’t give you back all the time you’ve just wasted, but you can go back and make edits anytime!"
          :closeOnClickOff="false"
          :triggers="false"
          :timer="6000"
          >
          <div @click="toggle()" class="sidebar-btn"><icon name="edit" size="md"></icon> <span class="hidden-sm-up">edit</span></div>
        </popover>
      </div>
    </transition>

    <!-- Modals -->
    <modal id="modal-close" confirmation ok-title="Yeah, Don't Care" close-title="Fine, I'll do it." size="sm" @ok="closeEditor()">
      <div class="p-3">
        <h3 class="c--jazzy">But, you aren't finished yet...</h3>
        <p class="t--sans">I'll have to finish the rest of the resume for you</p>
      </div>
    </modal>

    <modal id="modal-reset" confirmation ok-title="Yeah" close-title="Nevermind" size="sm" @ok="reset()">
      <div class="p-3">
        <h3 class="c--jazzy">Are you sure?</h3>
        <p class="t--sans">Just checking, because this will erase all the things.</p>
        <h6 class="c--gray">... no do-overs</h6>
      </div>
    </modal>

    <modal id="modal-tour" confirmation ok-title="*sigh* Alright" close-title="Veto" size="sm" @ok="startTour()" @cancel="skipTour()" :closeOnBackdrop="false">
      <div class="p-3 t--center">
        <h3 class="c--jazzy">Welcome</h3>
        <p class="t--sans">Thank you for taking the time to create the perfect resume.</p>
        <p class="t--bold">Let's just take a quick tour!</p>
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

store.resume.state = {
  currentStep : -1,
  currentPhase: 'welcome',
  furthestAllowed : 0,
  completedSteps : 0,
  completedPhases : -1,
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
  tour : {
    value : ''
  },
  about : {
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
      options : []
    },
    togglerMinimal : {
      index : 0,
      options : []
    },
    togglerConfident : {
      index : 0,
      options : []
    },
    manifesto : [],
  },
  portrait : {
    expression : '',
    facialHair : '',
    attire : '',
    hands : '',
    background : '',
    filter : '',
  },
  portraitUrls : {},
  experience : {
    past : '',
    skills : [],
  }
};

export default {
  components : {
    resumeEditor, resumeContent, resumeLayout, resumeIntro
  },

  data() {
    return {
      schema : schema,
      state : store.resume.state,
      model : store.resume.model,
    }
  },

  computed : {

    totalSteps() {
      let count = 0;

      _.forEach(this.schema.phases, (phase) => {
        count += phase.steps.length;
      });

      this.state.totalSteps = count;
      console.log('totalSteps', this.state.totalSteps);

      return count;
    },

    completedSteps() {
      return this.state.completedSteps;
    },

    editMode() {
      return this.state.editMode;
    }
  },

  watch : {

    completedSteps() {
      console.log('furthestAllowed');
      let furthest = _.min([this.state.completedSteps + 1, this.state.totalSteps]);

      this.state.furthestAllowed = furthest;

      this.state.isComplete = this.state.completedSteps == this.state.totalSteps ? true : false;
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
    },

    'state.completedSteps' : function(val) {
      console.log('completed Steps changed to: ', val, this.state.completedSteps);

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

        // if not complete, fill rest of items with default
        if ( !this.state.isComplete ) {
          this.setDefault();
        }

        // Show edit hint first time editor is closed
        if(!this._shownHint) {
          this._shownHint = true;

          window.setTimeout(() => {
            this.$refs.editPopover.$emit('show::popover');
          }, 1600);
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
          this.model[key] = Object.assign({}, this.model[key], item );
        });

        _.forEach(response.data.state, (item, key) => {
          // store.resume.state[key] = Object.assign({}, store.resume.state[key], item );
          this.state[key] = item;
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
          this.model[key] = Object.assign({}, this.model[key], item );
        });

        _.forEach(response.data.state, (item, key) => {
          this.state[key] = item;
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
      this.state.currentPhase = 'welcome';
      this.state.currentStep = -1;
      this.model.tour.value = '';


       // generate temp element for blocking events during tour
      this._blocker = document.createElement('div');
      this._blocker.classList.add('modal-backdrop');
      document.body.insertBefore(this._blocker, null);

      window.setTimeout( () => {
        this._editorTour.start();
      }, 650);

    },

    skipTour() {
      this._editorTour.cancel();
    },
  },

  created() {

    // get totalSteps to calculate on creation
    this.totalSteps;

    let params = window.location.pathname.split( '/' );
    this._saveTimer;

    // Determine if we should show default or open editor
    if ( params[2] == 'default' ) {
      this.setDefault(false);
    }
    else {
      this.open(); // if there's nothing existing to open, this will call the new() method
    }


    // Set event methods
    Event.$on('updateModel', (phase, step, value) => {
      this.$set(store.resume.model[phase], step, value);
      console.log("updating " + phase +"->" + step + " to " + value);
    });

    Event.$on('toggleEditMode', () => {
      this.state.editMode ? this.closeEditor() : this.openEditor();
    });

    Event.$on('stepComplete', (step) => {
      if ( step > this.state.completedSteps ) {
        console.log( "Setting state.completedSteps:", step);
        this.state.completedSteps = step;
      }
    });

    Event.$on('togglePreviewMode', () => {
      this.state.previewMode = !this.state.previewMode;
    });

    Event.$on('setPreviewMode', (bool) => {
      store.resume.state.previewMode = bool;
    });

    Event.$on('setDefault', (data) => {
      this.setDefault(data);
    });

    Event.$on('setComplete', () => {
      console.log('Event: setComplete');
      store.resume.state.showIntro = false;
      store.resume.state.completedSteps = this.totalSteps;

      console.log('isComplete:', this.state.isComplete);
    });

    Event.$on('closeEdit', (confirm = false) => {
      console.log('closeEditor');
      this.closeEditor(confirm);
    });
  },

  mounted() {

    // Setup Editor Tour
    this._editorTour = new Shepherd.Tour({
      defaults : {
        classes : 'popover',
        buttons : {
          classes : 'next-btn btn -reverse -outline -rounded -sm',
          text : 'Next',
          events : {
            'click' : function() {
              return Shepherd.activeTour.next();
            }
          }
        },
        tetherOptions : {
          classPrefix: 'popup',
          optimizations: {
            // gpu: false
          }
        },
      }
    });

    this._editorTour.addStep('editor', {
      title : "Editor Pane",
      text : "This is where you will make your selections.",
      attachTo : ".welcome-step .editor__question top",
      when : {
        'before-show' : () => {
          store.resume.state.previewMode = false;
        },
        hide : () => {

        }
      },
    });

    this._editorTour.addStep('editor-choose', {
      text: "Go ahead and <strong>pick an option<strong>",
      attachTo : ".welcome-step .editor__content bottom",
      buttons : false,
      when : {
        'before-show' : () => {
          this._blocker.style.display = 'none';
        },
        hide : () => {
          this._blocker.style.display = 'block';
        }
      }
    });

    this._editorTour.addStep('editor-response', {
      title : "Nice pick!",
      attachTo : ".welcome-step .editor__content bottom",
      buttons : false,
      when : {
        show : function() {
          window.setTimeout( () => {
            Shepherd.activeTour.next();
          }, 1200)
        }
      }
    });

    this._editorTour.addStep('preview', {
      title : "Preview Area",
      text : "Here you can preview the results of your selections and (sometimes) make further edits.",
      attachTo : ".preview__phase top",
      when : {
        'before-show' : () => {
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
      title : "Perfect wording",
      text : "Underlined areas allow you to toggle through wording options. Try it out by <strong>clicking on the underline below</strong>.",
      attachTo : ".example-toggle top",
      advanceOn : {selector: '.example-toggle', event: 'click'},
      buttons : false,
      when : {
        'before-show' : () => {
          this._blocker.style.display = 'none';
        },
        hide : () => {
          this._blocker.style.display = 'block';
        }
      },
    });

    this._editorTour.addStep('toggler-response', {
      title : "Looking good!",
      attachTo : ".example-toggle top",
      buttons : false,
      when : {
        show : () => {
          window.setTimeout( () => {
            Shepherd.activeTour.next();
          }, 1800);
        }
      }
    });

    this._editorTour.addStep('preview-toggle', {
      title : "Preview Toggle",
      text : "This button will toggle between the preview and editor views (on smaller screens)",
      attachTo : ".preview-toggle__btn right",
      when : {
        'before-show' : () => {
          let toggle = document.querySelector('.preview-toggle__btn');
          toggle.style.display = 'flex';
          toggle.style.opacity = '1';
        },
        hide : () => {
          let toggle = document.querySelector('.preview-toggle__btn');
          toggle.style.display = '';
          toggle.style.opacity = '';
        }
      }
    });

    this._editorTour.addStep('navigation', {
      title : "Navigation",
      text : "This is how you move about. Go ahead and <strong>click to the next step</strong>.",
      attachTo : ".editor__nav top",
      // advanceOn : {selector: '.editor__next-btn', event: 'mouseup'},
      buttons : false,
      when : {
        'before-show' : ()=> {
          Event.$emit('setPreviewMode', false);
          this._blocker.style.display = 'none';
          document.querySelector('.editor__nav').addEventListener("click", () => {
            this._editorTour.next();
          }, {once : true});
        },
        show : function() {
          this.el.classList.remove('shepherd-open');
          window.setTimeout(()=> {
            this.el.classList.add('shepherd-open');
            this.tether.position();
            Event.$emit('showPrompt', 'Lets Go');
          }, 650);
        },
        hide : () => {
          Event.$emit('setPhase', 0, 0);
          this._blocker.style.display = 'block';
        }
      }
    });

    this._editorTour.addStep('moreNav', {
      title : 'Progress',
      text : "This area shows your progress. You can also jump to different sections here (once completed).",
      attachTo : ".editor__phase__dots bottom",
    });


    this._editorTour.addStep('done', {
      title : "That's it! You are ready to tackle it on your own",
      text: "Don\'t worry, it wont take long.",
      buttons : [
        {
          classes : 'finish-btn btn -reverse -outline -rounded -sm',
          text : 'Finish',
          action : this._editorTour.complete
        }
      ]
    });

    this._editorTour.on('complete', () => {
      if (this._blocker) {
        this._blocker.remove();
      };
      this.state.tourComplete = true;
    });

    this._editorTour.on('cancel', () => {
      if (this._blocker) {
        this._blocker.remove();
      };
      Event.$emit('setPhase', 0, 0);
      this.state.tourComplete = true;
    });
  }
}
</script>
