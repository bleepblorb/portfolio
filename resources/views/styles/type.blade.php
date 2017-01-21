{{-- Typography --}}
<section id="type" class="">
  <div class="row mb-3">
    <div class="col">
      <h3 class="text-muted">Typography</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <h6 class="caps">Headings</h6>
      <hr>
    </div>
    <div class="col-12">
      <p> <code>.display-1</code> </p>
      <h1 class="display-1">All their equipment and instruments are alive.</h1>

      <p> <code>.display-2</code> </p>
      <h1 class="display-2">All their equipment and instruments are alive.</h1>

      <p> <code>h1</code> </p>
      <h1 class="">All their equipment and instruments are alive.</h1>

      <p> <code>h2</code> </p>
      <h2>All their equipment and instruments are alive.</h2>

      <p> <code>h3</code> </p>
      <h3>All their equipment and instruments are alive.</h3>

      <p> <code>h4</code> </p>
      <h4>All their equipment and instruments are alive.</h4>

      <p> <code>h5</code> </p>
      <h5>All their equipment and instruments are alive.</h5>

      <p> <code>h6</code> </p>
      <h6>All their equipment and instruments are alive.</h6>
    </div>
  </div>

  {{-- Colors --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="t--uc">Color Modifiers</h6>
      <hr>
    </div>
    <div class="col-12">
      <h4 class="">This Headline is the "default" color</h4>
      <p><code>.c--gray-dark</code></p>
      <h4 class="c--gray-dark">This Headline is the "dark gray" color</h4>
      <p><code>.c--primary</code></p>
      <h4 class="c--primary">This Headline is the "primary" color</h4>
      <p><code>.c--muted</code></p>
      <h4 class="c--muted">This Headline is the "muted" color</h4>
      <p><code>.c--info</code></p>
      <h4 class="c--info">This Headline is the "info" color</h4>
      <p><code>.c--success</code></p>
      <h4 class="c--success">This Headline is the "success" color</h4>
      <p><code>.c--warning</code></p>
      <h4 class="c--warning">This Headline is the "warning" color</h4>
      <p><code>.c--danger</code></p>
      <h4 class="c--danger">This Headline is the "danger" color</h4>
    </div>
  </div>

  {{-- Paragraphs --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Paragraph</h6>
      <hr>
    </div>
    <div class="col-sm-6">
      <p> <code>p.lead</code> </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
    </div>
    <div class="col-sm-6">
      <p> <code>p</code></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <em>ullamco</em> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>

      <p> <code>p.small</code></p>
      <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
      <p class="-text--large--@sm">
        this is large text.
      </p>
    </div>
  </div>

  {{-- Inline Styles --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Inline Styles</h6>
      <hr>
    </div>
    <div class="g__col--12 -t--center--@md">
      <p>You can use the mark tag to <mark>highlight</mark> text.</p>
      <p><del>This line of text is meant to be treated as deleted text.</del></p>
      <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
      <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
      <p><u>This line of text will render as underlined</u></p>
      <p><small>This line of text is meant to be treated as fine print.</small></p>
      <p><strong>This line rendered as bold text.</strong></p>
      <p><em>This line rendered as italicized text.</em></p>
    </div>
  </div>

  {{-- Blockquotes --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Blockquotes</h6>
      <hr>
    </div>
    <div class="col-12">
      <blockquote class="blockquote">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>

      <blockquote class="blockquote blockquote-reverse">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>
    </div>
  </div>

  {{-- Lists --}}
  <div class="row my-4">
    <div class="col-12">
      <h6 class="caps">Lists</h6>
      <hr>
    </div>
    <div class="col">
      <p> <code>ul</code></p>
      <ul>
      	<li>Lorem ipsum dolor</li>
      	<li>Sit amet, consectetur</li>
      	<li>Adipisicing elit, sed</li>
      	<li>Do eiusmod tempor</li>
      	<li>Incididunt ut labore</li>
      	<li>Et dolore magna</li>
      	<li>Aliqua. Ut enim</li>
      	<li>Ad minim veniam,</li>
      	<li>Quis nostrud exercitation</li>
      </ul>
    </div>
    <div class="col">
      <p> <code>ul.list--bullets</code></p>
      <ul class="list--bullets">
      	<li>Lorem ipsum dolor</li>
      	<li>Sit amet, consectetur</li>
      	<li>Adipisicing elit</li>
      	<li>Do eiusmod tempor</li>
      	<li>Incididunt ut labore</li>
      	<li>Et dolore magna</li>
      	<li>Aliqua. Ut enim</li>
      	<li>Ad minim veniam,</li>
      	<li>Quis nostrud exercitation</li>
      </ul>
    </div>

    <div class="w-100 hidden-lg-up"></div>

    <div class="col">
      <p> <code>ul.list--relaxed</code></p>
      <ul class="list--relaxed">
      	<li>Lorem ipsum dolor</li>
      	<li>Sit amet, consectetur</li>
      	<li>Adipisicing elit, sed</li>
      	<li>Do eiusmod tempor</li>
      	<li>Incididunt ut labore</li>
      	<li>Et dolore magna</li>
      	<li>Aliqua. Ut enim</li>
      	<li>Ad minim veniam,</li>
      	<li>Quis nostrud exercitation</li>
      </ul>
    </div>

    <div class="col">
      <p> <code>ol</code></p>
      <ol>
      	<li>Lorem ipsum dolor</li>
      	<li>Sit amet, consectetur</li>
      	<li>Adipisicing elit, sed</li>
      	<li>Do eiusmod tempor</li>
      	<li>Incididunt ut labore</li>
      	<li>Et dolore magna</li>
      	<li>Aliqua. Ut enim</li>
      	<li>Ad minim veniam,</li>
      	<li>Quis nostrud exercitation</li>
      	<li>Ullamco laboris nisi</li>
      </ol>
    </div>

  </div>
  <div class="row my-4">
    <div class="col">
      <p> <code>ul.list--inline</code></p>
      <ul class="list--inline">
        <li>Lorem ipsum</li>
        <li>Phasellus iaculis</li>
        <li>Nulla volutpat</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p> <code>dl</code></p>
      <dl>
        <dt>Lorem ipsum dolor</dt>
          <dd>Sit amet, consectetur</dd>
        <dt>Adipisicing elit, sed</dt>
          <dd>Do eiusmod tempor</dd>
        <dt>Incididunt ut labore</dt>
          <dd>Et dolore magna</dd>
        <dt>Aliqua. Ut enim</dt>
          <dd>Ad minim veniam,</dd>
      </dl>
    </div>
    <div class="col-sm-6">
      <p> <code>dl</code> Inline Styles</p>
      <dl class="row">
        <dt class="col-sm-4">Description lists</dt>
        <dd class="col-sm-8">A description list is perfect for defining terms.</dd>

        <dt class="col-sm-4">Euismod</dt>
        <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>

        <dt class="col-sm-4 text-truncate">Truncated term is truncated</dt>
        <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
      </dl>
    </div>
  </div>
</section>
