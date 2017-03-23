<template>
  <div v-if="state.showIntro" id="resume__intro" key="intro">
    <div class="container -max--xl">
      <div class="g__row -align-items--center">
        <div class="g__col8">
          <img src="/img/resume-builder-lg.svg" class="img-fluid" alt="">
        </div>
        <div class="g__col4">
          <h5 class="c--gummy">Adam's Resumé Builder</h5>
          <h2 class="c--late-night">Build the designer you’ve been dreaming of!<sup>*</sup></h2>
          <h5 class="c--gray-light">*so long as its me</h5>
          <p class="mt-4">
            <button @click="start()" class="btn btn-primary"> Lets Go! </button>
          </p>
          <h6 class="t--sans">
            <a href="#" class="c--gray">I'm boring, just show me a resume <span class="i--arrow"></span></a>
          </h6>
        </div>
      </div>
    </div>
  </div>
</template>
