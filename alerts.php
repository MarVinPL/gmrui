<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "alerts";
  ?>
  <title>GMRUI - Alerts</title>
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
      <h1>Alerts</h1>
      <p class="lead">Alerts are a great way of communicating short messages, hints and warnings to your users. They're unobtrusive yet they immediately stand out on the page.</p>

      <hr>

      <h3>Links</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <div class="alert alert-success">
          <p><b>Success!</b> Your message here with a <a href="#">link</a>.</p>
        </div>
        <div class="alert alert-info">
          <p><b>Hey there!</b> Your message here a <a href="#">link</a>.</p>
        </div>
        <div class="alert alert-warning">
          <p><b>Ut oh!</b> Your message here a <a href="#">link</a>.</p>
        </div>
        <div class="alert alert-danger">
          <p><b>Warning!</b> Your message here a <a href="#">link</a>.</p>
        </div>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;div class=&quot;alert alert-success&quot;&gt;
  &lt;p&gt;&lt;b&gt;Success!&lt;/b&gt; Your message here with a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot;&gt;
  &lt;p&gt;&lt;b&gt;Hey there!&lt;/b&gt; Your message here a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot;&gt;
  &lt;p&gt;&lt;b&gt;Ut oh!&lt;/b&gt; Your message here a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot;&gt;
  &lt;p&gt;&lt;b&gt;Warning!&lt;/b&gt; Your message here a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;</code></pre>

      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_alerts.scss">GitHub</a>.</p>

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