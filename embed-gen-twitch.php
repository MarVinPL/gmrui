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
      <h1><i class="fa fa-twitch"></i> Twitch Embed Generator</h1>
      <p class="lead">We understand you might be a publisher using our framework and may not be comfortable with HTML yet...</p>

      <a href="/embed-gen-youtube/" class="btn btn-youtube"><i class="fa fa-youtube"></i> Embed Generator</a>

      <hr>

      <h3>Generator</h3>
      <p>Simply copy and paste the <b>video id</b> from your Twitch video into the form below and copy &amp; paste the output for use on your website.</p>

      <!-- Start Angular App -->
      <div id="" ng-app="">
        <form id="">
          <p class="doc-helper"><small>Video ID</small></p>
          <div class="doc-example">
            <input name="embed" ng-model="embed" ng-pattern="/^[a-zA-Z0-9-_]+$/" type="text" placeholder="Enter video id..." required />

            <p class="doc-helper"><small>Output</small></p>
            
            <textarea class="output" readonly>&lt;div class=&quot;embed-responsive embed-responsive-16by9&quot;&gt;
    &lt;iframe src=&quot;http://player.twitch.tv/?channel={{embed}}&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; height=&quot;378&quot; width=&quot;620&quot;&gt;&lt;/iframe&gt;
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

<?php include "includes/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>

</body>
</html>