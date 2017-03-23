<template>
  <div id="resume" :class="{'edit-mode' : editMode}">
    <resume-editor :schema="schema"></resume-editor>
    <resume-content :schema="schema"></resume-content>
    <div class="sidebar"  v-if="!state.showIntro">
      <button @click="toggle()" class="edit-btn">e</button>
    </div>
  </div>

</template>

<script>

import {store} from '../global.js';
import resumeEditor from './resumeEditor';
import resumeContent from './resumeContent';

store.resume.model = {
  intro : {
    introStyle : '',
    personal : [],
    togglerPoem : 0,
    togglerIntro : 0,
  },
  portrait : {
    expression : 'normal',
    facialHair : '',
    hair : 'default',
    attire : ''
  }
}

store.resume.state = {
  currentStep : 1,
  currentPhase: 0,
  furthestAllowed : 0,
  completedSteps : 0,
  totalSteps : 0,
  direction : '',
  isComplete : false,
  editMode : true,
  showIntro : false,

};

export default {
  components : {
    resumeEditor, resumeContent
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
                items : [
                  {
                    text : "Pretty Standard",
                    value : "standard"
                  },
                  {
                    text : "Poetic",
                    value : "haiku"
                  },
                  {
                    text : "option 3",
                    value : "value 3"
                  },
                  {
                    text : "option 4",
                    value : "value 4"
                  },
                  {
                    text : "option 5",
                    value : "value 5"
                  },
                  {
                    text : "option 6",
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
                items : [
                  {
                    text : "Cooking",
                    value : "making a mess in the kitchen"
                  },
                  {
                    text : "Hiking",
                    value : "pooping in the woods"
                  },
                  {
                    text : "Cartoons",
                    value : "watching cartoons"
                  },
                  {
                    text : "Tennis",
                    value : "playing tennis"
                  },
                  {
                    text : "Pooping",
                    value : "pooping"
                  },
                  {
                    text : "Learning",
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
                label: "Level Of Excitement",
                items : [
                  {
                    text : "All Business",
                    value : "business"
                  },
                  {
                    text : "Robotic",
                    value : "robot"
                  },
                  {
                    text : "Seemingly Normal",
                    value : "normal"
                  },
                  {
                    text : "Happy Go Lucky",
                    value : "happy"
                  },
                  {
                    text : "Sugar Buzz",
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
                items : [
                  {
                    text : "Beardo weirdo",
                    value : "beard"
                  },
                  {
                    text : "No Thanks",
                    value : "clean"
                  }
                ]
              },
              {
                id : "background",
                intro : "qestion 2.2",
                question : "This is Question 2.2",
                type : "radial-group",
                items : [
                  {
                    text : "K.I.S.S.",
                    value : "white"
                  },
                  {
                    text : "Camping",
                    value : "camping"
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
      return this.state.completedSteps == this.totalSteps ? true : false;
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
    isComplete() {
      if ( this.isComplete ) {
        this.state.isComplete = true;
      }
      else {
        this.state.isComplete = false;
      }
    },
    furthestAllowed() {
      this.state.furthestAllowed = this.furthestAllowed;
    }
  },

  methods : {
    toggle() {
      Event.$emit('toggleEditMode');
    }
  },

  mounted() {
  },

  created() {
    console.log(this.model);

    this.state.totalSteps = this.totalSteps;

    Event.$on('updateModel', (phase, step, value) => {
      this.$set(this.model[phase], step, value);
      console.log("updating " + phase +"->" + step + " to " + value);
    });

    Event.$on('toggleEditMode', () => {
      this.state.editMode = !this.state.editMode;
    });

    Event.$on('stepComplete', (step) => {
      console.log(step, this.state.completedSteps);
      if ( step > this.state.completedSteps ) {
        this.state.completedSteps = step;
      }
    });
  }
}
</script>
