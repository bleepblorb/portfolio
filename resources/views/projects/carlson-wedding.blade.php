@extends('archived-project')

@section('title', 'Carlson Wedding')

@section('heading', 'Carlson Wedding')

@section('desc')
  <p>
    When one of my best buds was tying the knot I had to help him get married in style. As a gift to the couple, I illustrated, designed, and letterpressed their save the dates.
  </p>
@endsection

@section('body')

  <div class="container -max--md">
    <div class="g__row mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/carlson-wedding/carlson-std-03.jpg')}}',
            '{{asset('img/projects/carlson-wedding/carlson-std-02.jpg')}}',
            '{{asset('img/projects/carlson-wedding/carlson-std-01.jpg')}}',
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
      <li>Personal Project</li>
    </ul>

    <h5>Year</h5>
    <ul>
      <li>2012</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Skills</h5>
    <ul>
      <li>Graphic Design</li>
      <li>Illustration</li>
      <li>Letterpress</li>
    </ul>
  </div>
@endsection
