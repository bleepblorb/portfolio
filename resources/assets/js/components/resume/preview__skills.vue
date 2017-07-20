<template>
  <div :id="'phase__'+ id">
    <!-- More overview / Interests -->
    <div class="g__row">
    <!-- Skill Lists  -->
      <div class="g__col6--@sm skill-list" v-if="model.skills.indexOf('print') > -1">
        <div class="card">
          <div class="card-block">
            <h4>ink —</h4>
            <ul class="-relaxed">
              <li>Print Design &amp; Production</li>
              <li>Environmental Graphics</li>
              <li>Signage &amp; Wayfinding</li>
              <li>Screen Printing</li>
              <li>Letterpress Printing</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="g__col6--@sm skill-list" v-if="model.skills.indexOf('digital') > -1">
        <div class="card">
          <div class="card-block">
            <h4>pixels —</h4>
            <ul class="-relaxed">
              <li>Branding / Logos</li>
              <li>Web / Digital Design</li>
              <li>Iconography</li>
              <li>Illustration</li>
              <li>Photo Editing</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="g__col6--@sm skill-list" v-if="model.skills.indexOf('development') > -1">
        <div class="card">
          <div class="card-block">
            <h4>bytes —</h4>
            <ul class="-relaxed">
              <li>HTML, LESS, SCSS, jQuery, PHP</li>
              <li>Bootstrap, UIkit</li>
              <li>Laravel, CraftCMS, Wordpress</li>
              <li>Composer, NPM</li>
              <li>Vagrant</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="g__col6--@sm skill-list" v-if="model.skills.indexOf('other') > -1">
        <div class="card">
          <div class="card-block">
            <h4 class="">etc —</h4>
            <ul class="-relaxed">
              <li>Baked goods</li>
              <li>Book binding</li>
              <li>Unicycling</li>
              <li>Spoon carving</li>
              <li>Entry level Ukelele skills</li>
            </ul>
          </div>
        </div>
      </div>
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
