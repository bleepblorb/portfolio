@extends('archived-project')

@section('title', 'Creatures Book')

@section('heading', 'Creatures of the World, Unite!')

@section('desc')
  <p>
    A pseudo-children's book — "Creatures of the World, Unite!" is an illustrated adventure of creatures of all types. The book focuses on the strengths of all individuals, however odd they may be, and seeks to show the value of everyone. The book consists of 20 'creatures' each with a unique hand-lettered bio. The project was a personal exploration of illustration, screen printing, and small edition book-binding.
  </p>
  <p>
    Big thanks to Nathan Shigeta for helping write it, along with a lot of other little things along the way.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">

    {{-- Book --}}
    <div class="g__row mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/creatures/creatures-book-01.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-02.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-03.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-04.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-05.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-06.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-07.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-08.jpg')}}',
            '{{asset('img/projects/creatures/creatures-book-09.jpg')}}',
          ]"
        ></carousel>
      </div>
    </div>

    {{-- Process --}}
    <div class="g__row t--center mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/creatures/creatures-process-01.jpg')}}',
            '{{asset('img/projects/creatures/creatures-process-02.jpg')}}',
            '{{asset('img/projects/creatures/creatures-process-03.jpg')}}',
            '{{asset('img/projects/creatures/creatures-process-04.jpg')}}',
            '{{asset('img/projects/creatures/creatures-process-05.jpg')}}',
            '{{asset('img/projects/creatures/creatures-process-06.jpg')}}',
            ]"
          caption="Process Shots"
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
      <li>2012</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Skills</h5>
    <ul>
      <li>Illustration</li>
      <li>Screen Printing</li>
      <li>Bookbinding</li>
    </ul>
  </div>
  <div class="credit-col">
    <h5>Printing Method</h5>
    <ul>
      <li>Screenprinting with Speedball Acrylic ink</li>
    </ul>
    <h5>Paper</h5>
    <ul>
      <li>French Paper Construction <br><small> - Recycled White 80lb.</small></li>
      <li>French Paper Pop-Tone <br><small> - Lift Off Lemon 80lb.</small></li>
    </ul>
    <h5>Binding</h5>
    <ul>
      <li>Hardback Case Binding / Sewing on Tapes / By Hand</li>
    </ul>
  </div>
@endsection
