<template>
    <div class="editor__phase">
      <transition :name="'slide-' + this.state.direction">
        <editor-step
          v-for="(step, index) in steps"
          v-if="state.currentStep ==  stepOffset + index"
          :key="index"
          :stepIndex="index"
          :stepNum="stepOffset + index"
          :imageUrl="step.imageUrl"
          :intro="step.intro"
          :question="step.question"
          :description="step.desc"
          :inputType="step.type"
          :options="step.options"
          :placeholder="step.placeholder || ''"
          :id="step.id"
          :phase="id"
          :label="step.label"
          @completedStep="completedStep"
        ></editor-step>
      </transition>
    </div>
</template>

<script>
  import {store} from '../global';
  import editorStep from './editorStep';

  export default {
    components : {
      editorStep
    },

    props : {
      id : {
        type : String,
        required : true
      },

      steps : {
        type : Array,
        required : true
      },

      stepOffset : {
        type : Number,
        required : true
      },

      phaseIndex : {
        type : Number,
        required : true
      },

      isActive : {
        type : Boolean,
        default : false
      }
    },

    data() {
      return {
        state : store.resume.state,
        currentStep : 0,
        completed : -1,
      }
    },

    computed : {
      totalSteps() {
        return this.steps.length;
      },
      lastStep() {
        return this.totalSteps - 1;
      },
      furthestAllowed() {
        return _.min([this.completed + 1, this.lastStep]);
      },
      isComplete() {
        return this.completed == this.lastStep;
      },
      isLastStep() {
        return this.currentStep == this.lastStep;
      },
    },

    watch : {
      completed() {
        if ( this.isComplete ) {
          this.$emit('phaseComplete', this.phaseIndex);
        }
      },
      furthestAllowed(val, oldVal) {
        if ( val > oldVal && !this.state.isComplete) {
          Event.$emit('showPrompt');
        }
      }
    },

    methods : {

      nextStep() {
        if ( this.state.currentPhase !== this.phaseIndex ) { return; }

        if ( !this.isLastStep ) {
          if ( this.currentStep < this.furthestAllowed ) {

            this.setStep( this.currentStep + 1 );
          }
        }
        else {
          console.log('end of phase, call nextPhase');
          Event.$emit('nextPhase');
        }
      },

      prevStep() {
        if ( this.state.currentPhase !== this.phaseIndex ) { return; }

        if ( this.currentStep > 0 ) {
          console.log('Got to Previous Step', this.id);
          this.setStep(this.currentStep - 1);
        }
        else {
          console.log('beggining of phase, call prevPhase');

          this.$nextTick( function() {
            Event.$emit('prevPhase', this.id);
          });
        }
      },

      setStep( step, phase = this.phaseIndex ) {
        if ( phase !== this.phaseIndex ) { return; }

        let index = step === "last" ? this.lastStep : step;

        if (index >= 0 && index <= this.furthestAllowed) {
          console.log('Step Set to:', index, this.id);

          this.state.direction =  this.stepOffset + index > this.state.currentStep ? 'next' : 'prev';
          console.log(this.stepOffset + index, this.state.currentStep, this.state.direction)

          this.$nextTick(function() {
            this.state.currentStep = this.stepOffset + index;
            this.currentStep = index;
            Event.$emit('hidePrompt');
          });
        }
      },

      completedStep(index) {
        if ( index > this.completed && index <= this.lastStep ) {
          console.log('completed step:', index);
          this.completed = index;
        }
        else {
          console.log('already completed');
        }
      }
    },

    created() {
      Event.$on('nextStep', this.nextStep);
      Event.$on('prevStep', this.prevStep);
      Event.$on('setStep', this.setStep);
      Event.$on('setComplete', () => {
        this.completed = this.lastStep;
      });
      Event.$on('reset', () => {
        this.currentStep = 0;
        this.completed = -1;
      });
    },
  }
</script>
