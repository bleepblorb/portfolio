<template>
  <div id="resume" :class="{'edit-mode' : editMode}">
    <resume-editor :schema="schema"></resume-editor>
    <resume-content>
      <button class="edit-btn btn btn-secondary"> edit </button>
    </resume-content>
  </div>

</template>

<script>

import {store} from './global.js';
import resumeEditor from './resumeEditor';
import resumeContent from './resumeContent';

store.resume.model = {
  intro : '',
  intro2 : '',
  intro3 : '',
  q2 : '',
  q3 : '',
}

store.resume.state = {
  currentStep : 1,
  currentPhase: 0,
  furthestAllowed : 0,
  completedSteps : 0,
  totalSteps : 0,
  isComplete : false,
};

export default {
  components : {
    resumeEditor, resumeContent
  },

  data() {
    return {
      model : store.resume.model,
      state : store.resume.state,
      editMode : false,
      schema : {
        phases : [
          {
            id : 'intros',
            title : "Intro",
            steps : [
              {
                id : "intro",
                intro : "Facial Hair",
                question : "Add some fuzz to this peach",
                type : "radialGroup",
                imageUrl : "/img/portrait-beard.png",
                items : [
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
                id : "intro2",
                intro : "qestion 1.2",
                question : "This is Question 1.2",
                type : "radialGroup",
                items : [
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
              {
                id : "intro3",
                intro : "qestion 1.3",
                question : "This is Question 1.3",
                type : "radialGroup",
                items : [
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
              }
            ]
          },
          {
            id : "phase2",
            title: "Phase 2",
            steps : [
              {
                id : "q2",
                intro : "qestion 2.1",
                question : "This is Question 2.1",
                type : "radialGroup",
                items : [
                  {
                    text : "option 2.1",
                    value : "value 2.1"
                  },
                  {
                    text : "option 2.2",
                    value : "value 2"
                  },
                  {
                    text : "option 3.2",
                    value : "value 3"
                  }
                ]
              },
              {
                id : "q3",
                intro : "qestion 2.2",
                question : "This is Question 2.2",
                type : "radialGroup",
                items : [
                  {
                    text : "option 2.1",
                    value : "value 2.1"
                  },
                  {
                    text : "option 2.2",
                    value : "value 2"
                  },
                  {
                    text : "option 3.2",
                    value : "value 3"
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

  mounted() {
    let button = document.getElementsByClassName('edit-btn');
    button[0].addEventListener('click', () => {
      Event.$emit('toggleEditMode');
    });
  },

  created() {

    this.state.totalSteps = this.totalSteps;

    Event.$on('updateModel', (name, value) => {
      this.model[name] = value;
      console.log("updating Model", name, "to", value);
    });

    Event.$on('toggleEditMode', () => {
      this.editMode = !this.editMode;
    });

    Event.$on('stepComplete', () => {
      this.state.completedSteps++;
    });
  }
}
</script>
