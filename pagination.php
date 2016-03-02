<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "pagination";
  ?>
  <title>GMRUI - Pagination</title>
  <meta name="description" content="">

  <link rel="icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
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
      <h1>Pagination</h1>
      <p class="lead">Pagination indiciates to users that they are viewing a set of content divided into a number of pages.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <nav role="menubar" aria-label="Pagination">
          <ul class="pagination">
            <li><a href="#" aria-label="Previous">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next">&raquo;</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Pagination" class="html">&lt;nav role=&quot;menubar&quot; aria-label=&quot;Pagination&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

      <hr>

      <h3>Accessibility</h3>
      <p>By adding the <code>role="menubar"</code> attribute to the <code>&lt;nav&gt;</code> property allows screen readers to distinguish this content type.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>As shown in the examples below, a bordered version can be set to overwrite the default style by using the additional class <code>pagination-bordered</code>.</p>
      <div class="doc-example">
        <nav role="menubar" aria-label="Pagination">
          <ul class="pagination pagination-bordered">
            <li><a href="#" aria-label="Previous">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next">&raquo;</a></li>
          </ul>
        </nav>
      </div>
      <p>To position your pagination with more flexibility, you can alternatively align your menu to the center or to the right by using the <code>pull-right</code> and <code>center</code> additional classes.</p>
      <div class="doc-example">
        <nav role="menubar" aria-label="Pagination">
          <ul class="pagination pagination-bordered center">
            <li><a href="#" aria-label="Previous">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next">&raquo;</a></li>
          </ul>
        </nav>
        <nav role="menubar" aria-label="Pagination">
          <ul class="pagination pagination-bordered pull-right">
            <li><a href="#" aria-label="Previous">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next">&raquo;</a></li>
          </ul>
        </nav>
      </div>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_pagination.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>