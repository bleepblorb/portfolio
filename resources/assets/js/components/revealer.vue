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
        return this.options.length;
      },
      randomOptions() {
        return _.shuffle(this.options);
      }
    },

    methods : {
      reveal() {
        if (!this.active) { return;}

        if ( this.activeIndex < this.length ) {
          this.activeIndex ++;

          this.$nextTick( () => {
            this.setHeight();

            let items = this.$refs.revealer.querySelectorAll('.revealer__item');
            let scroll = items[items.length - 1].clientHeight;

            let curScrollTop = window.pageYOffset;

            Velocity( document.body ,"scroll", { duration: 600, offset: window.pageYOffset + scroll, mobileHA: false }, "linear");
          });
        }
      },

      reverse(index) {
        return this.randomOptions.slice(0, index);
      },

      setHeight(dur = 600) {
        let height = 0;

        Array.from(this.$el.children).forEach( item => {
          height += item.clientHeight;
        });

        Velocity( this.$refs.revealer, {height: height}, { duration: dur, }, "linear");
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
