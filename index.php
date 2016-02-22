<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "index";
  ?>
  <title>GMRUI - Documentation</title>
  <meta name="description" content="">

  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
  <!-- Docs CSS -->
  <link href="/plugins/highlightjs/github-gist.css" rel="stylesheet">
  <link href="/css/theme.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="page-">

<div class="doc-hero">
  <div class="esc">
    <img src="img/logo.png" alt="GMRUI Logo">
    <cite>The Responsive <span class="g">(</span>Gamers<span class="g">)</span> Framework </cite>
    <br>
    <iframe src="https://ghbtns.com/github-btn.html?user=gmrgo&repo=gmrui&type=watch&count=true&size=large&v=2" frameborder="0" scrolling="0" width="137px" height="30px"></iframe>
    <iframe src="https://ghbtns.com/github-btn.html?user=gmrgo&repo=gmrui&type=fork&count=true&size=large" frameborder="0" scrolling="0" width="125px" height="30px"></iframe>
  </div>
</div>

<div class="section nav-wrapper">
  <div class="esc">
    <?php include "includes/navbar.php"; ?>
  </div>
</div>

<div class="section">
  <div class="esc">
    <aside class="docs-aside">
      <nav class="nav-side">
        <?php include "includes/sidenav.php"; ?>
      </nav>
    </aside>

    <div class="doc">
      <h1>Getting Started</h1>
      <p class="lead">Getting started with GMRUI is easy. Built on Sass for rapid deployment and is made for designers of all skill ranges.</p class="lead">
      <hr>
      <h2>What is GMRUI?</h2>
      <p class="lead">GMRUI is a Responsive (Gamers) Framework built for rapid theme deployment for developers whom are comfortable using SASS to power their website.</p>
      <p>This framework is designed to keep your front-end HTML short, semantic and sweet. It is also compatible with all modern web browsers and we are continually improving our framework thanks to its contributors.</p>
      <p>gmrui is built by <a href="http://twitter.com/mattsince87" title="@mattsince87">Matt Litherland</a> and is maintained by <a href="https://github.com/gmrgo" title="GamerGo">GamerGo</a>.</p>

      <p><iframe src="https://ghbtns.com/github-btn.html?user=gmrgo&repo=gmrui&type=watch&count=true&v=2" frameborder="0" scrolling="0" width="100px" height="30px"></iframe>
      <iframe src="https://ghbtns.com/github-btn.html?user=gmrgo&repo=gmrui&type=fork&count=true" frameborder="0" scrolling="0" width="100px" height="30px"></iframe></p>
      <hr>

      <h2>Start Using GMRUI</h2>
      <p>Getting started with GMRUI is easy. We're currently available only on GitHub but will be including bower support shortly.</p>
      <ul>
        <li>Clone the repo <code>git@github.com:gmrgo/gmrui.git</code></li>
        <li>Install with <a href="http://bower.io">Bower</a> <code>bower install gmrui</code></li>
      </ul>
      <hr>
      <h3>What's Included?</h3>
      <p>GMRUI includes susy grid framework out the box.</p>
      <pre class="structure">gmrui/
├── fonts/
|   ├── ...
├── scss/
|   ├── gmrui/
|   |   ├── mixins/
|   |   ├── widgets/
|   |   ├── ...
|   ├── susy/
|   |   ├── ...
|   ├── ...
|   ├── <b>theme.scss</b></pre>

      <hr>

      <h3>How to theme using <code>theme.scss</code></h3>
      <p>To get started using the GMRUI framework, you will need to include the required dependencies in your theme.</p>

      <pre><code class="css">@import 'normalize';
@import 'susy';
@import 'gmrui';
@import 'yourtheme';</code></pre>

      <p>It is recommended you import your external dependencies seperately for easy maintanence.</p>
      
      <hr>

      <h3>Customising GMRUI</h3>
      <p>We recommend modifying variables such as the colors contained in <code>_colors.scss</code> and then styling overrides in an additional stylesheet such as <code>_yourtheme.scss</code>.</p>
      
      <hr>

      <h3>Media Queries</h3>
      <p>We've included some media queries contained within our <code>_breakpoints.scss</code> mixin. You can modify these breakpoints to suit best suit your project.</p>
      <h4>How to use media queries</h4>
      <p>The below example shows how you can change the text colour of <code>.yourColumn</code> from blue to red for anything above <b>mobile</b>.</p>
      <pre><code class="css">.yourColumn {
  color: blue;
  @include bp(sm) {
    color: red;
  }
}</code></pre>

      <hr>

      <h2>Autoprefixer for SASS</h2>
      <p>GMRUI uses <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a> to deal with CSS vendor prefixes. If you're compiling GMRUI from its Sass source and not using our full release, you'll need to integrate Autoprefixer into your build process yourself. We use <a href="https://incident57.com/codekit/">CodeKit</a> by <a href="http://twitter.com/bdkjones">bdkjones</a>.</p>
      <hr>

      <h2>Normalize.css</h2>
      <p>GMRUI uses <a href="http://necolas.github.io/normalize.css/">Normalize.css</a> to help make browsers render all elements more consistently and in line with modern standards. it precisely targets only the styles that need normalizing.</p>
      <hr>

      <h2>Curator</h2>
      <iframe src="https://ghbtns.com/github-btn.html?user=mattsince87&type=follow&count=true&size=large" frameborder="0" scrolling="0" width="220px" height="30px"></iframe>

      <hr>

    </div>
  </div>
</div>

<footer class="section">
  <div class="esc">
    <div class="col">
      <h4 class="heading">gmrui</h4>
      <p>Code licensed under <a href="http://opensource.org/licenses/MIT">MIT</a>, documentation under <a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0.</a></p>
    </div>
    <div class="col">
      <h4 class="heading">Contribute</h4>
      <ul class="inline">
        <li><a href="https://github.com/gmrgo/gmrui">Repo</a></li>
        <li><a href="https://github.com/gmrgo/gmrui/issues">Issues</a></li>
        <li><a href="https://github.com/gmrgo/gmrui#fork-destination-box">Fork</a></li>
      </ul>
      </ul>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/dist/gmrui.jquery.min.js"></script>
<script src="/plugins/highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>