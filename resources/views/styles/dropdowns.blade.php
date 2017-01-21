{{-- Dropdowns --}}
<section id="type" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Dropdowns</h3>
    </div>
  </div>
  {{-- Single Dropdown --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Single Button Dropdown</h6>
      <hr>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          This dropdown's menu is right-aligned
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Split Button Dropdown --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Split Button Dropdown</h6>
      <hr>
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Action</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
  </div>

  {{-- DropUP variation --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Drop<b>up</b> Variation</h6>
      <hr>
      <!-- Default dropup button -->
      <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdup
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
  </div>

  {{-- All the Dropdown styles --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Dropdown Menu items</h6>
      <hr>
      <!-- Default dropup button -->
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Items
        </button>
        <div class="dropdown-menu">
          <h6 class="dropdown-header">Dropdown header</h6>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <a class="dropdown-item disabled" href="#">Disabled link</a>
        </div>
      </div>
    </div>
  </div>
</section>
