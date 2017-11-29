@extends('base')

@section('title', 'Visual Summary')


@section('app')

  <div id="visual-summary">
  
  <!-- Intro -->
    @include('partials.pictures-menu', ['active' => 'visuals'])

    <div class="container">
      <div class="image-grid -max--wumbo -center">
        <div class="g__row">
          <!-- HRD banquet art -->
          <div class="image-grid__col -half">
            <div class="image-grid__item -vert enter__fade-in-up" data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/hrd-banquet-art.jpg')}}"
            >
            </div>
          </div>
          <!-- D + H -->
          <div class="image-grid__col -half">
            <div class="image-grid__item enter__fade-in-up -horz"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/dh-concrete.jpg')}}"
            >
              <div class="caption">
                <strong>D + H Financial</strong> – Office graphics
              </div>
            </div>
            <!-- life.gif -->
            <div class="image-grid__item enter__fade-in-up -horz"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/life.gif')}}"
            >
              <div class="caption -light"><strong>Life</strong>: Animated</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- AQS UI fill -->
    <div class="my-6">
      <div class="enter__fade-in-up" data-spy-in>
        <img class="-fill mb-2"
          data-image-load
          data-src="{{asset('img/visual-summary/aqs-ui-sm.jpg')}}"
          data-src-md="{{asset('img/visual-summary/aqs-ui.jpg')}}"
          >
        <div class="container -max--wumbo">
          <p class="t--small c--gray-light">Website redesign and development for <strong>Anderson Quality Spring </strong>.</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="image-grid -max--wumbo -center">
        <div class="g__row">
          <div class="image-grid__col -full" >

            <!-- NLB Singage -->
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nlb-menu-board-sm.jpg')}}"
              data-src-md="{{asset('img/visual-summary/nlb-menu-board.jpg')}}"
            >
              <div class="copyright">
                <popover type="tooltip" content="© SRM Architecture &amp; Marketing">©</popover>
              </div>
              <div class="caption"><strong>Next Level Burger</strong> — Menu and signage design</div>
            </div>

          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -half" >
            <!-- AQS Icons -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/aqs-icons.png')}}"
            >
              <div class="caption -light"><strong>AQS</strong> – Custom icon set</div>
            </div>
          </div>

          <div class="image-grid__col -half" >
          <!-- WTC Dashboard -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/wtc-dash-grid.jpg')}}"
            >
              <div class="caption"><strong>World Trade Center</strong> – Interactive dashboard</div>
            </div>
          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -full">
            <!-- Edge Menu -->
            <div class="image-grid__item"
              data-image-load
              data-src="{{asset('img/visual-summary/edge-menu-sm.jpg')}}"
              data-src-md="{{asset('img/visual-summary/edge-menu-all.jpg')}}"
              >
              <div class="caption"><strong>Edge Coffee</strong> - Menu design</div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Beaverton Toyota Collage -->
    <div class="py-6 enter__fade-in-up" data-spy-in>
      <img class="-fill mb-2"
        data-image-load
        data-src="{{asset('img/visual-summary/bt-spread-sm.jpg')}}"
        data-src-md="{{asset('img/visual-summary/bt-spread.jpg')}}"
        >
      <div class="container -max--wumbo">
        <p class="t--small c--gray-light">A collection of marketing materials for <strong>Beaverton Toyota</strong></p>
      </div>
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">
        <div class="g__row">
          <div class="image-grid__col -half">
            <!-- NLB detail -->
             <div class="image-grid__item enter__fade-in-up -horz"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nlb-mural-detail.jpg')}}"
            >
              <div class="caption"><strong>Next Level Burger</strong> – Graphic detail</div>
            </div>

            <!-- Adair web page -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/adair-web-plan.jpg')}}"
            >
              <div class="caption"><strong>Adair Homes</strong> – Plan detail page</div>
            </div>

          </div>
          <div class="image-grid__col -half">
            <!-- Olivia Invite -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/olivia-invite-xs.jpg')}}"
              data-src-sm="{{asset('img/visual-summary/olivia-invite.jpg')}}"
            ></div>

            <!-- WTC Dash Photo -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/wtc-dashboard.jpg')}}"
            >
              <div class="caption"> <strong>World Trade Center</strong> – Lobby dashboard</div>
            </div>

          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -full">

            <!-- New Relic Seattle Office -->
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nr-seattle-office-sm.jpg')}}"
              data-src-md="{{asset('img/visual-summary/nr-seattle-office.jpg')}}"
              >
              <div class="caption">
                <strong>New Relic Seattle</strong> – Office signage</div>
            </div>

          </div>
        </div>

      </div>
    </div>


    <!-- Adair UI Fill -->
    <div class="py-6 enter__fade-in-up" data-spy-in>
      <img class="-fill mb-2"
        data-image-load
        data-src="{{asset('img/visual-summary/adair-ui-sm.jpg')}}"
        data-src-md="{{asset('img/visual-summary/adair-ui.jpg')}}"
        >
      <p class="container -max--wumbo t--small c--gray-light">Website redesign and development for <strong>Adair Homes</strong></p>
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">

        <!-- Creatures Book -->
        <div class="g__row">
          <div class="image-grid__col">
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/creatures-sm.jpg')}}"
              data-src-md="{{asset('img/visual-summary/creatures-xl.jpg')}}"
            >
              <div class="caption -light"><strong>Creatures of the World, Unite!</strong> – Personal project</div>
            </div>
          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -half">

            <!-- New Relic Seattle Break Room -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nr-breakroom-graphic.jpg')}}"
            >
              <div class="caption"><strong>New Relic Seattle</strong> – Break room graphic</div>
            </div>
          </div>
          <div class="image-grid__col -half">

            <!-- New Relic Icons -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nr-icons.png')}}"
            >
              <div class="caption -light"><strong>New Relic Portland</strong> – Custom icons</div>
            </div>
          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -full">
            <!-- Healthy Rockwood -->
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/rockwood-healthy-sm.jpg')}}"
              data-src-md="{{asset('img/visual-summary/rockwood-healthy.jpg')}}"
            ></div>
          </div>
        </div>


        <div class="g__row">
          <div class="image-grid__col -half">
            <!-- AQS Web - Home -->
            <div class="image-grid__item -vert"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/aqs-web-home.jpg')}}"
            >
              <div class="caption"><strong>AQS</strong> – Home page</div>
            </div>
          </div>
          <div class="image-grid__col -half">
            <!-- New Relic PDX Signs -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/nr-hall-of-justice.jpg')}}"
            >
              <div class="caption"><strong>New Relic Portland</strong> – Office graphics</div>
            </div>

            <!-- HRD Timeline Wall -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/hrd-timeline.jpg')}}"
            >
              <div class="caption"><strong>Hood River Distillers</strong> – Tasting room graphics</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rachelle Invite Fill -->
    <div>
      <img  class="-fill mb-2 enter__fade-in-up"
        data-spy-in
        data-image-load
        data-src="{{asset('img/visual-summary/rachelle-wedding-all-sm.jpg')}}"
        data-src-md="{{asset('img/visual-summary/rachelle-wedding-all-lg.jpg')}}"
      >
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">

        <div class="g__row">
          <div class="image-grid__col -half">
            <!-- HRD Distilling Illu -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/hrd-distilling.jpg')}}"
            >
              <div class="caption -light"><strong>Hood River Distillers</strong> — Process illustration</div>
            </div>

            <!-- Face It -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/face-it.jpg')}}"
            >
              <div class="caption"><strong>Face-Its</strong> — Personal project</div>
            </div>
          </div>
          <div class="image-grid__col -half">
            <!-- Walker gif -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/visual-summary/walker.gif')}}"
            >
              <div class="caption -light">Random nonsense</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container -max--lg my-6">
    <div class="g__row t--center">
      <div class="g__col enter__fade-in-up" data-spy-in>
        <h4>But Wait, There's more!</h4>
        <p><a href="{{ route('projects') }}" class="btn -primary -outline">View Projects</a></p>
      </div>
    </div>
  </div>

  <div class="bg--jazzy py-7">
    <div class="container">
      <div class="g__row">
        <div class="g__col t--center">
          <a href="{{route('about')}}" class="c--white t--h2">Meet the man to blame for this. <icon name="arrow__right-lg"></icon></a>
        </div>
      </div>
    </div>
  </div>

@endsection
