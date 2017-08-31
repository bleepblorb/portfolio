<template>
  <div class="carousel" >
    <div class="carousel__content" ref="carousel">
      <template v-if="images">
        <div class="carousel__item"
          v-for="image in images"
        >
          <img :src="image" alt="" class="carousel__image">
        </div>
      </template>
      <slot class="v-else"></slot>

      <!-- Navigation -->
      <div class="carousel__control-prev" @click="prev">
        <div class="carousel__control-prev-icon">
          <icon name="arrow__left-sm"></icon>
        </div>
      </div>
      <div class="carousel__control-next" @click="next">
        <div class="carousel__control-next-icon" >
          <icon name="arrow__right-sm"></icon>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="carousel__footer -max--lg -center">
      <div class="carousel__caption" v-text="caption"></div>
      <div class="carousel__counter">
        {{currentCell + 1}} / {{totalCells}}
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props : {
      index : {
        type: Number,
        default: 0
      },

      images : {
        type: Array,
        required: false
      },

      caption : {
        type: String
      }
    },

    data() {
      return {
        currentCell: this.index,

      }
    },

    computed : {
      totalCells() {
        if(this.images) {
          return this.images.length;
        } else {
          return 0;
        }
      }
    },

    methods : {
      getCurrentCell() {
        return this._carousel.selectedIndex;
      },

      prev() {
        this._carousel.previous();
      },

      next() {
        this._carousel.next();
      },
    },

    created() {
      let draggable = !window.matchMedia("(pointer: fine)").matches;
      console.log(draggable);

      this._options = {
        cellSelector: '.carousel__item',
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false,
        draggable: draggable,
        imagesLoaded: this.images ? true : false,
      }
    },

    mounted() {
      this._carousel = new window.Flickity( this.$refs.carousel, this._options );

      this._carousel.on( 'select', () => {
        this.currentCell = this.getCurrentCell();
      });

    }
  }
</script>
