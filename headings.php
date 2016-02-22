<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "headings";
  ?>
  <title>GMRUI - Headings</title>
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
      <h1>Headings</h1>
      <p class="lead">Headings provide a visual &amp; contextual reference point to your sites content.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;</code></pre>

      <hr>

      <h3>Secondary Text</h3>
      <p>Sometimes your headings require secondary text as part of the heading itself, we like to use the <code>&lt;small&gt;</code> tag to do so.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <h1>Heading 1 <small>Secondary Text</small></h1>
        <h2>Heading 2 <small>Secondary Text</small></h2>
        <h3>Heading 3 <small>Secondary Text</small></h3>
        <h4>Heading 4 <small>Secondary Text</small></h4>
        <h5>Heading 5 <small>Secondary Text</small></h5>
      </div>


      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;h1&gt;Heading 1 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h1&gt;
&lt;h2&gt;Heading 2 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h2&gt;
&lt;h3&gt;Heading 3 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h3&gt;
&lt;h4&gt;Heading 4 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h4&gt;
&lt;h5&gt;Heading 5 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h5&gt;</code></pre>

      <hr>

      <h3>Block Headers</h3>
      <p>We have given you the flexibility to target specific headers with the class <code>heading</code>, they can be used on all of your headers.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <h2 class="heading">Block Header</h2>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;h2 class=&quot;heading&quot;&gt;Block Header&lt;/h2&gt;</code></pre>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_typography.scss">GitHub</a>.</p>

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