<template>
  <resume-phase :id="id">
    <div id="portrait" :class="{'-swapping' : swapping}">
        <div class="portrait__image" ref="base"
          data-image-load
          :data-src="urls.xs ? urls.xs : false"
          :data-src-sm="urls.sm ? urls.sm : false"
          :data-src-md="urls.md ? urls.md : false"
          :data-src-lg="urls.lg ? urls.lg : false"
          :data-src-xl="urls.xl ? urls.xl : false"
        ></div>

        <div class="portrait__image swapper" ref="swap" style="z-index:2"
          data-image-load
          :data-src="urlsSwap.xs ? urlsSwap.xs : false"
          :data-src-sm="urlsSwap.sm ? urlsSwap.sm : false"
          :data-src-md="urlsSwap.md ? urlsSwap.md : false"
          :data-src-lg="urlsSwap.lg ? urlsSwap.lg : false"
          :data-src-xl="urlsSwap.xl ? urlsSwap.xl : false"
        ></div>

        <transition
            name="loading"
            type="transition"
        >
          <div class="loader" v-show="loading"></div>
        </transition>
    </div>
  </resume-phase>
</template>

<script>
  import resumePhase from './resumePhase';

  export default {
    mixins : [ resumePhase ],

    components : {
      resumePhase
    },

    props : {
    },

    data() {
      return {
        urls : [],
        urlsSwap : [],
        swapping : false,
        loading : true,
      }
    },

    computed : {
    },

    watch : {
      model : {
        handler() {
          this.updatePortrait();
        },
        deep : true
      }
    },

    methods : {
      updatePortrait() {
        if (this.model) {
          axios.post('/img/portrait', this.model)
          .then(response => {
            let swap = this.$refs['swap'];
            this.urlsSwap = response.data;
            this.$nextTick(() => {
              window.bLazy.load(swap, true);
            })
          })
          .catch(function (error) {
            console.log(error);
          });
          this.loading = true;
        }
      },

      afterEnter() {
        // console.log('entered');
        this.urls = this.urlsSwap;
        window.setTimeout( ()=> {
          window.bLazy.load(this.$refs['base'], true);
          this.swapping = false;
          this.loading = false;
        }, 25);
      }
    },

    mounted() {
      this.updatePortrait();

      let swap = this.$refs['swap'];
      swap.addEventListener('loaded', () => {
        // console.log('loaded');
        this.swapping = true;
        this.loading = false;

        window.setTimeout(() => {
          this.afterEnter();
        }, 250);
      });
    },

  }
</script>
