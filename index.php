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
      // Webfont loader - see https://github.com/typekit/webfontloader for details
	    WebFontConfig = {
	      typekit: { id: 'zjw5zyc' } // This is currently Ben's personal Typekit - needs an update when STP have their own account
	    };
	    (function() {
	      var wf = document.createElement('script');
	      wf.src = ('js/webfontloader.min.js');
	      wf.type = 'text/javascript';
	      wf.async = 'true';
	      var s = document.getElementsByTagName('script')[0];
	      s.parentNode.insertBefore(wf, s);
	    })();
	  </script>
  </head>
  <body>
    <header class="header">
      <h1>Scotland's Towns Partnership - Style Guide</h1>
      
      <?php // Get the current branch from Git
        $stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);

        $firstLine = $stringfromfile[0]; //get the string from the array
    
        $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string
    
        $branchname = $explodedstring[2]; //get the one that is always the branch name
      ?>
      <span>
        Version <?php echo $branchname; ?> - <a href="https://github.com/kinworks/stp-style-guide/tree/<?php echo $branchname; ?>" target="_blank">View on GitHub</a>
      </span>
      
    </header>
    <div id="js-binder">
    <?php // ReadMe ?>
    
    <h1 class="guidance">Introduction</h1>
    
    <p class="guidance">
      For information about this style guide and to file issues / pull requests, please refer to the project on <a href="https://github.com/kinworks/stp-style-guide/tree/<?php echo $branchname; ?>" target="_blank">GitHub</a>.
    </p>
    
    <h2 class="guidance">Global CSS reset and 'defaults'</h2>
    
    <p class="guidance">
      The baseline for this style guide consists of a CSS reset and a small set of common 'defaults'. These should be used when implementing code from this style guide, or the appropriate steps taken to make sure your replicated component behaves in the same way if you choose not to use them.
    </p>
    
    <p class="guidance">
      The CSS reset used is <a href="http://necolas.github.io/normalize.css/" target="blank">Normalize</a> at version <b class="update">3.0.2</b>. You can pull the code used as is straight from the style guide repo in <a href="https://github.com/kinworks/stp-style-guide/blob/<?php echo $branchname; ?>/css/sass/_1-normalize.scss" target="_blank">/css/sass/_1-normalize.scss</a>.
    </p>
  
    <?php // Iterates through every partial html file and embeds it, also displaying a code panel for the styles and markup ?>
    <?php
    $files = glob("patterns/*.html");
    sort($files);
    $i=1;
    foreach ($files as $file):
    $markup = $i;
    $css = ++$i;
    $scss = ++$i;
    ?>
      <div class="pattern">
        <div class="display">
        <?php include($file); ?>
        </div>
        <div class="js-tab-ui panels">
          <ul class="js-tabs-list" role="tablist">
            <li role="tab" id="tab<?php echo $markup ?>" aria-controls="markup<?php echo $markup ?>" tabindex="0" aria-selected="true" data-tabgroup="<?php echo $i ?>">
              Markup
            </li>
            <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>">
              SCSS
            </li>
            <li role="tab" id="tab<?php echo $css ?>" aria-controls="css<?php echo $css ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>">
              Generated CSS
            </li>
          </ul>
          <div class="source js-panel first" id="markup<?php echo $markup ?>" role="tabpanel" aria-labelledby="tab<?php echo $markup ?>" data-tabgroup="<?php echo $i ?>">
            <h2 class="js-panel__title">Markup</h2>
            <pre>
              <code><?php echo htmlspecialchars(file_get_contents($file)); ?></code>
            </pre>
          </div>
          <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>">
            <h2 class="js-panel__title">SCSS</h2>
            <pre>
              <code><?php echo file_get_contents("css/sass/".basename($file, ".html").".scss"); ?></code>
            </pre>
          </div>
          <div class="style js-panel" id="css<?php echo $css ?>" role="tabpanel" aria-labelledby="tab<?php echo $css ?>" data-tabgroup="<?php echo $i ?>">
            <h2 class="js-panel__title">Generated CSS</h2>
            <pre>
              <code><?php echo file_get_contents("css/output/".basename($file, ".html").".css"); ?></code>
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