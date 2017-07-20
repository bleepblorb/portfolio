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
          <p class="job__desc">The graphic design program at WWU not only taught me the traditional design process, but provided me with a technical foundation for producing designs for the real world. My senior year focus was in print production.</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2009–2012</span>
            <span class="job__location">Associated Students Publicity Center</span>
          </h6>
          <h2 class="job__title">Part time Graphic Designer.</h2>
          <p class="job__desc">While going to university I worked part-time at the school run graphic design office. I worked mainly with campus clubs and organizations to produce promotional materials in various formats — including posters, handbills, digital signage, t-shirts, logos, and banners.</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2012–2014</span>
            <span class="job__location">SRM Architecture and Marketing</span>
          </h6>
          <h2 class="job__title">Graphic Designer / Developer at a multidisciplinary design firm.</h2>
          <p class="job__desc">Worked with a great team of graphic designers, interior designers, and architects on projects big and small. Being a part of such a diverse firm allowed me to to work on a large range of projects — including websites, print materials, brand experiences, interior graphics, and environmental signage.</p>
        </div>

        <div class="job">
          <h6>
            <span class="job__date">2014–2017</span>
            <span class="job__location">SRM Architecture and Marketing</span>
          </h6>
          <h2 class="job__title">Upgrade to Lead Digital Designer.</h2>
          <p class="job__desc">
            On all digital projects I took on the lead design role and was more active with creative direction, project management and client communication responsibilities. Projects were typically websites and interactive displays.
            </p>
        </div>
      </div>

      <!-- Overview -->
      <div v-if="format == 'nutshell'">
        <h2>Previously I worked at <u>SRM Architecture and Marketing</u> as a graphic designer & developer on a wide variety of projects. I attended <u>Western Washington University</u> and graduated with a BA in Graphic Design. </h2>
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
          return this.model.past;
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
