@extends('base')

@section('title', 'Visual Summary')


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
          <!-- HRD banquet art -->
          <div class="image-grid__col -half">
            <div class="image-grid__item -vert enter__fade-in-up" data-spy-in
              data-image-load
              data-src="{{asset('img/hrd-banquet-art.jpg')}}"
            >
            </div>
          </div>
          <!-- D + H -->
          <div class="image-grid__col -half">
            <div class="image-grid__item enter__fade-in-up -horz"
              data-spy-in
              data-image-load
              data-src="{{asset('img/dh-concrete.jpg')}}"
            >
              <div class="caption">
                <strong>D + H Financial</strong> – Office graphics
              </div>
            </div>
            <!-- life.gif -->
            <div class="image-grid__item enter__fade-in-up -horz"
              data-spy-in
              data-image-load
              data-src="{{asset('img/life.gif')}}"
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
          data-src="{{asset('img/aqs-ui-sm.jpg')}}"
          data-src-md="{{asset('img/aqs-ui.jpg')}}"
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
              data-src="{{asset('img/nlb-menu-board-sm.jpg')}}"
              data-src-md="{{asset('img/nlb-menu-board.jpg')}}"
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
              data-src="{{asset('img/aqs-icons.png')}}"
            >
              <div class="caption -light"><strong>AQS</strong> – Custom icon set</div>
            </div>
          </div>

          <div class="image-grid__col -half" >
          <!-- WTC Dashboard -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/wtc-dash-grid.jpg')}}"
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
              data-src="{{asset('img/edge-menu-sm.jpg')}}"
              data-src-md="{{asset('img/edge-menu-all.jpg')}}"
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
        data-src="{{asset('img/bt-spread-sm.jpg')}}"
        data-src-md="{{asset('img/bt-spread.jpg')}}"
        >
      <div class="container -max--wumbo">
        <p class="t--small c--gray-light">A collection marketing materials for <strong>Beaverton Toyota</strong>.</p>
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
              data-src="{{asset('img/nlb-mural-detail.jpg')}}"
            >
              <div class="caption"><strong>Next Level Burger</strong> – Graphic detail</div>
            </div>

            <!-- Adair web page -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/adair-web-plan.jpg')}}"
            >
              <div class="caption"><strong>Adair Homes</strong> – Plan Detail Page</div>
            </div>

          </div>
          <div class="image-grid__col -half">
            <!-- Olivia Invite -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/olivia-invite-xs.jpg')}}"
              data-src-sm="{{asset('img/olivia-invite.jpg')}}"
            ></div>

            <!-- WTC Dash Photo -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/wtc-dashboard.jpg')}}"
            >
              <div class="caption"> <strong>World Trade Center</strong> – Lobby Dashboard</div>
            </div>

          </div>
        </div>

        <div class="g__row">
          <div class="image-grid__col -full">

            <!-- New Relic Seattle Office -->
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/nr-seattle-office-sm.jpg')}}"
              data-src-md="{{asset('img/nr-seattle-office.jpg')}}"
              >
              <div class="caption">
                <strong>New Relic Seattle</strong> – Office Signage</div>
            </div>

          </div>
        </div>

      </div>
    </div>


    <!-- Adair UI Fill -->
    <div class="py-6 enter__fade-in-up" data-spy-in>
      <img class="-fill mb-2"
        data-image-load
        data-src="{{asset('img/adair-ui-sm.jpg')}}"
        data-src-md="{{asset('img/adair-ui.jpg')}}"
        >
      <p class="container -max--wumbo t--small c--gray-light">Website redesign and development for <strong>Adair Homes</strong>.</p>
    </div>

    <div class="container -max--wumbo">
      <div class="image-grid">

        <!-- Creatures Book -->
        <div class="g__row">
          <div class="image-grid__col">
            <div class="image-grid__item enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/creatures-sm.jpg')}}"
              data-src-md="{{asset('img/creatures-xl.jpg')}}"
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
              data-src="{{asset('img/nr-breakroom-graphic.jpg')}}"
            >
              <div class="caption"><strong>New Relic Seattle</strong> – Breakroom graphic</div>
            </div>
          </div>
          <div class="image-grid__col -half">

            <!-- New Relic Icons -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/nr-icons.png')}}"
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
              data-src="{{asset('img/rockwood-healthy-sm.jpg')}}"
              data-src-md="{{asset('img/rockwood-healthy.jpg')}}"
            ></div>
          </div>
        </div>


        <div class="g__row">
          <div class="image-grid__col -half">
            <!-- AQS Web - Home -->
            <div class="image-grid__item -vert"
              data-spy-in
              data-image-load
              data-src="{{asset('img/aqs-web-home.jpg')}}"
            >
              <div class="caption"><strong>AQS</strong> – Home page</div>
            </div>
          </div>
          <div class="image-grid__col -half">
            <!-- New Relic PDX Signs -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/nr-hall-of-justice.jpg')}}"
            >
              <div class="caption"><strong>New Relic Portland</strong> – Office graphics</div>
            </div>

            <!-- HRD Timeline Wall -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/hrd-timeline.jpg')}}"
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
        data-src="{{asset('img/rachelle-wedding-all-sm.jpg')}}"
        data-src-md="{{asset('img/rachelle-wedding-all-lg.jpg')}}"
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
              data-src="{{asset('img/hrd-distilling.jpg')}}"
            >
              <div class="caption -light"><strong>Hood River Distillers</strong> — Process Illustration</div>
            </div>

            <!-- Face It -->
            <div class="image-grid__item -horz enter__fade-in-up"
              data-spy-in
              data-image-load
              data-src="{{asset('img/face-it.jpg')}}"
            >
              <div class="caption"><strong>Face-Its</strong> — Personal Project</div>
            </div>
          </div>
          <div class="image-grid__col -half">
            <!-- Walker gif -->
            <div class="image-grid__item -vert enter__fade-in-up"
              data-spy-in 
              data-image-load
              data-src="{{asset('img/walker.gif')}}"
            >
              <div class="caption -light">Random nonsense</div>
            </div>
          </div>
        </div>

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
