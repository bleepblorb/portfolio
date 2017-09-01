<section id="carousels" class="">
  <div class="g__row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Carousels</h3>
    </div>
  </div>
  {{-- Size --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <carousel
        :images="[
          'http://unsplash.it/1200/600/?random',
          'http://unsplash.it/1200/600/?random',
        ]"
        caption="This is the caption for the carousel"
      ></carousel>
    </div>
    <div class="g__col12">
      <carousel>
        <div class="carousel__item">
          <div class="card p-6">Slide 1</div>
        </div>
        <div class="carousel__item">
          <div class="card p-6">Slide 2</div>
        </div>
        <div class="carousel__item">
          <div class="card p-6">Slide 3</div>
        </div>
      </carousel>
    </div>
  </div>
</section>
