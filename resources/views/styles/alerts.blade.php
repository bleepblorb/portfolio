{{-- Typography --}}
<section id="buttons" class="">
  <div class="row mb-3">
    <div class="g__col">
      <h3 class="text-muted">Alerts</h3>
    </div>
  </div>

  {{-- Basic --}}
  <div class="row my-4">
    <div class="g__col12">
      <h6 class="caps">Basic Colors</h6>
      <hr>
    </div>
    <div class="g__col12">
      <div class="alert alert--info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
      <div class="alert alert--success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert--warning" role="alert">
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
      </div>
      <div class="alert alert--danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>
    </div>
  </div>


  {{-- Dismisable --}}
  <div class="row my-4">
    <div class="g__col12">
      <h6 class="caps">Dismissible alert</h6>
      <hr>
    </div>
    <div class="g__col12">
      <div class="alert alert--info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        You can get rid of me if you want...
      </div>
    </div>
  </div>


  {{-- Basic --}}
  <div class="row my-4">
    <div class="g__col12">
      <h6 class="caps">HTML alert</h6>
      <hr>
    </div>
    <div class="g__col12">
      <div class="alert alert--info" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <p class="">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        <p class="mb-0"><button type="button" class="btn btn-success" data-dismiss="alert">Got It!</button></p>
      </div>
    </div>
  </div>
</section>
