<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "embedded-media";
  ?>
  <title>GMRUI - Embedded Media</title>
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
      <h1><i class="fa fa-youtube"></i> Youtube Embed Generator</h1>
      <p class="lead">We understand you might be a publisher using our framework and may not be comfortable with HTML yet...</p>

      <a href="/embed-gen-twitch/" class="btn btn-twitch"><i class="fa fa-twitch"></i> Embed Generator</a>

      <hr>

      <h3>Generator</h3>
      <p>Simply copy and paste the <b>video id</b> from your Youtube video into the form below and copy &amp; paste the output for use on your website.</p>

      <!-- Start Angular App -->
      <div id="" ng-app="">
        <form id="">
          <p class="doc-helper"><small>Video ID</small></p>
          <div class="doc-example">
            <input name="embed" ng-model="embed" ng-pattern="/^[a-zA-Z0-9-_]+$/" type="text" placeholder="Enter video id..." required />

            <p class="doc-helper"><small>Output</small></p>
            
            <textarea class="output" readonly>&lt;div class=&quot;embed-responsive embed-responsive-16by9&quot;&gt;
    &lt;iframe class=&quot;embed-responsive-item&quot; width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/{{embed}}&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</textarea>
          </div>
        </form>
      </div>
      <!-- End Angular App -->
      
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_media.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<footer class="section">
  <div class="esc">
    <div class="col">
      <h4 class="heading">GMRUI</h4>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/dist/gmrui.jquery.min.js"></script>
<script src="/plugins/highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>