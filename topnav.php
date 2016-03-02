<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "topnav";
  ?>
  <title>GMRUI - Top Navs</title>
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
      <nav class="nav-side">
        <? include("includes/sidenav.php"); ?>
      </nav>
    </aside>

    <div class="doc">
      <!-- Top Nav -->
      <h1>Top Navs</h1>
      <p class="lead">The gmrui Top Nav allows you to place a horizontal navigation anywhere you like on your page.</p>
      <p>Navbars are responsive components used primary for top level site navigation and we recommend they are used only once per page.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <nav class="nav-bar nav-inline pull-right">
        <div class="nav-header">
          <a href="#" class="name"><span>gmrui</span></a>
        </div>
        <ul>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
          <li><a href="#">Lorem</a></li>
        </ul>
      </nav>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Top nav" class="html">&lt;nav class=&quot;nav-bar nav-inline pull-right&quot;&gt;
  &lt;div class=&quot;nav-header&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;name&quot;&gt;GMRUI&lt;/a&gt;
  &lt;/div&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; title=&quot;Lorem&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; title=&quot;Lorem&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; title=&quot;Lorem&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot; title=&quot;Lorem&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

      <hr>

      <h3>Accessibility</h3>
      <p>The top nav allows for full keyboard accesibility. If your page uses off-canvas navigation, add the attribute <code>aria-hidden="true"</code> to one of them—otherwise, the user's device will tab through (and possibly read) both of them before reaching any content.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>The top nav can easily be customised to suit your themes needs. To remove the site name from your navigation, just ommit the <code>&lt;div class="nav-header"&gt;</code> and the site name wil be removed.</p>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <nav class="nav-bar nav-inline pull-right">
          <ul>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li class="dropdown">
              <a href="#">Lorem</a>
              <ul class="dropdown-menu">
                <li><a href="#">My Account and Settings</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html" title="Top nav classes">&lt;nav class=&quot;nav-bar nav-inline pull-right&quot;&gt;</code></pre>

      <p>Top position your nav items with more flexibility, you can align them either left or right by using the <code>pull-left</code> and <code>pull-right</code> helper classes available to this nav.</p>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <nav class="nav-bar nav-inline pull-left">
          <div class="nav-header">
            <a href="#" class="name"><span>gmrui</span></a>
          </div>
          <ul>
            <li><a href="#">Lorem</a></li>
            <li class="dropdown">
              <a href="#">Lorem</a>
              <ul class="dropdown-menu">
                <li><a href="#">My Account and Settings</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html" title="Top nav classes">&lt;nav class=&quot;nav-bar nav-inline pull-left&quot;&gt;</code></pre>

      <p><i>Note.</i> The <code>nav-header</code> can still be used when pulling nav items left or right.</p>
      <hr>

      <h3>Dropdown Menus</h3>

      <p>Dropdown menus help keep your nav bars clean and tidy. For functions such as logging out this UI element can be extremely useful.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <nav class="nav-bar nav-inline pull-right">
          <div class="nav-header">
            <a href="#" class="name"><span>gmrui</span></a>
          </div>
          <ul>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Lorem</a></li>
            <li class="dropdown">
              <a href="#">Lorem</a>
              <ul class="dropdown-menu">
                <li><a href="#">My Account and Settings</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code class="html" title="Top nav dropdown">&lt;nav class=&quot;nav-bar nav-inline pull-right&quot;&gt;
  &lt;div class=&quot;nav-header&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;name&quot;&gt;&lt;span&gt;gmrui&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Lorem&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;dropdown&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;Lorem&lt;/a&gt;
      &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;My Account and Settings&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Logout&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>

      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_navbars.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>