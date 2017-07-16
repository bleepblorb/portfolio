<template>
  <div class="revealer" ref="revealer">
    <div>
      <h4 class="c--gray-light">Adam Volkman —</h4>
      <h1 class="mb-0">Designer, developer, doodler.</h1>
    </div>

    <transition-group  name="list" tag="ul" class="t--h1">
      <li class="revealer__item" v-for="(n, index) in randomOptions" :key="n" :style="" v-if="index < activeIndex">{{n}}</li>
    </transition-group>

    <div @click.prevent="reveal" key="more" ref="more" class="revealer__clicker" :class="{ '-no-show' : activeIndex >= length}">+ more</div>
  </div>
</template>

<script>

  export default {

    props : {
      id : {
        type : String,
        default : null
      },
      options : {
        type : Array,
        required : true
      },
      index : {
        type : Number,
        default : 1
      },
      active : {
        type : Boolean,
        default : true
      }
    },

    data() {
      return {
        activeIndex : this.index,
        containerHeight : 0,
      }
    },

    computed : {
      length() {
        return this.randomOptions.length;
      },
      randomOptions() {
        let opts = _.shuffle(this.options);
        opts.push("Thats about it...");

        return opts;
      }
    },

    methods : {
      reveal() {
        if (!this.active) { return;}

        if ( this.activeIndex < this.length ) {
          this.activeIndex ++;

          this.$nextTick( () => {

            let items = this.$el.querySelectorAll('.revealer__item');
            let scroll = items[items.length - 1].clientHeight;
            
            this.setHeight(this.$el, 450);

            let curScrollTop = window.pageYOffset;

            window.setTimeout( () => {

              this.setHeight(this._container);
              // Velocity( document.body ,"scroll", { duration: 50, offset: window.pageYOffset + scroll, mobileHA: false }, "linear");
              window.scrollBy(0, scroll);

            }, 460)

          });
        }
      },

      reverse(index) {
        return this.randomOptions.slice(0, index);
      },

      setHeight(el, dur = 0) {
        let height = 0;
        console.log(el);

        Array.from(el.children).forEach( item => {
          console.log(item, item.clientHeight);
          height += item.clientHeight;
        });

        if(dur > 0) {
          Velocity( el, {height: height}, { duration: dur, easing: "ease" });
        }
        else {
          el.style.height = height + 'px';
        }

        document.querySelector('body').style.overflow = 'hidden';
        window.setTimeout( () => {
          document.querySelector('body').style.overflow = '';
        }, dur);
      }

    },

    created() {
    },

    mounted() {
      this._container = document.querySelector('.about__intro');

      this.setHeight(this.$el);
      this.setHeight(this._container);

      window.addEventListener('resize', () => {
        this.setHeight(this._container);
        this.setHeight(this.$el);
      });
    }
  }

</script>
