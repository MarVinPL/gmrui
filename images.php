<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "images";
  ?>
  <title>GMRUI - Images</title>
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
      <h1>Images</h1>
      <p class="lead">Images are commonly used throughout web content. They are great visual aids to support your content and therefore we have included a host of basic styles and alignment classes.</p>

      <hr>

      <h3>Basic Image</h3>
      <p>GMRUI images by default are centered on the page. No class system is required to achieve this positioning.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
      <img class="basic" src="http://static.ongamers.com/uploads/original/0/1394/15729-iem-katowice-2014-2.jpg" alt="ESL One" width="300">
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Basic Image" class="html">&lt;img class=&quot;basic&quot; src=&quot;image.jpg&quot; alt=&quot;Image&quot; width=&quot;300&quot;&gt;</code></pre>
      <hr>

      <h3>Responsive Image</h3>
      <p>gmrui provides a responsive image class. Note that this class will overwrite and image size attributes such as <code>height</code> and <code>width</code>. Use the class <code>img-responsive</code> to apply the responsive styling.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
      <img class="img-responsive" src="http://static.ongamers.com/uploads/original/0/1394/15729-iem-katowice-2014-2.jpg" alt="ESL One">
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Responsive Image" class="html">&lt;img class=&quot;img-responsive&quot; src=&quot;image.jpg&quot; alt=&quot;Image&quot;&gt;</code></pre>
      <hr>

      <h3>Positioning Images</h3>
      <p>You can use our helper classes <code>pull-left</code> and <code>pull-right</code> to align your images to either side of your conent.</p>

      <p class="doc-helper"><small>Align Left Demo</small></p>
      <div class="doc-example">
      <p><img class="pull-left" src="http://static.ongamers.com/uploads/original/0/1394/15729-iem-katowice-2014-2.jpg" alt="ESL One" width="300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quibusdam accusamus enim atque aperiam, officiis, illum veritatis deserunt nostrum eius, cumque itaque, dolorem natus repellendus doloremque accusantium rerum quo asperiores.</p>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Image Alignment: Left" class="html">&lt;img class=&quot;pull-left&quot; src=&quot;image.jpg&quot; alt=&quot;Image&quot;&gt;</code></pre>
      <hr>

      <p class="doc-helper"><small>Align Right Demo</small></p>
      <div class="doc-example">
      <p><img class="pull-right" src="http://static.ongamers.com/uploads/original/0/1394/15729-iem-katowice-2014-2.jpg" alt="ESL One" width="300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quibusdam accusamus enim atque aperiam, officiis, illum veritatis deserunt nostrum eius, cumque itaque, dolorem natus repellendus doloremque accusantium rerum quo asperiores.</p>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Image Alignment: Right" class="html">&lt;img class=&quot;pull-right&quot; src=&quot;image.jpg&quot; alt=&quot;Image&quot;&gt;</code></pre>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_images.scss">GitHub</a>.</p>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/dist/gmrui.jquery.min.js"></script>
<script src="/plugins/highlightjs/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>