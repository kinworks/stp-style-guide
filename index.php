<!DOCTYPE html>
<html lang="en" class="guide no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STP Style Guide</title>
    <script>(function(b,a){"querySelector"in b&&(a.className=a.className.replace(/\bno-js\b/,"js-tabs"))})(document,document.documentElement);</script>
    <link rel="stylesheet" href="css/output/global.css">
    <link rel="stylesheet" href="styles/solarized_dark.css">
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script type="text/javascript">
      // Webfont loader
  		/*
	    WebFontConfig = {
	      typekit: { id: 'zns5qtn' }
	    };

	    (function() {
	      var wf = document.createElement('script');
	      wf.src = ('js/webfont-1.4.7.min.js'); //UPDATE
	      wf.type = 'text/javascript';
	      wf.async = 'true';
	      var s = document.getElementsByTagName('script')[0];
	      s.parentNode.insertBefore(wf, s);
	    })();
	    */
	  </script>
  </head>
  <body>
    <div id="js-binder">
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
            <li role="tab" id="tab<?php echo $markup ?>" aria-controls="markup<?php echo $markup ?>" tabindex="0" aria-selected="true" data-tabgroup="<?php echo $i ?>">
              Markup
            </li>
            <li role="tab" id="tab<?php echo $css ?>" aria-controls="css<?php echo $css ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>">
              CSS
            </li>
          </ul>
          <div class="source js-panel" id="markup<?php echo $markup ?>" role="tabpanel" aria-labelledby="tab<?php echo $markup ?>" data-tabgroup="<?php echo $i ?>">
            <h2 class="js-panel__title">Markup</h2>
            <pre>
              <code><?php echo htmlspecialchars(file_get_contents($file)); ?></code>
            </pre>
          </div>
          <div class="style js-panel" id="css<?php echo $css ?>" role="tabpanel" aria-labelledby="tab<?php echo $css ?>" data-tabgroup="<?php echo $i ?>">
            <h2 class="js-panel__title">CSS/Sass</h2>
            <pre>
              <code><?php echo file_get_contents("css/sass/".basename($file, ".html").".scss"); ?></code>
            </pre>
          </div>
        </div>
      </div>
      <?php $i++; ?>
    <?php endforeach; ?>
    </div>
  <script src="js/tabs.js"></script>
  </body>
</html>