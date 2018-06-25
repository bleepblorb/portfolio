@extends('archived-project')

@section('title', 'SEGD Brochure')

@section('heading', 'SEGD Brochure')

@section('desc')
  <p>
    A mailer / brochure for a SEGD (Society for Environmental Graphic Designers) conference. The event is located in Los Angeles and is themed around the city and its influence on environmental graphic design. All text, graphics, printing methods, and general page order were provided by the client. The goal was to generate a brochure mailer that could be used to attract potential conference attendees, as well as be a resource during the event.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/segd/segd-print-01.jpg')}}',
            '{{asset('img/projects/segd/segd-print-02.jpg')}}',
            '{{asset('img/projects/segd/segd-print-03.jpg')}}',
            '{{asset('img/projects/segd/segd-print-04.jpg')}}',
            '{{asset('img/projects/segd/segd-print-05.jpg')}}',
            '{{asset('img/projects/segd/segd-print-06.jpg')}}',
            '{{asset('img/projects/segd/segd-print-07.jpg')}}',
            '{{asset('img/projects/segd/segd-print-08.jpg')}}',
            '{{asset('img/projects/segd/segd-print-09.jpg')}}',
            '{{asset('img/projects/segd/segd-print-10.jpg')}}',
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
      <li>Print Design</li>
    </ul>
  </div>
@endsection
