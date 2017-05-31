{{-- Dropdowns --}}
<section id="type" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Dropdowns</h3>
    </div>
  </div>
  {{-- Single Dropdown --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Basic Dropdowns</h6>
      <hr>
      <p>
          <dropdown position="bottom">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Click to Open
            </button>
              <a class="dropdown__item" href="#">Action</a>
              <a class="dropdown__item" href="#">Another action</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>
        </p>
        <p>
          <dropdown trigger="hover" position="bottom" :close-on-select="false">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Hover to Open
            </button>
              <a class="dropdown__item" href="#">Action</a>
              <a class="dropdown__item" href="#">Another action</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>
        </p>
        <p>
          This is a random
          <dropdown >
            <a href="#" slot="target">Dropdown</a>
            <a class="dropdown__item" href="#">Action</a>
            <a class="dropdown__item" href="#">Another action</a>
            <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>
          in a paragraph.
      </p>
    </div>
  </div>


  {{-- Dropdown Locations --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Dropdowns Directions</h6>
      <hr>
      <p>
          <dropdown position="bottom">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Bottom (Default)
            </button>

            <a class="dropdown__item" href="#">Action</a>
            <a class="dropdown__item" href="#">Another action</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>

          <dropdown position="top">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Open on Top
            </button>

            <a class="dropdown__item" href="#">Action</a>
            <a class="dropdown__item" href="#">Another action</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>

          <dropdown position="middle">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Open in Middle
            </button>
            <a class="dropdown__item" href="#">Action</a>
            <a class="dropdown__item" href="#">Another action</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>

          <dropdown position="right">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Open Right
            </button>
            <a class="dropdown__item" href="#">Action</a>
            <a class="dropdown__item" href="#">Another action</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
            <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>

          <dropdown position="left">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
              Open Left
            </button>
              <a class="dropdown__item" href="#">Action</a>
              <a class="dropdown__item" href="#">Another action</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
              <a class="dropdown__item" href="#">Something else here</a>
          </dropdown>
      </p>
    </div>
  </div>


    {{-- Max Height --}}
    <div class="row my-4">
      <div class="col-12">
        <h6 class="caps">Setting a Max Hight</h6>
        <hr>
        <p><code>:max-height="200"</code></p>
        <p>
            <dropdown position="bottom" :max-height="200">
              <button class="btn btn-secondary dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false" slot="target">
                Max of 200px
              </button>
                <a class="dropdown__item" href="#">Action</a>
                <a class="dropdown__item" href="#">Another action</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <a class="dropdown__item" href="#">Something else here</a>
            </dropdown>
        </p>
      </div>
    </div>

    {{-- Button Group --}}
    <div class="row my-4">
      <div class="col-12">
        <h6 class="caps">Split Button Dropdown</h6>
        <hr>
        <p>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary">Action</button>
            <dropdown class="btn btn-secondary dropdown-toggle dropdown-toggle-split" position="bottom">
                <span  slot="target"><span class="sr-only">Toggle Dropdown</span></span>

                <a class="dropdown__item" href="#">Action</a>
                <a class="dropdown__item" href="#">Another action</a>
                <a class="dropdown__item" href="#">Something else here</a>
                <span class="dropdown__divider"></span>
                <a class="dropdown__item" href="#">Separated link</a>
            </dropdown>
          </div>
        </p>
      </div>
    </div>


    {{-- Anything --}}
    <div class="g__row my-4">
      <div class="g__col12">
        <h6 class="caps">Dropdown With Anything</h6>
        <hr>
          <dropdown :close-on-select="false" position="middle">
              <icon slot="target" name="delete"></icon>
            </button>
            <div class="p-2 -max--sm">
              <div class="g__row">
                <div class="g__col">
                  <h3>Trash it?</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                  <p>
                    <button type="button" name="button" class="btn btn-secondary">Close</button>
                    <button type="button" name="button" class="btn btn-success">Yeah</button>
                  </p>
                </div>
              </div>
            </div>
          </dropdown>
          <p class="small">Cannot be placed inside an <code>p</code> or other inline element</p>
      </div>
    </div>
</section>
