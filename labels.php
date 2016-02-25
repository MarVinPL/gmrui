<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "labels";
  ?>
  <title>GMRUI - Labels</title>
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
      <h1>Labels</h1>
      <p class="lead">Labels are a great way to prepend or append snippets of information such as game scores.</p>

      <hr>

      <h3>Links</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p>Default <span class="label">Label</span></p>
        <p>Primary <span class="label label-primary">Label</span></p>
        <p>Success <span class="label label-success">Label</span></p>
        <p>Info <span class="label label-info">Label</span></p>
        <p>Danger <span class="label label-danger">Label</span></p>
        <p>Warning <span class="label label-warning">Label</span></p>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html" title="Labels">&lt;p&gt;Default &lt;span class=&quot;label&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;Primary &lt;span class=&quot;label label-primary&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;Success &lt;span class=&quot;label label-success&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;Info &lt;span class=&quot;label label-info&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;Danger &lt;span class=&quot;label label-danger&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;Warning &lt;span class=&quot;label label-warning&quot;&gt;Label&lt;/span&gt;&lt;/p&gt;</code></pre>

      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_typography.scss">GitHub</a>.</p>

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