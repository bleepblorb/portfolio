<template>
    <div :id="'phase__'+ id">
      <!-- More overview / Interests -->

      <!-- Detailed  -->
      <div v-show="format == 'detail'">
        <div class="job">
          <h6>
            <span class="job__date">2008–2012</span>
            <span class="job__location">Western Washington University</span>
          </h6>
          <h2 class="job__title">Grabbing a Bacholers of Arts degree in Graphic Design.</h2>
          <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p class="t--sans t--small c--gray-light">Read More</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2009–2012</span>
            <span class="job__location">Associated Students Publicity Center</span>
          </h6>
          <h2 class="job__title">Part time Graphic Designer.</h2>
          <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p class="t--sans t--small c--gray-light">Read More</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2009–2014</span>
            <span class="job__location">SRM Architecture and Marketing</span>
          </h6>
          <h2 class="job__title">Graphic Designer / Developer at a multidisciplinary design firm.</h2>
          <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p class="t--sans t--small c--gray-light">Read More</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2014–2017</span>
            <span class="job__location">SRM Architecture and Marketing</span>
          </h6>
          <h2 class="job__title">Upgrade to Lead Digital Designer.</h2>
          <p class="job__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p class="t--sans t--small c--gray-light">Read More</p>
        </div>
      </div>

      <!-- Overview -->
      <div v-if="format == 'nutshell'">
        <h2>I attended <u>Western Washington University</u> and graduated with a BA in Graphic Design. Previously I worked at <u>SRM Architecture and Marketing</u> as a graphic designer & developer on a wide variety of projects.</h2>
      </div>

    </div>
</template>

<script>
  import resumePhase from './resumePhase';
    import {store} from '../global';

  export default {
    mixins : [ resumePhase ],

    components : {
    },

    props : {
    },


    computed : {
      format() {
        if ( this.model ) {
          return this.model.format;
        }
      }
    },

    watch : {
    },



    methods : {
    },

    created() {
    },

  }
</script>
