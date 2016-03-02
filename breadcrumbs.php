<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "breadcrumbs";
  ?>
  <title>GMRUI - Breadcrumbs</title>
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
      <h1>Breadcrumbs</h1>
      <p class="lead">Breadcrumbs are used to show a navigation trail for users clicking through multiple pages within your site. They clearly indicate the current page location within a navigational heirarchy.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <ol class="breadcrumb">
          <li class="active">Home</li>
        </ol>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Library</li>
        </ol>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Library</a></li>
          <li class="active">Data</li>
        </ol>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Breadcrumb" class="html">&lt;ol class=&quot;breadcrumb&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;</code></pre>

      <hr>

      <h3>Accessibility</h3>
      <p>Breadcrumbs are not part of the structured site navigation and therefore do not require a <code>role=""</code> attribute.</p>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_breadcrumbs.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>