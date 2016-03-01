<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "sidenav";
  ?>
  <title>GMRUI - Top Navs</title>
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
      <h1>Side Navs</h1>
      <p class="lead">The gmrui Top Nav allows you to place a horizontal navigation anywhere you like on your page.</p>
      <p>Navbars are responsive components used primary for top level site navigation and we recommend they are used only once per page.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-nav">
        <nav class="nav-side" role="navigation">
          <ul>
            <!-- Navigation -->
            <li class="heading">Heading</li>
            <li><a href="#">Example Link</a></li>
            <li><a class="active" href="#">Example Link</a></li>
            <li><a href="#">Example Link</a></li>
            <li class="divider"></li>
            <li><a href="#">Example Link</a></li>
            <li><a href="#">Example Link</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Side navigation" class="html">&lt;nav class=&quot;nav-side&quot; role=&quot;navigation&quot;&gt;
  &lt;ul&gt;
    &lt;!-- Navigation --&gt;
    &lt;li class=&quot;heading&quot;&gt;Heading&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Example Link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;Example Link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Example Link&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Example Link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Example Link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

      <hr>

      <h3>Accessibility</h3>
      <p>The top nav allows for full keyboard accesibility. In order to prioritze the website navigation please remember to use <code>role="navigation"</code> on your <code>&lt;nav&gt;</code> element. Additionally, if your page uses off-canvas navigation, add the attribute <code>aria-hidden="true"</code> to one of them—otherwise, the user's device will tab through (and possibly read) both of them before reaching any content.</p>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_navside.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>