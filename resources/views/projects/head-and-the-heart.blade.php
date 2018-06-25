@extends('archived-project')

@section('title', 'Head and the Heart')

@section('heading', 'Head and the Heart Illustrations')

@section('desc')
  <p>  
    A set of illustrations based off of lyrics from the album 'The Head And The Heart'.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/head-heart/hh-illustration-01.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-02.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-03.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-04.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-05.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-06.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-07.jpg')}}',
            '{{asset('img/projects/head-heart/hh-illustration-08.jpg')}}',
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
