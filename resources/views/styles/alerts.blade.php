{{-- Typography --}}
<section id="alerts" class="">
  <div class="g__row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Alerts</h3>
    </div>
  </div>

  {{-- Basic --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Basic Colors</h6>
      <hr>
    </div>
    <div class="g__col12">
      <alert><strong>Alert!</strong> This is the default alert</alert>
      <alert variant="info">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </alert>

      <alert variant="success">
        <strong>Well done!</strong> You successfully read this important alert message.
      </alert>

      <alert variant="warning">
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
      </alert>

      <alert variant="danger">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </alert>
    </div>
  </div>


  {{-- Dismisable --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">Dismissible alert</h6>
      <hr>
    </div>
    <div class="g__col12">
      <alert variant="info" dismissable>
        You can get rid of me if you want...
      </alert>
    </div>
  </div>


  {{-- HTML --}}
  <div class="g__row my-4">
    <div class="g__col12">
      <h6 class="caps">HTML alert</h6>
      <hr>
    </div>
    <div class="g__col12">
      <alert variant="info">
        <h4 class="alert__heading">Alert Heading</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <p class="">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        <p class="mb-0">
          <a href="#" class="btn btn-success" data-dismiss="alert">Some Link</a>
          <a href="#" class="btn btn-danger" data-dismiss="alert">Another Link</a>
        </p>
      </alert>
    </div>
  </div>
</section>
