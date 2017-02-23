{{-- Modal --}}

<section id="buttons" class="">
  <div class="g__row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Modals</h3>
    </div>
  </div>

  {{-- Size --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Standard Modal</h6>
      <hr>
    </div>
    <div class="g__col">
      <p>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#standardModal">Launch Modal</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#centeredModal">Centered Modal</button>
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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#fullModal">Launch Modal</button>
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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#gridModal">Launch Modal</button>
      </p>
    </div>
  </div>
</section>

{{-- standard Modal --}}
<div class="modal fade" id="standardModal">
  <div class="modal__dialog -max--sm" role="document">
    <div class="modal__content">
      <div class="modal__body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <p>Modal body text goes here. Modal body text goes here. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eius</p>
      </div>
    </div>
  </div>
</div>


{{-- Centered Modal --}}
<div class="modal fade modal--centered" id="centeredModal">
  <div class="modal__dialog -max--sm" role="document">
    <div class="modal__content">
      <div class="modal__body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <p>Modal body text goes here. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eius</p>
      </div>
    </div>
  </div>
</div>

{{-- Centered Modal --}}
<div class="modal fade modal--centered" id="fullModal">
  <div class="modal__dialog -max--sm" role="document">
    <div class="modal__content">
      <div class="modal__header">
        <h5 class="modal-title">Modal title</h5>
      </div>
      <div class="modal__body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal__footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{-- Grid Modal --}}
<div class="modal fade modal--centered" id="gridModal">
  <div class="modal__dialog -max--md" role="document">
    <div class="modal__content">
      <div class="modal__header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
        <h5 class="modal-title">Grid Modal</h5>
      </div>
      <div class="modal__body">
        <div class="conatiner t--center">
          <div class="g__row">
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
      </div>
    </div>
  </div>
</div>
