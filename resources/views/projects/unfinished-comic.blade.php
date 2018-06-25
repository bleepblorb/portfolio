@extends('archived-project')

@section('title', 'Unfinished Comic')

@section('heading', 'Unfinished Comic')

@section('desc')
  <p>  
    An exploration of illustration and storytelling for a class project. I had a lot of ideas, but much less time. Below is a few random pages from my untitled comic about a young boy and his cat going on one crazy adventure.
  </p>
@endsection

@section('body')

  <div class="container -max--md">
    <div class="g__row">
      <div class="g__col">
        <img src="{{asset('img/projects/comic/unfinished-comic-01.jpg')}}" class="-fluid" alt="">
        <img src="{{asset('img/projects/comic/unfinished-comic-02.jpg')}}" class="-fluid" alt="">
        <img src="{{asset('img/projects/comic/unfinished-comic-03.jpg')}}" class="-fluid" alt="">
        <img src="{{asset('img/projects/comic/unfinished-comic-04.jpg')}}" class="-fluid" alt="">
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
      <li>2010</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Skills</h5>
    <ul>
      <li>Illustration</li>
    </ul>
  </div>
@endsection
