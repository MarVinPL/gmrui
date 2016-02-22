<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "button-groups";
  ?>
  <title>GMRUI - Button Groups</title>
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
      <h1>Button Groups</h1>
      <p class="lead">Button groups allow you to group multiple buttons together when more than one action may be presented to your users.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <nav class="button-group">
          <ul>
            <li><a href="#" class="btn btn-lg btn-default">Button</a></li>
            <li><a href="#" class="btn btn-lg btn-default">Button</a></li>
            <li><a href="#" class="btn btn-lg btn-default">Button</a></li>
          </ul>
        </nav>
      </div>
      <div class="doc-example">
        <nav class="button-group">
          <ul>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <script src="https://gist.github.com/mattsince87/999c2482bd47ee197d35.js"></script>

      <hr>

      <h3>Accessibility</h3>
      <p>Forms utilise the browsers standard accessibility features.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>gmrui allows you even more flexiblity over the look and layout of your button groups with these helper classes. You can easily center your button groups on the page by using the additional class <code>centered</code> on your <code>&lt;nav&gt;</code> button group.</p>

      <p class="doc-helper"><small>Centered Demo</small></p>
      <div class="doc-example">
        <nav class="button-group centered">
          <ul>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;nav class=&quot;button-group centered&quot;&gt;</code></pre>

      <hr>

      <p>Position your button group to the right side using the <code>pull-right</code> class on your <code>&lt;nav&gt;</code> button group.</p>

      <p class="doc-helper"><small>Pull Right Demo</small></p>
      <div class="doc-example">
        <nav class="button-group pull-right">
          <ul>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;nav class=&quot;button-group pull-right&quot;&gt;</code></pre>

      <hr>

      <p>Create a rounded look to your button group by adding the <code>rounded</code> class on your <code>&lt;nav&gt;</code> button group.</p>

      <p class="doc-helper"><small>Pull Right Demo</small></p>
      <div class="doc-example">
        <nav class="button-group rounded">
          <ul>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
            <li><a href="#" class="btn btn-default">Button</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;nav class=&quot;button-group rounded&quot;&gt;</code></pre>

      <hr>

      <p>Button groups inherit the same colour styling as their individual ancestors. The example below uses the <code>btn-danger</code> class.</p>
      <p class="doc-helper"><small>Colour Demos</small></p>
      <div class="doc-example">
        <nav class="button-group">
          <ul>
            <li><a href="#" class="btn btn-danger">Button</a></li>
            <li><a href="#" class="btn btn-danger">Button</a></li>
            <li><a href="#" class="btn btn-danger">Button</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;nav class=&quot;button-group&quot;&gt; 
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;btn btn-danger&quot;&gt;Button&lt;/a&gt;&lt;/li&gt; 
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;btn btn-danger&quot;&gt;Button&lt;/a&gt;&lt;/li&gt; 
    &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;btn btn-danger&quot;&gt;Button&lt;/a&gt;&lt;/li&gt; 
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
      
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_buttongroup.scss">GitHub</a>.</p>

      <!--  -->

      <!-- https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_buttongroup.scss -->

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