@extends('archived-project')

@section('title', 'Relay For Life')

@section('heading', 'Relay For Life Poster Series')

@section('desc')
  <h5>"Oh the places I would go to find a cure".</h5>
  <p>
    In 20ll, Relay for Life (an event to raise money to find a cure for cancer) had the theme "Oh, the places I would go to find a cure." As a participant of this years event, I decided to do a series of posters based off of this phrase. Each poster is a two color design depicting an off-beat place to go to find a cure.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">

    {{-- Book --}}
    <div class="g__row">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/relay/relay-poster-01.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-02.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-03.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-04.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-05.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-06.jpg')}}',
            '{{asset('img/projects/relay/relay-poster-07.jpg')}}',
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
      <li>2011</li>
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
