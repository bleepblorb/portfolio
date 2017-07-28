@extends('base')


@section('app')

  <div id="visual-summary" class="menu-pad pb-6">

  <!-- Intro -->
    <div class="container -max--xl ">
      <div class="g__row my-6">
        <div class="g__col">
          <h4 class="c--jazzy">A Visual Summary —</h4>
          <p class="">Full case studies are in the works. For now, please enjoy a smattering of my work.</p>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="image-grid -max--wumbo -center">
        <div class="g__row">
          <div class="image-grid__col -half">
            {{-- <div class="image-grid__item enter__fade-in-up -vert" data-spy-in>
              <div class="image-grid__bg"  data-image-load data-src="{{asset('img/HRD-Banquet-Art.jpg')}}" data-src-md="{{asset('img/HRD-Banquet-Art-mock.jpg')}}"></div>
              <div class="image-grid__content">
                <div class="content-intro">
                  <h5 class="content__title">Hood River Distillery</h5>
                  <h1 class="content__title">Crafting a historic tasting room</h1>
                </div>
                <a class="mt-3">Case Study --></a>
              </div>
              <div class="caption">This is a caption for this image</div>
            </div> --}}
            <div class="image-grid__item enter__fade-in-up -vert" data-spy-in data-image-load  data-src="{{asset('img/HRD-Banquet-Art.jpg')}}" data-src-md="{{asset('img/HRD-Banquet-Art-mock.jpg')}}">
              <div class="caption">This is a caption for this image</div>
            </div>
          </div>
          <div class="image-grid__col -half">
            <div class="image-grid__item enter__fade-in-up -horz" data-spy-in data-image-load data-src="{{asset('img/dh-concrete.jpg')}}">
              {{-- <div class="image-grid__bg"></div>
              <div class="image-grid__content">
                <div class="content-intro">
                  <h5 class="c--white">D + H Financial</h5>
                  <h1 class="c--white">PDX inspired workplace</h1>
                </div>
                <a class="mt-3">Project Photos --></a>
              </div> --}}
            </div>
            <div class="image-grid__item enter__fade-in-up -horz" data-spy-in style="background-image: url('{{asset('img/face-final-small.gif')}}')"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-6">
      <div class="enter__fade-in-up" data-spy-in>
        <img src="{{asset('img/aqs-ui.jpg')}}" class="img-fluid mb-2" >
        <p class="t--small -max--xl c--gray-light -center"><strong>Anderson Quality Spring </strong>- Website redesign.</p>
      </div>
    </div>

    <div class="container">
      <div class="image-grid -max--wumbo -center">
        <div class="g__row">
          <div class="image-grid__col -full" >
            <div class="image-grid__item enter__fade-in-up" data-spy-in data-image-load data-src="{{asset('img/nlb-menu-board.jpg')}}">
              {{-- <div class="caption">
                <strong>Next Level Burger</strong> – Menu and Signage
              </div> --}}
              {{-- <div class="copyright">
                <popover type="tooltip" content="© SRM Architecture &amp; Marketing">©</popover>
              </div> --}}
              {{-- <div class="image-grid__bg"  data-image-load data-src="{{asset('img/nlb-menu-board.jpg')}}"></div>
              <div class="image-grid__content">
                <div class="content-intro">
                  <h5 class="c--white">Next Level Burger</h5>
                  <h1 class="c--white">Taking it to the next level</h1>
                </div>
                <a class="mt-3">Case Study --></a>
              </div> --}}
              <div class="caption"><strong>Next Level Burger</strong> — Menu design and signage</div>
            </div>
          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -half" >
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/aqs-icons.png')}}')"></div>
          </div>

          <div class="image-grid__col -half" >
            <div class="image-grid__item enter__fade-in-up -horz" data-spy-in style="background-image: url('{{asset('img/wtc-dash-grid.jpg')}}')">
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="py-6 enter__fade-in-up" data-spy-in>
      <img src="{{asset('img/bt-spread.jpg')}}" class="img-fluid mb-2 " >
      <p class="-max--xl -center t--small c--gray-light">A collection of work for Beaverton Toyota.</p>
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">
        <div class="g__row">
          <div class="image-grid__col -half">
             <div class="image-grid__item enter__fade-in-up -horz" data-spy-in data-image-load data-src="{{asset('img/nlb-mural-detail.jpg')}}"></div>

            <div class="image-grid__item -vert" style="background-image: url('{{asset('img/adair-web-plan.jpg')}}')"></div>
          </div>
          <div class="image-grid__col -half">
            <div class="image-grid__item -vert" style="background-image: url('{{asset('img/olivia-invite.jpg')}}')"></div>
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/wtc-dashboard.jpg')}}')">
              <div class="caption"> <strong>World Trade Center</strong> – Lobby Dashboard</div>
              </div>

          </div>
        </div>
        <div class="g__row">
          <div class="image-grid__col -full">
            <div class="image-grid__item" style="background-image: url('{{asset('img/NR_Seattle_8338.jpg')}}')">
              <div class="caption">
                <strong>New Relic Seattle</strong> – Office Signage</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-6 enter__fade-in-up" data-spy-in>
      <img src="{{asset('img/adair-ui.jpg')}}" class="img-fluid mb-2 " >
      <p class="container -max--wumbo t--small c--gray-light">A collection of work for Beaverton Toyota.</p>
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">
        <div class="g__row">
          <div class="image-grid__col -half">
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/nr-breakroom-graphic.jpg')}}')"></div>
          </div>
          <div class="image-grid__col -half">
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/nr-icons.png')}}')"></div>
          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -full">
            <div class="image-grid__item" style="background-image: url('{{asset('img/rockwood-healthy.jpg')}}')"></div>
          </div>
        </div>


        <div class="g__row">
          <div class="image-grid__col -half">
            <div class="image-grid__item -vert" style="background-image: url('{{asset('img/aqs-web-home.jpg')}}')"></div>
          </div>
          <div class="image-grid__col -half">
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/nr-hall-of-justice.jpg')}}')"></div>
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/hrd-timeline.jpg')}}')"></div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img src="{{asset('img/rachelle-wedding-all-2.jpg')}}" class="img-fluid">
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">
        <div class="g__row">
          <div class="image-grid__col -half">
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/hrd-distilling.jpg')}}')"></div>
            <div class="image-grid__item -horz" style="background-image: url('{{asset('img/face-it.jpg')}}')"></div>
          </div>
          <div class="image-grid__col -half">
            <div class="image-grid__item -vert" style="background-image: url('{{asset('img/walker.gif')}}')"></div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="bg--jazzy py-6">
    <div class="container">
      <div class="g__row">
        <div class="g__col t--center">
          <a href="{{route('about')}}" class="c--white t--h2">Meet the man to blame for this. </a>
        </div>
      </div>
    </div>
  </div>

@endsection
