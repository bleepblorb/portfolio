@extends('archived-project')

@section('title', 'Goalbook Planner')

@section('heading', 'Goalbook Student Planner')

@section('desc')
  <p>
    The Goalbook planner is a weekly student planner based around the notion of goal-oriented planning. It has places for quarterly, weekly, and daily goals. The project was a study of paper folders, with an emphasis on folder design, and proper use of substrates – including weight, grain direction, scoring, perforating, and more.
  </p>
@endsection

@section('body')

  <div class="container -max--xl">
    <div class="g__row -max--xl mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/goalbook/goalbook-01.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-02.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-08.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-03.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-07.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-04.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-05.jpg')}}',
            '{{asset('img/projects/goalbook/goalbook-06.jpg')}}',
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
      <li>Graphic Design</li>
      <li>Die-Line Creation</li>
      <li>Illustration</li>
    </ul>
  </div>
@endsection
