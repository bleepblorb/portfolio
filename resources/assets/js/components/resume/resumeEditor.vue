
<template>
  <div class="resume__editor g__col" @mousedown="setPreview(false)">

    <div class="resume__editor-wrap">

      <!-- Header -->
      <div class="editor__header">
        <div class="progress editor__progress">
          <div class="progress-bar" role="progressbar" :aria-valuenow="percentComplete" aria-valuemin="0" aria-valuemax="100" :style="{width : percentComplete + '%'}" ></div>
        </div>
        <h5 class="editor__phase-heading">{{ schema.phases[currentPhase] ? schema.phases[currentPhase].title : '&nbsp;'}}</h5>
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
      <transition-group tag="div" class="editor_phases">
        <editor-toc
          key="toc"
          :options="phaseList"
          v-show="currentPhase == 'toc'"
        ></editor-toc>

        <editor-welcome
          key="intro"
          v-show="currentPhase == 'welcome'"
        ></editor-welcome>

        <editor-phase
          v-for="(phase, index) in schema.phases"
          v-show="currentPhase == index"
          :key="phase.id"
          :id="phase.id"
          :stepOffset="getStepOffset(index)"
          :phaseIndex="index"
          :steps="phase.steps"
          @phaseComplete="phaseComplete"
        ></editor-phase>
      </transition-group>

      <!-- Footer -->
      <div class="editor__footer">
        <editor-nav></editor-nav>
      </div>
    </div>
    <!-- <div class="preview-toggle" @click="togglePreview()"></div> -->
  </div>
</template>

<script>

  import {store} from '../global';
  import editorPhase from './editorPhase';
  import editorToc from './editorToc';
  import editorWelcome from './editorWelcome';
  import editorNav from './editorNav';

  export default {

    components : {
      editorPhase, editorNav, editorToc, editorWelcome
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
      }
    },

    computed : {
      phaseList() {
        console.log(this.schema.phases, _.map(this.schema.phases, 'title'));
        return _.map(this.schema.phases, function(item) {
          return {
            label: item.title,
            value: item.id
          }
        });
      },

      currentPhase() {
        return this.state.currentPhase;
      },

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
        return _.min([this.state.completedPhases + 1, this.lastPhase]);
      },


      isLastPhase() {
        return this.currentPhase == this.lastPhase;
      },

      percentComplete() {
        return (this.state.completedSteps / this.totalSteps) * 100;
      }
    },

    watch : {
      furthestAllowed(val, oldVal) {
        if ( val > oldVal ) {
          Event.$emit('showPrompt');
        }
      }
    },

    methods : {
      setPreview(bool) {
        if (this.state.previewMode != bool ) {
          Event.$emit('setPreviewMode', bool);
        }
      },

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
          this.state.currentPhase = index;

          this.$nextTick(function () {
            if( step != null ) {

              Event.$emit('setStep', step, index);
            }
          });
        }
      },

      phaseComplete(index) {
        console.log('Phase Completed:', index);
        if ( index > this.state.completedPhases && index <= this.lastPhase ) {
          this.state.completedPhases = index;
        }
      }
    },

    created() {
      Event.$on('nextPhase', this.nextPhase);
      Event.$on('prevPhase', this.prevPhase);
      Event.$on('setPhase', this.setPhase);
      Event.$on('setComplete', () => {
        this.state.completedPhases = this.lastPhase;
      });
      Event.$on('reset', () => {
        this.state.currentPhase = 0;
        this.state.completedPhases = -1;
      });
    },

    mounted() {
    }
  }
</script>
