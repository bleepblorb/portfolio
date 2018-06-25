@extends('archived-project')

@section('title', 'William James Quote')

@section('heading', 'William James Quote')

@section('desc')
  <h5>"The best use of life is to use it for something that outlasts it."</h5>
  <p>  
    A hand-lettered, one-color screen printed poster printed on French Paper 'Lift off Lemon'. It was created as a leave behind piece that went in our WWU Design Program <a href="/projects/senior-showcase">senior book</a>.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/quote/quote-lettering-01.jpg')}}',
            '{{asset('img/projects/quote/quote-lettering-02.jpg')}}',
            '{{asset('img/projects/quote/quote-lettering-03.jpg')}}',
          ]"
        ></carousel>
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
      <li>Illustration</li>
      <li>Lettering</li>
    </ul>
  </div>
@endsection
