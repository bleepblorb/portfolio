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
      </div>
    </transition>

    <transition name="edit-mode">
      <resume-layout  v-show="!editMode && state.isComplete"></resume-layout>
    </transition>

    <div class="sidebar" v-show="!state.showIntro && !state.editMode">
      <button @click="reset(true)" class="edit-btn">R</button>
      <hint ref="editPopover" placement="right" title="Instant Regret?" content="I can’t give you back all the time you’ve just wasted, but you can go back and make edits anytime!" :closeOnClickOff="false" :trigger="false">
        <button @click="toggle()" class="edit-btn">e</button>
      </hint>
    </div>

    <button @click="close(!isComplete)" v-if="editMode" class="close"></button>

    <modal id="modal-close" confirmation ok-title="Yeah, Don't Care" close-title="Fine, I'll do it." size="sm" @ok="close()">
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

  </div>
</template>

<script>

require('../../bootstrap')


import {store} from '../global.js';
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
  showIntro : true,
  editMode : false,
  previewMode : false,
  readerMode : false,
  tourComplete : false,
};

store.resume.model = {
  intro : {
    introStyle : '',
    personal : [],
    togglerPoem : 0,
    togglerIntro : 0,
  },
  portrait : {
    expression : '',
    facialHair : '',
    hair : '',
    attire : '',
    hands : '',
    background : '',
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
      schema : {
        phases : [
          {
            id : 'intro',
            title : "Intro",
            steps : [
              {
                id : "introStyle",
                intro : "First impressions",
                question : "You only get to pick one.",
                type : "radial-group",
                imageUrl : "/img/portrait-beard.png",
                options : [
                  {
                    label : "Pretty Standard",
                    value : "standard"
                  },
                  {
                    label : "Poetic",
                    value : "haiku"
                  },
                  {
                    label : "option 3",
                    value : "value 3"
                  },
                  {
                    label : "option 4",
                    value : "value 4"
                  },
                  {
                    label : "option 5",
                    value : "value 5"
                  },
                  {
                    label : "option 6",
                    value : "value 6"
                  }
                ]
              },
              {
                id : "personal",
                intro : "Humanize me",
                question : "The spot for obligitory personal interests",
                imageUrl : "/img/portrait-beard.png",
                type : "checkbox-group",
                options : [
                  {
                    label : "Cooking",
                    value : "making a mess in the kitchen"
                  },
                  {
                    label : "Hiking",
                    value : "pooping in the woods"
                  },
                  {
                    label : "Cartoons",
                    value : "watching cartoons"
                  },
                  {
                    label : "Tennis",
                    value : "playing tennis"
                  },
                  {
                    label : "Pooping",
                    value : "pooping"
                  },
                  {
                    label : "Learning",
                    value : "learning new skills (that killz)"
                  }
                ]
              }
            ]
          },
          {
            id : "portrait",
            title: "Portrait",
            steps : [
              {
                id : "expression",
                imageUrl : "/img/portrait-beard.png",
                intro : "Expression",
                question : "Choose a face",
                type: "slider-input",
                placeholder: "Level Of Excitement",
                options : [
                  {
                    label : "All Business",
                    value : "business"
                  },
                  {
                    label : "Robotic",
                    value : "robot"
                  },
                  {
                    label : "Seemingly Normal",
                    value : "normal"
                  },
                  {
                    label : "Happy Go Lucky",
                    value : "happy"
                  },
                  {
                    label : "Sugar Buzz",
                    value : "excited"
                  },
                ]

              },
              {
                id : "facialHair",
                imageUrl : "/img/portrait-beard.png",
                intro : "Facial hair",
                question : "Put some fuzz on this peach",
                type : "radial-group",
                options : [
                  {
                    label : "Beardo weirdo",
                    value : "beard"
                  },
                  {
                    label : "No Thanks",
                    value : "clean"
                  }
                ]
              },
              {
                id : "background",
                intro : "qestion 2.2",
                question : "This is Question 2.2",
                type : "radial-group",
                options : [
                  {
                    label : "K.I.S.S.",
                    value : "white"
                  },
                  {
                    label : "Camping",
                    value : "camping"
                  }
                ]
              },
              {
                id : "hands",
                intro : "🎶",
                question : "I've got one hand in my pocket, the other is...",
                type : "multiselect",
                options : [
                  {
                    label : "Giving a Thumbs Up",
                    value : "thumbs-up"
                  },
                  {
                    label : "Grabbing a Craft Brew",
                    value : "brew"
                  },
                  {
                    label : "Holding a Spot of Tea",
                    value : "tea"
                  },
                  {
                    label : "Also in My Pocket",
                    value : "none"
                  }
                ]
              }
            ]
          }
        ]
      }
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
        this.$refs.editPopover.$emit('show::popover');
      }
    },
    furthestAllowed() {
      this.state.furthestAllowed = this.furthestAllowed;
    },
    editMode(newVal) {
      newVal ? Event.$emit('hideMenu') : Event.$emit('showMenu');

      if ( !this.state.tourComplete ) {
        this._editorTour.start();
      }
    }
  },

  methods : {

    open() {

      if ( this.state.editMode ) {
        return;
      }

      this.state.currentPhase = 'toc';
      this.state.currentStep = -1;
      this.state.direction = 'next';
      this.state.editMode = true;
    },

    close(confirm = false) {

      if ( !this.state.editMode ) {
        return;
      }

      if ( confirm ) {

        Event.$emit( 'show::modal', 'modal-close' );

      } else {

        this.state.editMode = false;

        window.setTimeout( () => {
          if ( !this.isComplete ) {
            this.setDefault();
          }
          this.state.previewMode = false;
        }, 850)
      }
    },

    reset(confirm = false) {

      if ( confirm ) {
        Event.$emit( 'show::modal', 'modal-reset' );
      }
      else {

        this.state.currentStep = 1;
        this.state.currentPhase = 0;
        this.state.furthestAllowed = 0;
        this.state.completedSteps = 0;
        this.state.isComplete = false;
        this.state.editMode = false;
        this.state.showIntro = true;

        axios.get('api/resume/new')
        .then(response => {
          _.forEach(response.data, (item, key) => {
            store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
          });
        })
        .catch(function (error) {
          console.log(error);
        });

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

    setDefault() {
      axios.post('api/resume/default', {
        model : this.model
      })
      .then(response => {
        _.forEach(response.data, (item, key) => {
          store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
        });
        console.log(store.resume.model);
      })
      .catch(function (error) {
        console.log(error);
      });

      Event.$emit('setComplete');
    },

    sidebarEnter() {
      console.log('sidebar enter');
      if ( this.state.isComplete ) {
        this.$refs.editPopover.$emit('show::popover');
      }
    }

  },

  beforeCreate() {

    axios.get('api/resume/new')
    .then(response => {
      _.forEach(response.data, (item, key) => {
        store.resume.model[key] = Object.assign({}, store.resume.model[key], item );
      });

      console.log(store.resume.model);
    })
    .catch(function (error) {
      console.log(error);
    });
  },

  created() {

    this.state.totalSteps = this.totalSteps;

    Event.$on('updateModel', (phase, step, value) => {
      this.$set(this.model[phase], step, value);
      console.log("updating " + phase +"->" + step + " to " + value);
    });

    Event.$on('toggleEditMode', () => {
      this.state.editMode ? this.close() : this.open();
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

    Event.$on('setDefault', () => {
      this.setDefault();
    });

    Event.$on('setComplete', () => {
      this.state.showIntro = false;
      this.state.isComplete = true;
      this.state.completedSteps = this.state.totalSteps;
    });

    Event.$on('closeEdit', (confirm = false) => {
      this.close(confirm);
    });

    //
    // Editor Tour

    // this._editorTour = new Shepherd.Tour({
    //   defaults : {
    //     classes : 'popover',
    //     tetherOptions : {
    //       classPrefix: 'tether',
    //       optimizations: {
    //         // gpu: false
    //       }
    //     },
    //   }
    // });
    //
    // this._editorTour.addStep('open', {
    //   title : "Welcome",
    //   text : "Thank you for taking the time to create the perfect resume. Let's just take a quick tour",
    //   buttons : [
    //     {
    //       text : '*sigh* Alright',
    //       action : this._editorTour.next
    //     },
    //     {
    //       text : 'veto!',
    //       action : this._editorTour.cancel
    //     }
    //   ]
    // });
    //
    // this._editorTour.addStep('navigation', {
    //   text : "This is the nav",
    //   attachTo : ".editor__nav top"
    // });
    //
    // this._editorTour.addStep('moreNav', {
    //   text : "This is also some nav",
    //   attachTo : ".editor__phase__dots bottom",
    // });
    //
    // this._editorTour.addStep('preview-toggle', {
    //   title : "Preview Toggle",
    //   text : "This button will toggle the preview mode (on smaller screens)",
    //   attachTo : ".preview-toggle__btn left",
    //   when : {
    //     'before-show' : function() {
    //       let toggle = document.querySelector('.preview-toggle__btn');
    //       toggle.style.display = 'flex';
    //       toggle.style.opacity = '1';
    //     },
    //     hide : function() {
    //       let toggle = document.querySelector('.preview-toggle__btn');
    //       toggle.style = '';
    //     }
    //   }
    // });
    //
    // this._editorTour.addStep('preview', {
    //   title : "Preview Area",
    //   text : "This is the preview area. You can preview your answers, and sometimes make further edits.",
    //   attachTo : ".preview__phase top",
    //   when : {
    //     'before-show' : function() {
    //       Event.$emit('setPreviewMode', true);
    //     },
    //     show : function() {
    //       this.el.classList.remove('shepherd-open');
    //       window.setTimeout(()=> {
    //         this.el.classList.add('shepherd-open');
    //         this.tether.position();
    //       }, 650);
    //     }
    //   }
    // });
    //
    // this._editorTour.addStep('toggler', {
    //   title : "Get the perfect wording",
    //   text : "Underlied areas allow you to toggle through wording options. <strong>Try it out</strong>",
    //   attachTo : ".toggler top",
    //   advanceOn : {selector: '.toggler', event: 'click'},
    //   buttons : false
    // });
    //
    // this._editorTour.addStep('toggler-response', {
    //   title : "Sweet, looking good",
    //   attachTo : ".toggler top",
    //   when : {
    //     hide : function() {
    //       Event.$emit('setPreviewMode', false);
    //     }
    //   }
    // });
    //
    // this._editorTour.addStep('done', {
    //   title : "Done",
    //   text : "I think you are ready to tackle it on your own, young padawan",
    //   buttons : [
    //     {
    //       text : 'Finish',
    //       action : this._editorTour.complete
    //     }
    //   ]
    // });
    //
    // this._editorTour.on('complete', () => {
    // });

  }
}
</script>
