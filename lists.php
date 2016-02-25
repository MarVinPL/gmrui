<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "lists";
  ?>
  <title>GMRUI - Lists</title>
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
      <h1>Lists</h1>
      <p class="lead">Lists are often used in blogs, write-ups and news posts so we've made sure they look great!</p>

      <hr>

      <h3>Ordered Lists</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
      <ol>
        <li>Lorem ipsum dolor set</li>
        <li>Lorem ipsum dolor set</li>
        <li>Lorem ipsum dolor set</li>
        <li>Lorem ipsum dolor set</li>
        <li>Lorem ipsum dolor set</li>
      </ol>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;ol&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
&lt;/ol&gt;</code></pre>
      <hr>

      <h3>Unordered Lists</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <ul>
          <li>Lorem ipsum dolor set</li>
          <li>Lorem ipsum dolor set</li>
          <li>Lorem ipsum dolor set</li>
          <li>Lorem ipsum dolor set</li>
          <li>Lorem ipsum dolor set</li>
        </ul>
      </div>
      <hr>

      <h3>Inline Lists</h3>

      <p>Some lists are better presented inline, so we have provided a helper class for you to do so. Apply the <code>inline</code> and <code>pull-right</code> classes for greater flexibility.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <ul class="inline">
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
        </ul>
      </div>
      <div class="doc-example">
        <ul class="inline pull-right">
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
        </ul>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;ul class=&quot;inline&quot;&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
  &lt;li&gt;Lorem ipsum dolor set&lt;/li&gt;
&lt;/ul&gt;</code></pre>
      <hr>

      <h3>Definition Lists</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <dl>
          <dt>Lorem Ipsum Dolor</dt>
          <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
          <dt>Lorem Ipsum Dolor</dt>
          <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
          <dt>Lorem Ipsum Dolor</dt>
          <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
        </dl>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;dl&gt;
  &lt;dt&gt;Lorem Ipsum Dolor&lt;/dt&gt;
  &lt;dd&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/dd&gt;
  &lt;dt&gt;Lorem Ipsum Dolor&lt;/dt&gt;
  &lt;dd&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/dd&gt;
  &lt;dt&gt;Lorem Ipsum Dolor&lt;/dt&gt;
  &lt;dd&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
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