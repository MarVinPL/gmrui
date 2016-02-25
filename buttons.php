<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "buttons";
  ?>
  <title>GMRUI - Buttons</title>
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
      <h1>Buttons</h1>
      <p class="lead">Buttons are block elements that allow your users to easily identify an action on the page.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <script src="https://gist.github.com/mattsince87/16c70db759392104c169.js"></script>

      <hr>

      <h3>Accessibility</h3>
      <p>Forms utilise the browsers standard accessibility features.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>gmrui allows you more control over your buttons with additional classes to change their size. We have provided a large class; <code>btn-lg</code>, a medium class (also by default) <code>btn-md</code>, a small and extra small class <code>btn-sm</code> and <code>btn-xs</code>.</p> 
      
      <p class="doc-helper"><small>Button Sizes</small></p>
      <div class="doc-example">
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
      </div>
      <div class="doc-example">
        <button type="button" class="btn btn-md btn-primary">Primary</button>
      </div>
      <div class="doc-example">
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
      </div>
      <div class="doc-example">
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <div class="doc-example">
        <pre class="html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-primary&quot;&gt;Large&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-md btn-primary&quot;&gt;Medium&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary&quot;&gt;Small&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-xs btn-primary&quot;&gt;Extra Small&lt;/button&gt;</code></pre>
      </div>
      <hr>

      <h3>Social Buttons</h3>
      <p>Social buttons are a necessity on any modern webste or application, so we have provided default styles for all your favourites. Let us know on <a href="http://twitter.com/mattsince87">Twitter</a> if we have missed one of your favourites.</p>
      <p class="doc-helper"><small>Social Icons</small></p>
      <div class="doc-example">
        <a href="#" class="btn btn-sq btn-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="btn btn-sq btn-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="btn btn-sq btn-steam"><i class="fa fa-steam"></i></a>
        <a href="#" class="btn btn-sq btn-twitch"><i class="fa fa-twitch"></i></a>
        <a href="#" class="btn btn-sq btn-youtube"><i class="fa fa-youtube"></i></a>
        <a href="#" class="btn btn-sq btn-skype"><i class="fa fa-skype"></i></a>
        <a href="#" class="btn btn-sq btn-linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <pre class="html"><code>&lt;a href=&quot;#&quot; class=&quot;btn btn-social-facebook&quot;&gt;&lt;span class=&quot;icon-facebook&quot;&gt;&lt;/span&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-twitter&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-googleplus&quot;&gt;&lt;i class=&quot;fa fa-googleplus&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-steam&quot;&gt;&lt;i class=&quot;fa fa-steam&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-twitch&quot;&gt;&lt;i class=&quot;fa fa-twitch&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-youtube&quot;&gt;&lt;i class=&quot;fa fa-youtube&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-spotify&quot;&gt;&lt;i class=&quot;fa fa-spotify&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-soundcloud&quot;&gt;&lt;i class=&quot;fa fa-soundcloud&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-skype&quot;&gt;&lt;i class=&quot;fa fa-skype&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-pinterest&quot;&gt;&lt;i class=&quot;fa fa-pinterest&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-dribbble&quot;&gt;&lt;i class=&quot;fa fa-dribbble&quot;&gt;&lt;/i&gt;&lt;/a&gt; 
&lt;a href=&quot;#&quot; class=&quot;btn btn-sq btn-linkedin&quot;&gt;&lt;i class=&quot;fa fa-linkedin&quot;&gt;&lt;/i&gt;&lt;/a&gt;</code></pre>

      <p>Note that all social buttons include the class <code>btn-sq</code> in order to maintain square sizing.</p>

      <p class="doc-helper"><small>Social Icon Sizes</small></p>
      <div class="doc-example">
        <a href="#" class="btn btn-sq btn-twitch btn-lg"><i class="fa fa-twitch"></i></a>
      </div>
      <div class="doc-example">
        <a href="#" class="btn btn-sq btn-twitch btn-md"><i class="fa fa-twitch"></i></a>
      </div>
      <div class="doc-example">
        <a href="#" class="btn btn-sq btn-twitch btn-sm"><i class="fa fa-twitch"></i></a>
      </div>
      <div class="doc-example">
        <a href="#" class="btn btn-sq btn-twitch btn-xs"><i class="fa fa-twitch"></i></a>
      </div>
      <p>Social buttons also adopt the same sizing conventions as their other sibling buttons.</p>
      
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/blob/gh-pages/scss/gmrui/_buttons.scss">GitHub</a>.</p>

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