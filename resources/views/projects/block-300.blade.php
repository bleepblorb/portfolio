@extends('archived-project')

@section('title', 'Block 300')

@section('heading', 'Block 300')

@section('desc')
  <p class="">
    A complete re-brand of a commercial building in downtown portland. The client wanted the building to have a refreshed identity that was clean and modern, but didn't completely abandon the history of the building and surrounding area. SRM was resopsible for renaming the building, branding, print matierial, website, exterior signage, and a custom leasing center.
  </p>
@endsection

@section('body')

  <div class="container -max--xl">
    <div class="g__row">
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/block-300/block-300-logo.png')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/block-300/block-300-web-home.jpg')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/block-300/block-300-web-downloads.jpg')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/block-300/block-300-web-floorplans.gif')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/block-300/block-300-web-map.gif')}}" alt="" class="-fluid">
      </div>
    </div>
    <div class="g__row -max--md -center">
      <div class="g__col">
        <carousel
          class="mt-7"
          :images="[
            '{{asset('img/projects/block-300/block-300-interior.jpg')}}',
            '{{asset('img/projects/block-300/block-300-interior-signage.jpg')}}',
            '{{asset('img/projects/block-300/block-300-exterior-vinyl.jpg')}}',
            '{{asset('img/projects/block-300/block-300-exterior-vinyl-close.jpg')}}',
            '{{asset('img/projects/block-300/block-300-exterior-signs.jpg')}}',
          ]"
          caption="Leasing Center Graphics &amp; Signage. ©SRM Architecture"
        ></carousel>
      </div>
    </div>
  </div>


@endsection

@section('credits')
  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>SRM Architecture and Marketing</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2013</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Logo Design</li>
      <li>Brand Development</li>
      <li>Web Design / Development</li>
      <li>Exterior Signage</li>
      <li>Branded Environment</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://amandabadgley.com/" target="_blank">Amanda Badgley</a>, Creative Director</li>
      <li><a href="http://benisonline.com/" target="_blank">Ben Patterson</a>, Designer</li>
    </ul>
  </div>

@endsection
