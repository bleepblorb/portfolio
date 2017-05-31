{{-- Dropdowns --}}
<section id="type" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Popovers</h3>
    </div>
  </div>

  {{-- Popover --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Basic Popover</h6>
      <hr>
      <p>
        An inline <popover title="Title Here" content="this is some content"> <a href="#">popover</a></popover> is easy peasy.
      </p>
    </div>
  </div>
</section>

  {{-- Opening Popovers --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Opening / Closing Popovers</h6>
      <hr>
      <p>
        <popover content="easy peasy... lemon squeezy" >
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Hover (default)
          </button>
        </popover>
        <popover content="Made ya work for it" triggers="click" >
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Click
          </button>
        </popover>

        <popover content="Gonna have to close me" triggers="click" :click-off="false">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Disabled Click Off
          </button>
        </popover>
      </p>
    </div>
  </div>

  {{-- Popover Directions --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Popover Directions</h6>
      <hr>
      <p>
        <popover content="Top Dog" position="top">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Top (default)
          </button>
        </popover>

        <popover content="Down Unda" position="bottom">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Bottom
          </button>
        </popover>

        <popover content="Correct" position="right">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Right
          </button>
        </popover>

        <popover content="nothing creative" position="left">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Left
          </button>
        </popover>

      </p>
    </div>
  </div>

  {{-- Popover Content --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Popover Content</h6>
      <hr>
      <p>
        <popover
        content="Just content"
        position="top">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Just Content
          </button>
        </popover>

        <popover
        title="This is a title"
        content="And this is the content"
        position="top">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            With Title
          </button>
        </popover>
      </p>
    </div>
  </div>
</section>
