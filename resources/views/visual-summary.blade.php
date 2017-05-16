@extends('base')


@section('app')
  <div id="visual-summary" class="container -max--xl my-5">

    <div class="g__row my-6">
      <div class="g__col">
        {{-- <h3 class="c--jazzy">A Visual Summary</h3> --}}
        <p class=""><strong>Full case studies are in the works.</strong> For now, please enjoy a smattering of my work.</p>
      </div>
    </div>
{{--
    <div class="image-grid">
      <div class="image-grid__wrap">
        <div class="g__row">
          <div class="g__col image-grid__col">
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
          <div class="g__col image-grid__col">
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="image-grid">
      <div class="image-grid__wrap">
        <div class="g__row">
          <div class="g__col image-grid__col">
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="image-grid ">
      <div class="image-grid__wrap">
        <div class="g__row">
          <div class="g__col12 g__col8--@sm image-grid__col">
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
          <div class="g__col12 g__col4--@sm image-grid__col">
            <div class="image-grid__item -c8" style="background-image: url('http://unsplash.it/600/400')"></div>
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="image-grid -tall">
      <div class="image-grid__wrap">
        <div class="g__row">
          <div class="g__col image-grid__col">
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
            <div class="image-grid__item -c8" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
          <div class="g__col image-grid__col">
            <div class="image-grid__item -c8" style="background-image: url('http://unsplash.it/600/400')"></div>
            <div class="image-grid__item" style="background-image: url('http://unsplash.it/600/400')"></div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="image-grid">
      <div class="g__row">
        <div class="image-grid__col -half">
          <div class="image-grid__item -vert" data-image-load  data-src="{{asset('img/HRD-Banquet-Art.jpg')}}" data-src-md="{{asset('img/HRD-Banquet-Art-mock.jpg')}}">
            <div class="caption -reverse">This is a caption for this image</div>
          </div>
        </div>
        <div class="image-grid__col -half">
          <div class="image-grid__item -horz" data-spy-in data-spy="class: inview" style="background-image: url('{{asset('img/senior-showcase.jpg')}}')">
            <div class="caption -reverse">New Relic – Icon illustrations</div>
          </div>
          <div class="image-grid__item -horz" style="background-image: url('{{asset('img/face-final-small.gif')}}')"></div>
        </div>
      </div>
      <div class="g__row">
        <div class="image-grid__col -full">
          <div class="image-grid__item" style="background-image: url('{{asset('img/nlb-menu-board.jpg')}}')">
            <div class="caption -reverse">
              Next Level Burger – Menu and Signage | <small>© SRM Architecture &amp; Marketing</small>
            </div>
          </div>
        </div>
      </div>

      <div class="g__row">
        <div class="image-grid__col -half">
          <div class="image-grid__item -horz" style="background-image: url('{{asset('img/tokyo-defense.jpg')}}')"></div>
          <div class="image-grid__item -vert" style="background-image: url('http://unsplash.it/400/1200')"></div>
        </div>
        <div class="image-grid__col -half">
          <div class="image-grid__item -vert" style="background-image: url('http://unsplash.it/600/400')"></div>
          <div class="image-grid__item -horz" style="background-image: url('{{asset('img/relay-poster-2011.jpg')}}')"></div>
        </div>
      </div>
    <div class="g__row">
      <div class="image-grid__col -full">
        <div class="image-grid__item" style="background-image: url('{{asset('img/NR_Seattle_8338.jpg')}}')">
          <div class="caption -reverse">
            New Relic Seattle – Office Signage
            <br><small>© SRM Architecture &amp; Marketing</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
@endsection
