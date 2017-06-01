{{-- Typography --}}
<section id="buttons" class="">
  <div class="g__row mb-3">
    <div class="col">
      <h3 class="text-muted">Buttons</h3>
    </div>
  </div>
  {{-- Size --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Sizes</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <v-button size="sm">Small Button</v-button>
        <v-button>Normal Button</v-button>
        <v-button size="lg">Large Button</v-button>
      </p>
    </div>
    {{-- <div class="g__col6">
      <v-button :block="true" >Block Button</v-button>
    </div> --}}
  </div>
  {{-- Colors --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Colors</h6>
      <hr>
    </div>
    <div class="g__col12">
      <v-button>Default</v-button>
      <v-button color="primary">Primary</v-button>
      <v-button color="secondary">Secondary</v-button>
    </div>
    <div class="g__col12 mt-2">
      <v-button color="info">Info</v-button>
      <v-button color="success">Success</v-button>
      <v-button color="warning">Warning</v-button>
      <v-button color="danger">Danger</v-button>
      <button type="button" class="btn -link">Link</button>
    </div>
  </div>
  {{-- Outline --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Outline Alternates</h6>
      <hr>
    </div>
    <div class="g__col12">
      <v-button variant="outline">Default</v-button>
      <v-button variant="outline" color="primary">Primary</v-button>
      <v-button variant="outline" color="secondary">Secondary</v-button>
    </div>
    <div class="g__col12 mt-2">
      <v-button variant="outline" color="success">Success</v-button>
      <v-button variant="outline" color="info">Info</v-button>
      <v-button variant="outline" color="warning">Warning</v-button>
      <v-button variant="outline" color="danger">Danger</v-button>
    </div>
  </div>

  {{-- Rounded Alternatives --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Rounded Alternates</h6>
      <hr>
    </div>
    <div class="g__col12">
      <v-button size="sm" class="-rounded">Small Button</v-button>
      <v-button class="-rounded">Normal Button</v-button>
      <v-button size="lg" class="-rounded">Large Button</v-button>
    </div>
    <div class="g__col12 mt-2">
      <v-button size="sm" variant="outline" class="-rounded">Small Button</v-button>
      <v-button variant="outline" class="-rounded">Normal Button</v-button>
      <v-button size="lg" variant="outline" class="-rounded">Large Button</v-button>
    </div>
  </div>

  {{-- States --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">States</h6>
      <hr>
    </div>
    <div class="g__col12">
      <v-button>Standard</v-button>
      <v-button class="active">Active</v-button>
      <v-button disabled >Disabled</v-button>
    </div>
    <div class="g__col12 mt-2">
      <v-button variant="outline">Standard</v-button>
      <v-button variant="outline" class="active">Active</v-button>
      <v-button variant="outline" disabled >Disabled</v-button>
    </div>
  </div>

  {{-- Groups --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Button Groups</h6>
      <hr>
    </div>
    <div class="g__col12">
      <div class="btn-group -sm">
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
      </div>
    </div>
    <div class="g__col12 mt-2">
      <div class="btn-group">
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
      </div>
    </div>
    <div class="g__col12 mt-2">
      <div class="btn-group -lg">
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
      </div>
    </div>
    <div class="g__col12 mt-2">
      <div class="btn-group--vertical -sm">
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
        <v-button variant="outline">Standard</v-button>
      </div>
      <div class="btn-group--vertical">
        <v-button variant="outline">Button</v-button>
        <v-button variant="outline">Button</v-button>
        <v-button variant="outline">Button</v-button>
      </div>
      <div class="btn-group--vertical -lg">
        <v-button variant="outline">Button</v-button>
        <v-button variant="outline">Button</v-button>
        <v-button variant="outline">Button</v-button>
      </div>
    </div>

  </div>


</section>
