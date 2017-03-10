<template>
    <div class="editor__phase">
      <transition-group class="editor__steps" tag="div" type="transition">
        <resume-step
          v-for="(step, index) in steps"
          v-show="currentStep == index"
          :key="step.id"
          :index="index"
          :stepNum="stepOffset + index"
          :imageUrl="step.imageUrl"
          :intro="step.intro"
          :question="step.question"
          :inputType="step.type"
          :items="step.items"
          :id="step.id"
          @completedStep="completedStep"
        ></resume-step>
      </transition-group>
    </div>
</template>

<script>
  import {store} from './global';
  import resumeStep from './resumeStep';

  export default {
    components : {
      resumeStep
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
      index : {
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
        animation : "slide-next",
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
      }
    },

    watch : {
      completed() {
        if ( this.isComplete ) {
          this.$emit('phaseComplete', this.index);
        }
      },
      furthestAllowed() {
        Event.$emit('showPrompt');
      }
    },

    created() {
      Event.$on('nextStep', this.nextStep);
      Event.$on('prevStep', this.prevStep);
      Event.$on('setStep', this.setStep);
    },

    methods : {
      nextStep() {
        if ( this.state.currentPhase !== this.index ) { return; }

        if ( !this.isLastStep ) {
          if ( this.currentStep < this.furthestAllowed ) {
            this.animation = "slide-next";
            this.setStep( this.currentStep + 1 );
          }
        }
        else {
          console.log('end of phase, call nextPhase');
          Event.$emit('nextPhase');
        }
      },

      prevStep() {
        if ( this.state.currentPhase !== this.index ) { return; }

        if ( this.currentStep > 0 ) {
          console.log('Got to Previous Step', this.id);
          this.animation = "slide-prev";
          this.setStep(this.currentStep - 1);
        }
        else {
          console.log('beggining of phase, call prevPhase');

          this.$nextTick( function() {
            Event.$emit('prevPhase', this.id);
          });
        }
      },

      setStep( step, phase = this.index ) {
        if ( phase !== this.index ) { return; }

        let index = step === "last" ? this.lastStep : step;

        if (index >= 0 && index <= this.furthestAllowed) {
          console.log('Step Set to:', index, this.id);
          this.currentStep = index;
          this.state.currentStep = this.stepOffset + index;

          Event.$emit('hidePrompt');
          console.log(this.currentStep);
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
    }
  }
</script>
