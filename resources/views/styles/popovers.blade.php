{{-- Dropdowns --}}
<section id="type" class="">
  <div class="g__row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Popovers & Tooltips</h3>
    </div>
  </div>

  {{-- Popover --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Basic Popover</h6>
      <hr>
      <p>
        An inline <popover title="Title Here" content="this is some content"> <a href="#">popover</a></popover> is easy peasy.
      </p>
      <p>
        Just as easy as an inline <popover type="tooltip" content="this is some content"> <a href="#">tooltip</a></popover> is easy peasy.
      </p>
    </div>
  </div>
</section>

  {{-- Opening Popovers --}}
  <div class="g__row my-4">
    <div class="g__col12">
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
  <div class="g__row my-4">
    <div class="g__col12">
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
      <p>
        <popover type="tooltip" content="Top Dog" position="top">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Top (default)
          </button>
        </popover>

        <popover type="tooltip" content="Down Unda" position="bottom">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Bottom
          </button>
        </popover>

        <popover type="tooltip" content="Correct" position="right">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Right
          </button>
        </popover>

        <popover type="tooltip" content="nothing creative" position="left">
          <button class="btn btn-secondary" type="button" aria-haspopup="true" aria-expanded="false">
            Left
          </button>
        </popover>

      </p>
    </div>
  </div>

  {{-- Popover Content --}}
  <div class="g__row my-4">
    <div class="g__col12">
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


  {{-- tooltips Content --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Tooltips</h6>
      <hr>
      <p>
        <tooltip
        content="Just content"
        position="top">
          <v-button>Standard Tooltip</v-button>
        </tooltip>
      </p>
    </div>
  </div>
</section>
