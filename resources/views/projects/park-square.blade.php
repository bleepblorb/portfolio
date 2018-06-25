@extends('archived-project')

@section('title', '100 Park Square')

@section('heading', '100 Park Square')

@section('desc')
  <p>
    After our very successful launch of the refreshed Block300 building. W3 Partners came to SRM to give their downtown building an identity refresh alongside it's upcoming interior remodel. We gave the building a new name, identity, print collateral, exterior signage, website, and branded leasing center. While I touched every point of the project in some way, my main responsibilities were brand direction, exterior signage, and the web design & development.
  </p>
@endsection

@section('body')

  <div class="container -max--xl">
    
    {{-- Signage --}}
    <div class="g__row -max--xl -center mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/park-square/ps-signage-01.jpg')}}',
            '{{asset('img/projects/park-square/ps-signage-02.jpg')}}',
            '{{asset('img/projects/park-square/ps-signage-04.jpg')}}',
            '{{asset('img/projects/park-square/ps-signage-03.jpg')}}',
            '{{asset('img/projects/park-square/ps-signage-07.jpg')}}',
            '{{asset('img/projects/park-square/ps-signage-05.jpg')}}',
          ]"
          caption="Signage &amp; Graphics. ©SRM Architecture"
        ></carousel>
      </div>
    </div>

    {{-- Web --}}
    <div class="g__row -align-items--center">
            <div class="g__col12 g__col6--@md t--center">
              <img src="{{asset('img/projects/park-square/ps-web-04.jpg')}}" alt="" class="-fluid mb-4">
              <img src="{{asset('img/projects/park-square/ps-web-01.jpg')}}" alt="" class="-fluid mb-4">
            </div>
            <div class="g__col12 g__col--@md t--center">
              <img src="{{asset('img/projects/park-square/ps-web-02.jpg')}}" alt="" class="-fluid mb-4">
              <img src="{{asset('img/projects/park-square/ps-web-03.jpg')}}" alt="" class="-fluid">
            </div>
          </div>

    {{-- Marketing Center --}}
    <div class="g__row -max--xl -center">
      <div class="g__col">
        <carousel
          class="mt-7"
          :images="[
            '{{asset('img/projects/park-square/ps-marketing-center-03.jpg')}}',
            '{{asset('img/projects/park-square/ps-marketing-center-01.jpg')}}',
            '{{asset('img/projects/park-square/ps-marketing-center-02.jpg')}}',
          ]"
          caption="Marketing Center. ©SRM Architecture"
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
      <li>2014</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Role</h5>
    <ul>
      <li>Logo Design</li>
      <li>Brand Development</li>
      <li>Web Design / Development</li>
      <li>Signage</li>
    </ul>
  </div>

  <div class="credit-col">
    <h5>Team</h5>
    <ul>
      <li><a href="http://amandabadgley.com/" target="_blank">Amanda Badgley</a>, Creative Director</li>
      <li>Nathan Shigeta, Designer</li>
    </ul>
  </div>

@endsection
