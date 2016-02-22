<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "body";
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
      <h1>Body Copy</h1>
      <p class="lead">Typography in gmrui is designed to look simple and soft to the reader. There's nothing worse than looking at a lot of text all squished together!</p>

      <hr>

      <h3>Paragraphs</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, libero. Voluptas perspiciatis quidem officia a, voluptatum, culpa minima ipsa vel, nisi distinctio asperiores. Nulla quibusdam veniam deleniti. Natus, quae ipsam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, libero. Voluptas perspiciatis quidem officia a, voluptatum, culpa minima ipsa vel, nisi distinctio asperiores. Nulla quibusdam veniam deleniti. Natus, quae ipsam!</p>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;p class=&quot;lead&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nobis eligendi deleniti esse culpa explicabo quam beatae libero suscipit nihil veniam incidunt odio nemo, eaque corrupti distinctio et sit harum!&lt;/p&gt;

&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nobis eligendi deleniti esse culpa explicabo quam beatae libero suscipit nihil veniam incidunt odio nemo, eaque corrupti distinctio et sit harum!&lt;/p&gt;</code></pre>
      
      <hr>

      <h3>Links</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p>Lorem ipsum dolor amet, <a href="#">consectetur adipisicing</a> elit.</p>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;p&gt;Lorem ipsum dolor amet, &lt;a href=&quot;#&quot;&gt;consectetur adipisicing&lt;/a&gt; elit.&lt;/p&gt;</code></pre>

      <hr>

      <h3>Blockquotes</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <blockquote>Just because you're offended, doesn't mean you're right. <cite>Ricky Gervais</cite></blockquote>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;blockquote&gt;Just because you&apos;re offended, doesn&apos;t mean you&apos;re right. &lt;cite&gt;Ricky Gervais&lt;/cite&gt;&lt;/blockquote&gt;</code></pre>
      <hr>

      <h3>Abbreviations</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr></p>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt;</code></pre>
      <hr>

      <h3>Code Snippets</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p><big><code>some-attr=""</code></big></p>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;code&gt;some-attr=&quot;&quot;&lt;/code&gt;</code></pre>
      <hr>

      <h3>User Input</h3>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <p>To crouch and spray, hold <kbd>ctrl + mouse1</kbd>.</p>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;code&gt;some-attr=&quot;&quot;&lt;/code&gt;</code></pre>
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