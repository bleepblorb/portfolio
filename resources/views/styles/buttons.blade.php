{{-- Typography --}}
<section id="buttons" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Buttons</h3>
    </div>
  </div>
  {{-- Size --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Sizes</h6>
      <hr>
    </div>
    <div class="col-6">
      <p>
        <button type="button" class="btn btn-sm">Small Button</button>
        <button type="button" class="btn">Normal Button</button>
        <button type="button" class="btn btn-lg">Large Button</button>
      </p>
    </div>
    <div class="col-6">
      <button type="button" class="btn btn-block">Block Button</button>
    </div>
  </div>
  {{-- Colors --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Colors</h6>
      <hr>
    </div>
    <div class="col-12">
      <button type="button" class="btn">Default</button>
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-success">Sucess</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-link">Link</button>
    </div>
  </div>
  {{-- Outline --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Outline Alternates</h6>
      <hr>
    </div>
    <div class="col-12">
      <button type="button" class="btn btn-outline-primary">Primary</button>
      <button type="button" class="btn btn-outline-secondary">Secondary</button>
      <button type="button" class="btn btn-outline-success">Success</button>
      <button type="button" class="btn btn-outline-info">Info</button>
      <button type="button" class="btn btn-outline-warning">Warning</button>
      <button type="button" class="btn btn-outline-danger">Danger</button>
    </div>
  </div>

  {{-- States --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">States</h6>
      <hr>
    </div>
    <div class="col-12">
      <button type="button" class="btn active">Active</button>
      <button type="button" class="btn" disabled>Disabled</button>
    </div>
  </div>

  {{-- Groups --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Button Groups</h6>
      <hr>
    </div>
    <div class="col-12">
      <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>
      <div class="btn-group btn-group">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>
      <div class="btn-group btn-group-lg">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>

    </div>
    <div class="col-12">
      <div class="btn-group-vertical btn-group-sm">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>
      <div class="btn-group-vertical">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>
      <div class="btn-group-vertical btn-group-lg">
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
        <button type="button" class="btn btn-secondary">Button</button>
      </div>
    </div>
    <div class="col-12">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-secondary">1</button>
        <button type="button" class="btn btn-secondary">2</button>

        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- Toggling --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Toggling</h6>
      <hr>
    </div>
    <div class="col-12">
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Single toggle
      </button>
    </div>
  </div>


  {{-- Checkboxes --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Checkboxes</h6>
      <hr>
    </div>
    <div class="col-12">
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary active">
          <input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
        </label>
        <label class="btn btn-primary">
          <input type="checkbox" autocomplete="off"> Checkbox 2
        </label>
        <label class="btn btn-primary">
          <input type="checkbox" autocomplete="off"> Checkbox 3
        </label>
      </div>
    </div>
  </div>

  {{-- Radials --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Radials</h6>
      <hr>
    </div>
    <div class="col-12">
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
        </label>
      </div>
    </div>
  </div>
</section>
