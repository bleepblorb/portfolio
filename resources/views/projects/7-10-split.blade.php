@extends('archived-project')

@section('title', '7-10 Split')

@section('heading', 'Seven Ten Split')

@section('desc')
  <p>
    Logo exploration for an online retailer of bowling equipment — Seven Ten Split. I worked on generating a symbolic, a typographic, and combination mark for the company. The combination mark was then applied to basic collateral.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row t--center mb-6">
      <div class="g__col">
        <img src="{{asset('img/projects/7-10-split/7-10-split-logos.jpg')}}" class="-fluid" alt="">
      </div>
    </div>
    <div class="g__row mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/7-10-split/7-10-split-print-01.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-02.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-03.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-04.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-05.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-06.jpg')}}',
            '{{asset('img/projects/7-10-split/7-10-split-print-07.jpg')}}',
          ]"
        ></carousel>
      </div>
    </div>
  </div>
@endsection

@section('credits')
  <div class="credit-col">
    <h5>Firm</h5>
    <ul>
      <li>School Project</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2011</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Skills</h5>
    <ul>
      <li>Logo Design</li>
      <li>Branding</li>
    </ul>
  </div>
@endsection
