<!DOCTYPE html>
<html lang="en" class="guide no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Primer</title>
    <script>(function(b,a){"querySelector"in b&&(a.className=a.className.replace(/\bno-js\b/,"js-tabs"))})(document,document.documentElement);</script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="guide.css">
    <link rel="stylesheet" href="styles/solarized_dark.css">
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>
  <body>
  
  <?php
  $files = glob("patterns/*.html");
  sort($files);
  $i=1;
  foreach ($files as $file):
  $markup = $i;
  $css = ++$i;
  ?>
    <div class="pattern">
      <div class="display">
      <?php include($file); ?>
      </div>
      <div class="js-tab-ui">
        <ul class="js-tabs-list" role="tablist">
          <li role="tab" id="tab<?php echo $markupi ?>" aria-controls="markup<?php echo $markup ?>" tabindex="0" aria-selected="true">
            Markup
          </li>
          <li role="tab" id="tab<?php echo $css ?>" aria-controls="css<?php echo $css ?>" tabindex="0" aria-selected="false">
            CSS
          </li>
        </ul>
        <div class="source js-panel" id="markup<?php echo $markup ?>" role="tabpanel" aria-labelledby="tab<?php echo $markupi ?>">
          <h2 class="js-panel__title">Markup</h2>
          <pre>
            <code><?php echo htmlspecialchars(file_get_contents($file)); ?></code>
          </pre>
        </div>
        <div class="style js-panel" id="css<?php echo $css ?>" role="tabpanel" aria-labelledby="tab<?php echo $css ?>">
          <h2 class="js-panel__title">CSS/Sass</h2>
          <pre>
            <code><?php echo file_get_contents("css/sass/_".basename($file, ".html").".scss"); ?></code>
          </pre>
        </div>
      </div>
    </div>
    <?php $i++; ?>
  <?php endforeach; ?>
  <script src="js/tabs.js"></script>
  </body>
</html>