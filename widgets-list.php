<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "widget-list";
  ?>
  <title>GMRUI - List Widgets</title>
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
      <h1>List Widgets</h1>
      <p class="lead">List widgets can contain any number of content types such as articles and media. gmrui adopts a very simplistic way of catering for multiple content types all within the same (or multiple) lists.</p>

      <hr>
      
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="esc-row">
        <nav class="widget-list">
          <ul>
            <li><a href="#"><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time></span><span class="icon-chat"></span></a></li>
            <li><a href="#"><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time></span><span class="number">1</span></a></li>
            <li><a href="#"><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time></span><span class="number">891</span><span class="icon-heart"></span></a></li>
            <li><a href="#"><span class="usr-thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg"></span><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time></span></a></li>
            <li><a href="#"><span class="vid-thumb"><img src="https://i.ytimg.com/vi_webp/oxGZpCfCvqQ/mqdefault.webp"></span><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time><small><span class="icon-youtube"></span>Play Video</small></span></a></li>
            <li><a href="#"><span class="vid-thumb"><img src="https://i.ytimg.com/vi_webp/oxGZpCfCvqQ/mqdefault.webp"></span><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time><small><span class="icon-youtube"></span>Play Video</small></span><span class="number">891</span><span class="icon-heart"></span></a></li>
            <li class="no-link"><span class="vid-thumb"><img src="https://i.ytimg.com/vi_webp/oxGZpCfCvqQ/mqdefault.webp"></span><span class="context"><h5>Lorem ipsum dolor set amet ipsum goldumn luckus</h5><time>Tues 23rd June 2015 - 14:00</time><small><span class="icon-youtube"></span>Play Video</small></span><span class="number">891</span><span class="icon-heart"></span></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;nav class=&quot;widget-list&quot;&gt;
  &lt;ul&gt;
    &lt;li&gt;
      &lt;a href=&quot;#&quot;&gt;
        &lt;!-- Content --&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

      <hr>

      <h3>Available Content Types</h3>
      <p>Any of the following content types can be used in your lists:</p>
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html">&lt;span class=&quot;context&quot;&gt;
  &lt;h5&gt;Lorem ipsum dolor set amet ipsum goldumn luckus&lt;/h5&gt;
  &lt;time&gt;Tues 23rd June 2015 - 14:00&lt;/time&gt;
&lt;/span&gt;
&lt;span class=&quot;icon-heart&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;number&quot;&gt;1&lt;/span&gt;
&lt;span class=&quot;usr-thumb&quot;&gt;&lt;img src=&quot;image.jpg&quot;/&gt;&lt;/span&gt;
&lt;span class=&quot;vid-thumb&quot;&gt;&lt;img src=&quot;image.jpg&quot;/&gt;&lt;/span&gt;</code></pre>

      <hr>

      <h3>Helper Classes</h3>
      <p>By default gmrui caters for HTML5's block level links, however we know you wont always want to use this method for mixed content so we've added a helper class for when you don't. Just use the class <code>no-link</code> on your <code>&lt;li&gt;</code> element when you're not using block level links.</p>


      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_breadcrumbs.scss">GitHub</a>.</p>

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