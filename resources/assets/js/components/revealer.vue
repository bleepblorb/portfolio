<template>
  <div class="revealer" ref="revealer">
    <transition-group name="list" tag="ul">
      <li class="revealer__item" v-for="(n, index) in randomOptions" :key="n" :style="" v-if="index < activeIndex">{{n}}</li>
    </transition-group>
    <div @click.prevent="reveal" key="more" ref="more" v-if="activeIndex < length" class="t--h5 revealer__clicker">+ more</div>
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
            let container = document.querySelector('.tester');

            let items = this.$refs.revealer.querySelectorAll('.revealer__item');
            let scroll = items[items.length - 1].clientHeight;

            this.setHeight();
            // window.setTimeout( () => {
            //   window.scrollBy(0, scroll);
            // }, 600);
            let curScrollTop = window.pageYOffset;

            Velocity( document.body ,"scroll", { duration: 450, offset: window.pageYOffset + scroll, mobileHA: false }, "linear");
          });
        }
      },

      reverse(index) {
        return this.randomOptions.slice(0, index);
      },

      setHeight(dur = 450) {
        let height = 0;
        let container = this.$refs.revealer;

        Array.from(container.children).forEach( item => {
          height += item.clientHeight;
        });

        Velocity( container, {height: height}, { duration: dur, }, "linear");

        document.querySelector('body').style.overflow = 'hidden';
        window.setTimeout( () => {
          document.querySelector('body').style.overflow = '';
        }, dur);
      }

    },

    created() {
    },

    mounted() {
      this.setHeight();
      window.addEventListener('resize', () => {
        this.setHeight(0);
      });
    }
  }

</script>
