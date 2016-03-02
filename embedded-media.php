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
      <h1>Embedded Media</h1>
      <p class="lead">Sites with rich content, and especially gaming websites require embedded media such as TwitchTV and YouTube.</p>

      <a href="/embed-gen-youtube/" class="btn btn-youtube"><i class="fa fa-youtube"></i>  Embed Generator</a>
      <a href="/embed-gen-twitch/" class="btn btn-twitch"><i class="fa fa-twitch"></i>  Embed Generator</a>

      <hr>

      <h3>Basic Usage</h3>
      <p>Embedding media is extremely common, we have included some basic markup allowing you to embed responsively.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/k6dsMqNIOvo?list=PLFpWrOvZY3uYiJmDw6NCLhtz46pylA6na" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Embedded Iframes" class="html">&lt;!-- 16:9 aspect ratio --&gt;
&lt;div class=&quot;embed-responsive embed-responsive-16by9&quot;&gt;
  &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;...&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;

&lt;!-- 4:3 aspect ratio --&gt;
&lt;div class=&quot;embed-responsive embed-responsive-4by3&quot;&gt;
  &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;...&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
      <hr>


      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_media.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>