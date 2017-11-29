@extends('archived-project')

@section('title', 'Hood River Distillers')

@section('heading', 'Hood River Distillers')

@section('desc')
  <p class="">
    A brand new tasting room features their lineup of spirits and other merch, as well as products from newly acquired Clear Creak Distillers. They are one of the oldest distillers in the area, so it was important to showcase their history throughout the space.
  </p>
@endsection

@section('body')
    <div class="container -max--wumbo mb-7">
        <div class="g__row">
            <div class="g__col">
            <carousel
                :images="[
                    '{{asset('img/projects/hrd/hrd-interior-bar.jpg')}}',
                    '{{asset('img/projects/hrd/hrd-interior-retail.jpg')}}',
                    '{{asset('img/projects/hrd/hrd-interior-timeline.jpg')}}',
                    '{{asset('img/projects/hrd/hrd-interior-timeline-detail.jpg')}}',
                    '{{asset('img/projects/hrd/hrd-interior-wall-graphic.jpg')}}',
                ]"
                caption="Interior Signage and Graphics. ©SRM Architecture"
            ></carousel>
            </div>
        </div>
    </div>

  <div class="container -max--xl">
    <div class="g__row -max--md -center mb-6">
        <div class="g__col">
            <h4>Temporary Privacy Vinyl</h4>
            <p>A vinyl window covering to block the view during construction, and also advertise the upcoming opening of the space.</p>
        </div>
    </div>
    <div class="g__row">
      <div class="g__col12 t--center mb-3">
        <img src="{{asset('img/projects/hrd/hrd-temp-vinyl-all.jpg')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 g__col6--@sm t--center mb-3">
        <img src="{{asset('img/projects/hrd/hrd-temp-vinyl-window.jpg')}}" alt="" class="-fluid">
      </div>
      <div class="g__col12 g__col6--@sm t--center mb-3">
        <img src="{{asset('img/projects/hrd/hrd-temp-vinyl-door.jpg')}}" alt="" class="-fluid">
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
      <li>2014</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Exterior Signage</li>
      <li>Branded Environment</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://amandabadgley.com/" target="_blank">Amanda Badgley</a>, Creative Director</li>
    </ul>
  </div>

@endsection
