<template>
  <div :id="'phase__' + id">
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
  </div>
</template>

<script>
  import resumePhase from './resumePhase';

  export default {
    mixins : [ resumePhase ],

    components : {
    },

    props : {
    },

    data() {
      return {
        urlsSwap : [],
        swapping : false,
        loading : false,

      }
    },

    computed : {
      urls : {
        get() {
          return store.resume.model.portraitUrls;
        },
        set(val) {
          store.resume.model.portraitUrls = val;
        }
      }
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
        console.log('update portrait', this.model);
        this.swapping = true;
        if (this.model) {
          axios.post('/img/portrait', this.model)
          .then(response => {
            this.urlsSwap = response.data;
            this.$nextTick(() => {
              this.loadImage(this._swap);
            })
          })
          .catch(function (error) {
            console.log(error);
          });
          this.loading = true;
        }
      },

      afterEnter() {
        console.log('entered');
        this.urls = this.urlsSwap;
        window.setTimeout( ()=> {
          this.loadImage(this.$refs['base']);
        }, 25);
      },

      loadImage(el) {
        window.imageLoader.load(el, true);
      }
    },

    mounted() {
      this.loadImage(this.$refs['base']);
      this._swap = this.$refs['swap'];
      this.updatePortrait();

      this._swap.addEventListener('loaded', () => {
        this.swapping = false;
        this.loading = false;

        window.setTimeout(() => {
          this.afterEnter();
        }, 300);
      });
    },

  }
</script>
