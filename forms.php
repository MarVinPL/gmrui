<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    $page = "forms";
  ?>
  <title>GMRUI - Forms</title>
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
      <h1>Forms</h1>
      <p class="lead">Using forms with gmrui is simple. We have aimed to minimize the amount of markup changes needed to control their layouts.</p>

      <hr>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <form role="form">
          <div class="form-row">
            <label for="ipt1">Email address</label>
            <input type="email" id="ipt1" placeholder="Enter email">
          </div>
          <div class="form-row">
            <label for="ipt2">Password</label>
            <input type="password" id="ipt2" placeholder="Password">
            <div class="form-helper">Help text here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio repellendus magni hic veritatis. Facilis, <code>corrupti</code> ipsum obcaecati earum dignissimos quae officia quo quos, veritatis maiores ducimus tenetur.</div>
          </div>
          <div class="form-row">
            <label for="ipt3">File input</label>
            <input type="file" id="ipt3">
          </div>
          <div class="form-row">
            <textarea rows="6" placeholder="Your comments"></textarea>
          </div>
          <div class="form-row">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
          <div class="form-row checkbox">
            <input id="check1" type="checkbox">
            <label for="check1">Remember me</label>
          </div>
        </form>
      </div>

      <p class="doc-helper"><small>HTML</small></p>
      <pre><code title="Forms" class="html">&lt;form role=&quot;form&quot;&gt;
  &lt;div class=&quot;form-row&quot;&gt;
    &lt;label for=&quot;ipt1&quot;&gt;Email address&lt;/label&gt;
    &lt;input type=&quot;email&quot; id=&quot;ipt1&quot; placeholder=&quot;Enter email&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-row&quot;&gt;
    &lt;label for=&quot;ipt2&quot;&gt;Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; id=&quot;ipt2&quot; placeholder=&quot;Password&quot;&gt;
    &lt;div class=&quot;form-helper&quot;&gt;Help text here.&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-row&quot;&gt;
    &lt;label for=&quot;ipt3&quot;&gt;File input&lt;/label&gt;
    &lt;input type=&quot;file&quot; id=&quot;ipt3&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-row&quot;&gt;
    &lt;textarea rows=&quot;6&quot; placeholder=&quot;Your comments&quot;&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-row&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-row checkbox&quot;&gt;
    &lt;input id=&quot;check1&quot; type=&quot;checkbox&quot;&gt;
    &lt;label for=&quot;check1&quot;&gt;Remember me&lt;/label&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>

      <hr>

      <h3>Accessibility</h3>
      <p>Forms utilise the browsers standard accessibility features.</p>
      <hr>

      <h3>Helper Classes</h3>
      <p>gmrui allows you to display your forms with more flexibility. To display your form controls and their labels inline simply add the class <code>inline</code> to your <code>&lt;form&gt;</code> tag.</p>
      <div class="doc-example">
        <form role="form" class="inline">
          <div class="form-row">
            <label for="ipt11">Email address</label>
            <input type="email" id="ipt1" placeholder="Enter email">
          </div>
          <div class="form-row">
            <label for="ipt12">Password</label>
            <input type="password" id="ipt2" placeholder="Password">
            <div class="form-helper">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
          </div>
          <div class="form-row">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
          <div class="form-row checkbox">
            <input id="check2" type="checkbox">
            <label for="check2">Remember me</label>
          </div>
        </form>
      </div>
      <hr>

      <h3>Search Form</h3>
      <p>The gmrui search form has been constructed to include all UI components necessary for a rich user experience. It takes advantage of flexbox which you can read more about <a target="_blank" href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">here</a>. Flexbox works on <b>all modern browsers</b>, see which <a target="_blank" href="http://caniuse.com/#search=flexbox">here</a>.</p>
      <p class="doc-helper"><small>Search Demo</small></p>
      <div class="doc-example">
        <form role="form" class="search">
          <input type="search" required placeholder="Search gmrui">
          <button class="close-icon" type="reset"></button>
          <button class="btn btn-default">Go</button>
        </form>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <pre class="html"><code title="Search form">&lt;form role=&quot;form&quot; class=&quot;search&quot;&gt;
  &lt;input type=&quot;search&quot; required placeholder=&quot;Search gmrui&quot;&gt;
  &lt;button class=&quot;close-icon&quot; type=&quot;reset&quot;&gt;&lt;/button&gt;
  &lt;button class=&quot;btn btn-default&quot;&gt;Go&lt;/button&gt;
&lt;/form&gt;</code></pre>
      <p><i>Note.</i> For the reset button to work, the input <code>required</code> attribute is required.</p>
      <hr>

      <h3>Default Inputs</h3>
      <p>gmrui supports all text-based input fields. Included support for all HTML5 types: <code>text</code>, <code>password</code>, <code>date</code>, <code>time</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.</p>
      
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <input type="text" placeholder="Standard text input">
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre class="html"><code title="Default inputs">&lt;input type=&quot;text&quot; placeholder=&quot;Standard text input&quot;&gt;</code></pre>
      <p><i>Note.</i> gmrui does not require default inputs to have a class.</p>
      <hr>

      <h3>Textareas</h3>
      <p>Textareas can be rezised vertically when the resize handle is dragged. Horizontal scaling has been disabled. The textareas support multiple lines using the <code>rows=""</code> attribute.</p>

      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <textarea rows="4" placeholder="Standard text input"></textarea>
      </div>
      
      <p class="doc-helper"><small>HTML</small></p>
      <pre class="html"><code title="Textareas">&lt;textarea rows=&quot;4&quot; placeholder=&quot;Standard text input&quot;&gt;&lt;/textarea&gt;</code></pre>
      <hr>

      <h3>Selects</h3>
      <p>gmrui has opted to used default browser styling with absolute minimal changes made for best cross-browser compatibility.</p>
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <select>
          <option selected>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <pre class="html"><code title="Default select">&lt;select&gt;
  &lt;option selected&gt;Option 1&lt;/option&gt;
  &lt;option&gt;Option 2&lt;/option&gt;
  &lt;option&gt;Option 3&lt;/option&gt;
  &lt;option&gt;Option 4&lt;/option&gt;
  &lt;option&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
      <p>For multiple selects, we have chosen to adopt similar styling to our other default inputs.</p>
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <select multiple>
          <option selected>Option 1</option>
          <option selected>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </div>
      <pre class="html"><code title="Multiple select">&lt;select multiple&gt;
  &lt;option selected&gt;Option 1&lt;/option&gt;
  &lt;option selected&gt;Option 2&lt;/option&gt;
  &lt;option&gt;Option 3&lt;/option&gt;
  &lt;option&gt;Option 4&lt;/option&gt;
  &lt;option&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>

      <p>For styled selects, wrap your standard select with a div ensuring it has the class <code>select-gmrui</code>.</p>
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <div class="select-ryze">
          <select>
            <option selected>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
      </div>
      <div class="doc-helper"><small>HTML</small></div>
      <pre class="html"><code title="Styled select">&lt;div class=&quot;select-gmrui&quot;&gt;
  &lt;select&gt;
    &lt;option selected&gt;Option 1&lt;/option&gt;
    &lt;option&gt;Option 2&lt;/option&gt;
    &lt;option&gt;Option 3&lt;/option&gt;
    &lt;option&gt;Option 4&lt;/option&gt;
    &lt;option&gt;Option 5&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;</code></pre>
      <hr>

      <h3>Disabled State</h3>
      <p>Some forms require you to submit data that cannot be changed. In this circumstance you may add the <code>disabled</code> attribute to any <code>input</code>, <code>select</code> or <code>select</code>.</p>
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <input type="text" placeholder="Disabled" disabled>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <div class="doc-example">
        <pre class="html"><code title="Disabled inputs">&lt;input type=&quot;text&quot; placeholder=&quot;Disabled&quot; disabled&gt;</code></pre>
      </div>
      <hr>

      <h3>Readonly Inputs</h3>
      <p>Some forms may ask the user to fill out something previously submitted that cannot be changed. In this circumstance you may add the <code>readonly</code> attribute to any <code>input</code>.</p>
      <p class="doc-helper"><small>Demo</small></p>
      <div class="doc-example">
        <input type="text" value="GMR UI" readonly>
      </div>
      <p class="doc-helper"><small>HTML</small></p>
      <div class="doc-example">
        <pre class="html"><code title="Readonly inputs">&lt;input type=&quot;text&quot; value=&quot;GMR UI&quot; readonly&gt;</code></pre>
      </div>
      <hr>

      <h3>GitHub</h3>
      <p>Take a look at this components <b>SASS</b> file on <a href="https://github.com/gmrgo/gmrui/tree/gh-pages/scss/gmrui/_forms.scss">GitHub</a>.</p>

    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

</body>
</html>