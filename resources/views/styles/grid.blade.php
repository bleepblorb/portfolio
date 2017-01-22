{{-- Grid--}}

<style media="screen">
  .-style__h-100 {
    height:  8rem;
    background-color: #E9F2F0;
    margin-bottom: 1rem;
  }
</style>

<section id="style__grid" class="">
  <div class="row mb-3">
    <div class="col__12">
      <h2 class="text-muted">The Grid</h2>
    </div>
  </div>

  {{-- Equal Width --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Equal Width</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
  </div>

  {{-- Sizing --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Sizing</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col1"> <p> <code>.g__col1</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col2"> <p> <code>.g__col2</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col3"> <p> <code>.g__col3</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col4"> <p> <code>.g__col4</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col5"> <p> <code>.g__col5</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col6"> <p> <code>.g__col6</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col7"> <p> <code>.g__col7</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col8"> <p> <code>.g__col8</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col9"> <p> <code>.g__col9</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col10"> <p> <code>.g__col10</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col11"> <p> <code>.g__col11</code></p></div>
      <div class="g__col"></div>
    </div>
    <div class="g__row">
      <div class="g__col12"> <p> <code>.g__col12</code></p></div>
    </div>
  </div>

  {{-- Setting One Width --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Setting One Width</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col2"> <p> <code>.g__col2</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col6"> <p> <code>.g__col6</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
  </div>

  {{-- Variable Width Content --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Variable Width Content</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col2--@sm"> <p> <code>.g__col.-span2</code></p></div>
      <div class="g__col g__col-auto--@sm"> <p> <code>.g__col.-span-auto</code> <br>Variable width content</p></div>
      <div class="g__col2--@sm"> <p> <code>.g__col.-span2</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col g__col-auto"> <p> <code>.g__col.-span-auto</code> <br>Variable width Content</p></div>
      <div class="g__col"> <p> <code>.g__col.-span2</code></p></div>
    </div>
  </div>


  {{-- Stacking to Horizontal --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Stacked to Horizontal</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col4--@sm"> <p> <code>.g__col4--@sm</code></p></div>
      <div class="g__col8--@sm"> <p> <code>.g__col8--@sm</code></p></div>
    </div>
    <div class="g__row">
      <div class="g__col--@sm"> <p> <code>.g__col--@sm</code></p></div>
      <div class="g__col--@sm"> <p> <code>.g__col--@sm</code></p></div>
      <div class="g__col--@sm"> <p> <code>.g__col--@sm</code></p></div>
    </div>
  </div>


  {{-- Equal-width multi-row --}}
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Equal-width multi-row</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="w-100"></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
      <div class="g__col"> <p> <code>.g__col</code></p></div>
    </div>
  </div>

  <!-- Alignment -->

  <div class="g__row mt-4">
    <div class="g__col">
      <h3 class="">Alignment</h3>
    </div>
  </div>


  <!-- Vertical Alignment -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Vertical Alignment</h6>
      <hr>
    </div>
  </div>
  <!-- align start -->
  <p><code>.-align-items--start</code></p>
  <div class="show-grid t--center">
    <div class="g__row -align-items--start -style__h-100">
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
    </div>
  </div>

  <!-- align center -->
  <p><code>.-align-items--center</code></p>
  <div class="show-grid t--center">
    <div class="g__row -align-items--center -style__h-100">
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
    </div>
  </div>

  <!-- align end -->
  <p><code>.-align-items--end</code></p>
  <div class="show-grid t--center">
    <div class="g__row -align-items--end -style__h-100">
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
      <div class="g__col"><code>.g__col</code></div>
    </div>
  </div>

  <!-- align self -->
  <div class="show-grid t--center">
    <div class="g__row -style__h-100">
      <div class="g__col -align-self--start"><code>.-align-self--start</code></div>
      <div class="g__col -align-self--center"><code>.-align-self--center</code></div>
      <div class="g__col -align-self--end"><code>.-align-self--start</code></div>
    </div>
  </div>

  <!-- Horizonatal Alignment -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Horizonatal Alignment</h6>
      <hr>
    </div>
  </div>

  <div class="show-grid t--center">
    <!-- justify start -->
    <div class="g__row -justify-content--start">
      <div class="g__col4"><code>.g__col</code></div>
      <div class="g__col4"><code>.g__col</code></div>
    </div>
    <!-- justify center -->
    <div class="g__row -justify-content--center">
      <div class="g__col4"><code>.g__col</code></div>
      <div class="g__col4"><code>.g__col</code></div>
    </div>
    <!-- justify end -->
    <div class="g__row -justify-content--end">
      <div class="g__col4"><code>.g__col</code></div>
      <div class="g__col4"><code>.g__col</code></div>
    </div>
    <!-- justify around -->
    <div class="g__row -justify-content--around">
      <div class="g__col4"><code>.g__col</code></div>
      <div class="g__col4"><code>.g__col</code></div>
    </div>
    <!-- justify between -->
    <div class="g__row -justify-content--between">
      <div class="g__col4"><code>.g__col</code></div>
      <div class="g__col4"><code>.g__col</code></div>
    </div>
  </div>

  <!-- No Gutters -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Removing Gutters</h6>
      <hr>
    </div>
  </div>
  <p><code>.-no-gutters</code></p>
  <div class="g__row -no-gutters show-grid">
    <div class="g__col4"><code>.g__col4</code></div>
    <div class="g__col8"><code>.g__col8</code></div>
  </div>

  <!-- Reordering -->

  <div class="g__row mt-4">
    <div class="g__col">
      <h3 class="">Reordering</h3>
    </div>
  </div>

  <!-- Flex Order -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Flex Order</h6>
      <hr>
    </div>
  </div>
  <div class="g__row show-grid t--center">
    <div class="g__col -flex--unordered">
      <code>.-flex--unordered</code>First, but unordered
    </div>
    <div class="g__col -flex--last">
      <code>.-flex--last</code>Second, but last
    </div>
    <div class="g__col -flex--first">
      <code>.-flex--first</code>Third, but first
    </div>
  </div>

  <!-- Offsetting -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Offsetting</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col4">
        <code>.g__col4</code>
      </div>
      <div class="g__col -offset-4">
        <code>.g__col4 .-offset-4</code>
      </div>
    </div>
    <div class="g__row">
      <div class="g__col3 -offset-3">
        <code>.g__col3 .-offset-3</code>
      </div>
      <div class="g__col3 -offset-3">
        <code>.g__col3 .-offset-3</code>
      </div>
    </div>
  </div>


  <!-- Push And Pull -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Push and Pull</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col9 -push-3">
        <code>.g__col9 .-push-3</code>
      </div>
      <div class="g__col3 -pull-9">
        <code>.g__col3 .-pull-9</code>
      </div>
    </div>
  </div>


  <!-- Nesting -->
  <div class="g__row mt-4">
    <div class="g__col">
      <h6 class="t--uc">Nesting</h6>
      <hr>
    </div>
  </div>
  <div class="show-grid t--center">
    <div class="g__row">
      <div class="g__col9">
        <code>.g__col9</code>
        <div class="g__row">
          <div class="g__col3">
            <code>.g__col3</code>
          </div>
          <div class="g__col9">
            <code>.g__col9</code>
          </div>
        </div>
      </div>

    </div>
  </div>


</section>
