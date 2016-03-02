<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "modals";
  ?>
  <title>GMRUI - Modals</title>
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
      <h1>Modals <small>gmrui/_modals.js</small></h1>
      <p class="lead">Modals are a fantastic way of delivering conditional content. For example forms can require several components that take valuable space up.</p>

      <div class="alert alert-info">
        <p><b>Wait up!</b> This component requires Jquery.</p>
      </div>

      <hr>

      <h2>Basic Usage</h2>
      <p>It's very easy to use modals within your project. In the <b>HTML</b> below the <code>modal-wrap</code> and it's contents should be placed just before the closing <code>body</code> tag for best practice. This is to avoid any problems with the stacking order.</p>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">

        <a href="#" class="btn btn-lg btn-primary open-modal" data-target="#modaldemo">Open Modal</a>

      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Modals" class="html">&lt;div id=&quot;modaldemo&quot; class=&quot;modal-wrap closed&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;modal-close&quot;&gt;&lt;/a&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;!-- Content Here --&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>

      <hr>
      <h3>Callback</h3>
      <p>To call your modal, simply add the class <code>open-modal</code> to your trigger and tell it what to open using the <code>data-target</code> attribute. We have reserved the <code>href</code> for AJAX modals.</p>
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Modals" class="html">&lt;a href=&quot;#&quot; class=&quot;open-modal&quot; data-target=&quot;#modaldemo&quot;&gt;Open Modal&lt;/a&gt;</code></pre>

      <hr>

      <h2>AJAX Modals</h2>
      <p>Because AJAX is such a common part of the user exerience in order to receive callbacks without refreshing your page, we've made it super easy to use with GMRUI. Just add the attribute <code>data-ajax="true"</code> and link the <code>href</code> attribute as normal to your file.</p>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Modals" class="html">&lt;a href=&quot;file.html&quot; class=&quot;open-modal&quot; data-target=&quot;#modaldemo&quot; data-ajax=&quot;true&quot;&gt;Open Modal&lt;/a&gt;</code></pre>

      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_modals.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

<!-- Modal -->
<div id="modaldemo" class="modal-wrap closed" role="dialog">
  <div class="modal">
    <a href="#" class="modal-close"></a>
    <div class="modal-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, in maxime numquam velit ea natus iste sequi esse consectetur enim ex, odit modi eum fugiat voluptatum quis labore, distinctio assumenda!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, in maxime numquam velit ea natus iste sequi esse consectetur enim ex, odit modi eum fugiat voluptatum quis labore, distinctio assumenda!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, in maxime numquam velit ea natus iste sequi esse consectetur enim ex, odit modi eum fugiat voluptatum quis labore, distinctio assumenda!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, in maxime numquam velit ea natus iste sequi esse consectetur enim ex, odit modi eum fugiat voluptatum quis labore, distinctio assumenda!</p>
    </div>
  </div>
</div>

</body>
</html>