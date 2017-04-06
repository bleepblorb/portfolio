{{-- Modal --}}

<section id="modals" class="">
  <div class="g__row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Modals</h3>
    </div>
  </div>

  {{-- Standard Types--}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Standard Modal</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','standardModal')">Launch Modal</button>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','centeredModal')">Centered Modal</button>
      </p>
    </div>
  </div>

  {{-- Sizes--}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Modal sizes</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','xlModal')">XL Modal</button>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','largeModal')">Large Modal</button>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','mediumModal')">Medium Modal</button>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','smallModal')">Small Modal</button>
      </p>
    </div>
  </div>



  {{-- Header & Footer --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Header &amp; Footer</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','headerModal')">Launch Modal</button>
      </p>
    </div>
  </div>

  {{-- Grid Modal --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Grid</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','gridModal')">Grid Modal</button>
      </p>
    </div>
  </div>

  {{-- Confirmation Modal --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Confirmation</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" @click="Emit('show::modal','confirmModal')">Confirmation Modal</button>
      </p>
    </div>
  </div>
</section>

{{-- Basic Modal --}}
<modal id="standardModal">
  <p>This is the most basic modal</p>
  <div style="height: 400px"></div>
  <p>bottom of modal</p>
</modal>

{{-- Centered Modal --}}
<modal id="centeredModal">
  <h4 class="c--jazzy">A centered Modal</h4>
  <p>Still nice and basic</p>
</modal>

{{-- Modal Sizes --}}
<modal id="xlModal" size="xl">
  <h4 class="c--jazzy">XL Modal</h4>
  <p>Still nice and basic</p>
</modal>

<modal id="largeModal" size="lg">
  <h4 class="c--jazzy">Large Modal</h4>
  <p>Still nice and basic</p>
</modal>

<modal id="mediumModal" size="md">
  <h4 class="c--jazzy">Medium Modal (default)</h4>
  <p>Still nice and basic</p>
</modal>

<modal id="smallModal" size="sm">
  <h4 class="c--jazzy">Small Modal</h4>
  <p>Still nice and basic</p>
</modal>

{{-- Header & Footer --}}

<modal id="headerModal" title="This is a header">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
  <p slot="modal-footer">This is the footer</p>
</modal>

{{-- Grid Modal --}}
<modal id="gridModal" title="Grid Modal">
  <div class="g__row t--center">
    <div class="g__col">
      <div class="card"> col 1 </div>
    </div>
    <div class="g__col">
      <div class="card"> col 2 </div>
    </div>
    <div class="g__col">
      <div class="card"> col 3 </div>
    </div>
  </div>
  <div class="g__row">
    <div class="g__col">
      <div class="card">col 12</div>
    </div>
  </div>
</div>

{{-- Confirm Modal --}}
<modal id="confirmModal" title="Confirmation Modal" confirmation>
  <h4 class="t--center">Are you sure you want to do that?</h4>
</div>
