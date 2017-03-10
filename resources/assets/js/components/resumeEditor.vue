
<template>
  <div class="resume__editor">
    <!-- Header -->
    <div class="editor__header">
      <div class="progress editor__progress">
        <div class="progress-bar" role="progressbar" :aria-valuenow="percentComplete" aria-valuemin="0" aria-valuemax="100" :style="{width : percentComplete + '%'}"></div>
      </div>
      <h5 class="editor__phase-heading">{{schema.phases[currentPhase].title}}</h5>
      <ul class="editor__phase__dots">
        <li v-for="(phase, index) in schema.phases"
        :class="{'-active' : currentPhase == index, '-disabled' : furthestAllowed < index}"
        @click="setPhase(index, 0)">
          {{index + 1}}
        </li>
      </ul>
      <hr>
    </div>

    <!-- Slot Content -->
    <!-- <transition-group :name="animation" tag="div" class="editor_phases"> -->
      <resume-phase
        v-for="(phase, index) in schema.phases"
        v-show="currentPhase == index"
        :key="phase.id"
        :id="phase.id"
        :stepOffset="getStepOffset(index)"
        :phaseIndex="index"
        :steps="phase.steps"
        @phaseComplete="phaseComplete"
        ></resume-phase>
    <!-- </transition-group> -->

    <!-- Footer -->
    <div class="editor__footer">
      <resume-nav></resume-nav>
    </div>
  </div>
</template>

<script>

  import {store} from './global';
  import resumePhase from './resumePhase';
  import resumeNav from './resumeNav';

  export default {

    components : {
      resumePhase, resumeNav
    },

    props : {
      schema : {
        type: Object,
        required : true
      }
    },

    data() {
      return {
        state : store.resume.state,
        currentPhase: 0,
        completed: -1,
        animation: "slide-next",
        nextBtn : {
          "class" : "-disabled",
          "text" : "next"
        }
      }
    },

    computed : {
      totalPhases() {
        return this.schema.phases.length;
      },
      totalSteps() {
        let count = 0;

        _.forEach(this.schema.phases, (phase) => {
          count += phase.steps.length;
        });

        return count;
      },
      lastPhase() {
        return this.totalPhases - 1;
      },
      furthestAllowed() {
        return _.min([this.completed + 1, this.lastPhase]);
      },
      isComplete() {
        return this.completed == this.lastPhase;
      },
      isLastPhase() {
        return this.currentPhase == this.lastPhase;
      },
      percentComplete() {
        return (this.state.completedSteps / this.totalSteps) * 100;
      }
    },

    watch : {
      furthestAllowed() {
        Event.$emit('showPrompt');
      }
    },

    methods : {
      getStepOffset(index) {
        let offset = 1;

        for (let i = 0; i < index; i++) {
          offset += this.schema.phases[i].steps.length;
        }

        return offset;
      },

      nextPhase() {

        if( this.isLastPhase ) {
          // end of form
          Event.$emit('disableNext');
        }
        else if ( this.currentPhase < this.furthestAllowed ) {
          console.log('Go to next phase');
          this.setPhase(this.currentPhase + 1, 0);
        }
      },

      prevPhase() {
        if(this.currentPhase > 0) {
          console.log('Go to prev phase');
          this.setPhase(this.currentPhase - 1, 'last');
        }
        else {
          // at the beggining
          console.log('Not allowed, At the begining of the form');
        }
      },

      setPhase(index, step = null) {
        console.log('Phase Set to:', index);
        if (index <= this.furthestAllowed) {
          this.animation = index > this.currentPhase ? 'slide-next' : 'slide-prev';
          this.currentPhase = index;
          this.state.currentPhase = index;

          this.$nextTick(function () {
            if( step != null ) {
              console.log('emitting step from setPhase()');
              Event.$emit('setStep', step, index);
            }
          });
        }
      },

      phaseComplete(index) {
        console.log('Phase Completed:', index);
        if ( index > this.completed && index <= this.lastPhase ) {
          this.completed = index;
        }
      }
    },

    created() {
      Event.$on('nextPhase', this.nextPhase);
      Event.$on('prevPhase', this.prevPhase);
    }
  }
</script>
