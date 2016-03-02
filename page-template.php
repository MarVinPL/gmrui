<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "page-template";
  ?>
  <title>GMRUI - Page Template</title>
  <meta name="description" content="">

  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
  <link href="/css/theme.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="page-<?php echo $page ?>">

<div class="section nav-wrapper">
  <div class="esc">
    <? include("includes/navbar.php"); ?>
  </div>
</div>

<div class="section">
  <div class="esc">
    <aside class="docs-aside">
      <nav class="nav-side">
        <? include("includes/sidenav.php"); ?>
      </nav>
    </aside>

    <div class="doc">
      <h1>Page Template</h1>
      <p class="lead">Our basic HTML template provides you with the skeleton to start your project.</p class="lead">
      <hr>
      <h3>Basic Template</h3>
      <p>The below basic template, provides you with the appropriate needs for any purpose project setup.</p>

      <p>Copy the HTML below to begin working with a minimal GMRUI document.</p>
      
      <pre><code class="html" title="Page Template">&lt;html&gt;
&lt;head&gt;

  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;

  &lt;title&gt;Project Title&lt;/title&gt;

  &lt;link rel=&quot;stylesheet&quot; href=&quot;css/theme.css&quot;&gt;

  &lt;link rel=&quot;icon&quot; type=&quot;image/x-icon&quot; href=&quot;/favicon.ico&quot; /&gt;
  &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;/favicon.png&quot; /&gt;

  &lt;meta name=&quot;msapplication-TileColor&quot; content=&quot;#000000&quot;&gt;
  &lt;meta name=&quot;msapplication-TileImage&quot; content=&quot;/mstile-144x144.png&quot;&gt;

  &lt;meta name=&quot;twitter:site&quot; value=&quot;@mattsince87&quot;&gt;

  &lt;meta property=&quot;og:title&quot; content=&quot;&quot;&gt;
  &lt;meta property=&quot;og:type&quot; content=&quot;website&quot;&gt;
  &lt;meta property=&quot;og:image&quot; content=&quot;&quot;&gt;
  &lt;meta property=&quot;og:site_name&quot; content=&quot;&quot;&gt;
  &lt;meta property=&quot;og:url&quot; content=&quot;&quot;&gt;
  &lt;meta property=&quot;og:description&quot; content=&quot;&quot;&gt;

  &lt;!--[if lt IE 9]&gt;
    &lt;script src=&quot;https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://oss.maxcdn.com/respond/1.4.2/respond.min.js&quot;&gt;&lt;/script&gt;
  &lt;![endif]--&gt;

&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

      <hr>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>