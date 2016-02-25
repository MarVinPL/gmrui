<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "switches";
  ?>
  <title>GMRUI - Switches</title>
  <meta name="description" content="">

  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
  <!-- Docs CSS -->
  <link href="/plugins/highlightjs/github-gist.css" rel="stylesheet">
  <link href="/css/docs.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="section nav-wrapper">
  <div class="esc">
    <? include("includes/navbar.php"); ?>
  </div>
</div>

<div class="section">
  <div class="esc">
    <aside class="docs-aside">
      <nav class="nav-side" role="navigation">
        <? include("includes/sidenav.php"); ?>
      </nav>
    </aside>

    <div class="doc">
      <!-- Top Nav -->
      <h1>Switches</h1>
      <p class="lead">Switches are commonly found in mobile applications and are now becoming more popular on the web. We have added our own basic switches to gmrui.</p>

      <hr>
      
      <p class="doc-helper"><small>Checkbox Demo</small></p>
      <div class="doc-example">
        <div class="switch">
          <input id="switchA" type="checkbox">
          <label for="switchA"></label>
        </div>
      </div>
      <p class="doc-helper"><small>Radio Group Demo</small></p>
      <div class="doc-example">
        <div class="switch">
          <input id="switchB" type="radio" name="radioG">
          <label for="switchB" class="lg"></label>
        </div>
        <div class="switch">
          <input id="switchC" type="radio" name="radioG">
          <label for="switchC"></label>
        </div>
        <div class="switch">
          <input id="switchD" type="radio" name="radioG">
          <label for="switchD" class="sm"></label>
        </div>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <script src="https://gist.github.com/mattsince87/7b15cfd941b0b208727b.js"></script>

      <hr>

      <h3>Accessibility</h3>
      <p>Forms utilise the browsers standard accessibility features.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>As shown in th demo above, gmrui allows you to control the size of your switches. By default the switches are considered to be a <b>Medium</b> size. You can add the <code>sm</code> class for small or the <code>lg</code> class for large to the <code>label</code>.</p> 
      <div class="doc-example">
        <pre class="html"><code>&lt;label for=&quot;switchD&quot; class=&quot;sm&quot;&gt;&lt;/label&gt;

&lt;label for=&quot;switchD&quot; class=&quot;lg&quot;&gt;&lt;/label&gt;</code></pre>
      </div>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_switches.scss">GitHub</a>.</p>

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