@extends('archived-project')

@section('title', 'Senior Showcase')

@section('heading', 'WWU Design Program Senior Showcase')

@section('desc')
  <p>
    Through a submission process, my design was chosen for the 2012 Senior Design Program's annual showcase. I was in charge of designing a cover for the student book, a micro-site to showcase the graduates, as well as some environmental design for the event.
  </p>
@endsection

@section('body')

  <div class="container -max--wumbo">
    <div class="g__row mb-6">
      <div class="g__col">
        <carousel
          :images="[
            '{{asset('img/projects/senior-showcase/senior-show-book-01.jpg')}}',
            '{{asset('img/projects/senior-showcase/senior-show-book-02.jpg')}}',
            '{{asset('img/projects/senior-showcase/senior-show-book-03.jpg')}}',
          ]"
          caption="Design Theme / Book Cover"
        ></carousel>
      </div>
    </div>

    <div class="g__row my-6 -align-items--center">
      <div class="g__col12 g__col6--@md">
        <img src="{{asset('img/projects/senior-showcase/senior-show-web-02.jpg')}}" class="-fluid" alt="">
      </div>
      <div class="g__col12 g__col6--@md">
        <img src="{{asset('img/projects/senior-showcase/senior-show-web-01.jpg')}}" class="-fluid" alt="">
      </div>
    </div>

    <div class="g__row mb-6">
        <div class="g__col">
          <carousel
            :images="[
              '{{asset('img/projects/senior-showcase/senior-show-signage-01.jpg')}}',
              '{{asset('img/projects/senior-showcase/senior-show-signage-02.jpg')}}',
              '{{asset('img/projects/senior-showcase/senior-show-signage-03.jpg')}}',
              '{{asset('img/projects/senior-showcase/senior-show-signage-04.jpg')}}',
              '{{asset('img/projects/senior-showcase/senior-show-signage-05.jpg')}}',
            ]"
            caption="Environmental Graphics"
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
      <li>Envoronmental Graphics</li>
      <li>Web Design / Development</li>
    </ul>
  </div>
@endsection
