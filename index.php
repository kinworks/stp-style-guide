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
	      typekit: { id: 'ovp2cfb' } // This is currently Ben's personal Typekit - needs an update when STP have their own account
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
  <?php include('functions.php'); ?>
  <body>
    <header class="header">
      <h1>Scotland's Towns Partnership - Style Guide</h1>
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
      
      <br/>
      
      <h1 class="guidance">Core Assets</h1>
      
    <?php // CSS reset pattern box ======================================================?>
      
      <div class="pattern">
          <div class="display">
            <h2 class="guidance">Global CSS reset</h2>
      
            <p class="guidance">
              The baseline for this style guide consists of a CSS reset and a small set of common 'defaults'. These should be used when implementing code from this style guide, or the appropriate steps taken to make sure your replicated component behaves in the same way if you choose not to use them.
            </p>
      
      <p class="guidance">
        The CSS reset used is <a href="http://necolas.github.io/normalize.css/" target="blank">Normalize</a> at version <b class="update">3.0.2</b>.
      </p>
          </div>
          <div class="js-tab-ui panels">
            <ul class="js-tabs-list" role="tablist">
              <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                CSS
              </li>
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/css/sass/_1-normalize.scss" target="_blank">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                  View Raw File &raquo;
                </li>
              </a>
  
            </ul>
            <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
              <h2 class="js-panel__title">SCSS</h2>
              <pre>
                <code><?php echo file_get_contents("css/sass/_1-normalize.scss"); ?></code>
              </pre>
            </div>
          </div>
        </div>
  
  <?php // CSS defaults pattern box ====================================================== ?>
      
      <div class="pattern">
          <div class="display">
            <h2 class="guidance">Our 'defaults'</h2>
      
            <p class="guidance">
              The baseline for this style guide consists of a CSS reset and a small set of common 'defaults'. These should be used when implementing code from this style guide, or the appropriate steps taken to make sure your replicated component behaves in the same way if you choose not to use them.
            </p>
      
      <p class="guidance">
        The item of highest priority in our 'defaults' is probably the decision to <a href="http://quirksmode.org/css/user-interface/boxsizing.html" tagrte="_blank">use IE's box model for everything;</a> otherwise, you can choose to include these as a global defaults file (as we do) or selectively implement features from it to help you achieve the same end visual behaviours for the components in this style guide.
      </p>
          </div>
          <div class="js-tab-ui panels">
            <ul class="js-tabs-list" role="tablist">
              <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                SCSS
              </li>
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/css/sass/_3-defaults.scss" target="_blank">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                  View Raw File &raquo;
                </li>
              </a>
  
            </ul>
            <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
              <h2 class="js-panel__title">SCSS</h2>
              <pre>
                <code><?php echo file_get_contents("css/sass/_3-defaults.scss"); ?></code>
              </pre>
            </div>
          </div>
        </div>
  
  <?php // Mixins pattern box ====================================================== ?>
      
      <div class="pattern">
          <div class="display">
            <h2 class="guidance">Our SASS Mixins</h2>
      
            <p class="guidance">
              A handful of these will be used for items in this style guide. Usage is entirely optional, but they're useful — and if you're copying code from the style guide containing a mixin, you'll need the appropriate section of this file too. 
            </p>
      
          </div>
          <div class="js-tab-ui panels">
            <ul class="js-tabs-list" role="tablist">
              <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                SCSS
              </li>
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/css/sass/_2-mixins.scss" target="_blank">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                  View Raw File &raquo;
                </li>
              </a>
  
            </ul>
            <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
              <h2 class="js-panel__title">SCSS</h2>
              <pre>
                <code><?php echo file_get_contents("css/sass/_2-mixins.scss"); ?></code>
              </pre>
            </div>
          </div>
        </div>
        
      <?php // COLOUR / COLOR / COLUUÜUR ==============================================?>
        
        <br/>
        <h1 class="guidance">Colour</h1>
        
        <div class="pattern colour">
          <div class="display">
             <div class="swatches">
               
                <h2 class="guidance">Brand</h2>
                <ul>
                  <li>
                    <span class="aqua"><!--color fill--></span>
                    <b>$aqua</b>
                  </li>
                  <li>
                    <span class="mid-aqua"><!--color fill--></span>
                    <b>$mid-aqua</b>
                  </li>
                  <li>
                    <span class="dark-aqua"><!--color fill--></span>
                    <b>$dark-aqua</b>
                  </li>
                </ul>
                
                <h2 class="guidance">Modules / Body</h2>
                <ul>
                  <li>
                    <span class="charcoal"><!--color fill--></span>
                    <b>$charcoal</b>
                  </li>
                  <li>
                    <span class="white"><!--color fill--></span>
                    <b>$white</b>
                  </li>
                  <li>
                    <span class="grey"><!--color fill--></span>
                    <b>$grey</b>
                  </li>
                  <li>
                    <span class="shadow"><!--color fill--></span>
                    <b>$shadow</b>
                  </li>
                </ul>
                
                <h2 class="guidance">Calls to Action / Contrast</h2>
                <ul>
                  <li>
                    <span class="purple"><!--color fill--></span>
                    <b>$purple</b>
                  </li>
                  <li>
                    <span class="blue"><!--color fill--></span>
                    <b>$blue</b>
                  </li>
                </ul>
              </div>
          </div>
          <div class="js-tab-ui panels">
            <ul class="js-tabs-list" role="tablist">
              <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                SCSS
              </li>
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/css/sass/_4-colours.scss" target="_blank">
                <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="false" data-tabgroup="<?php echo $i ?>" class="linkout">
                  View Raw File &raquo;
                </li>
              </a>
  
            </ul>
            <div class="style js-panel" id="scss<?php echo $scss ?>" role="tabpanel" aria-labelledby="tab<?php echo $scss ?>" data-tabgroup="<?php echo $i ?>" style="display: block;">
              <h2 class="js-panel__title">SCSS</h2>
              <pre>
                <code><?php echo file_get_contents("css/sass/_4-colours.scss"); ?></code>
              </pre>
            </div>
          </div>
        </div>
        
  <?php // TYPOGRAPHY ============================================?>
        
        <br/>
        <h1 class="guidance">Typography</h1>
        
        <?php // Webfont loading ============ ?>
        
        <div class="pattern webfontloader">
          <div class="display">
            <h2 class="guidance">Webfont Loader</h2> 
            <p class="guidance">
              A common issue for users slower web connections is a rise in the use of custom webfonts loaded from external services, meaning content and features of a site are unusable until the webfont(s) have loaded in.
            </p> 
            <p class="guidance">
              To mitigate this, we use the <a href="https://github.com/typekit/webfontloader" target="_blank">Webfont Loader (GitHub)</a> co-developed by Google and Typekit which handles the loading of the webfont(s) in and updates the &lt;html&gt; tag with classes we can use to set typeface choices in CSS while the document is loading or if the fonts have failed to load.
            </p> 
            <p class="guidance">
              To use the Typekit webfonts and fallbacks selected for STP's digital branding, you'll need: 
            </p>
            <ul>
              <li>The webfont loader script (<a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/js/webfontloader.min.js" target="_blank">here,</a> minified)</li>
              <li>The &lt;script&gt; found in 'Markup' (right) in your &lt;head&gt;, and; </li>
              <li>the fallback CSS (right)</li>
            </ul>
            
            <p class="guidance">
              The current kit ID, from a Typekit account owned by STP, is <b>ovp2cfb</b> and weighs around 98kb.
            </p>
            
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-wfl-markup" aria-controls="tab-wfl-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="wfl">Markup
                </li>
                <li role="tab" id="tab-wfl-css" aria-controls="tab-wfl-css-panel" aria-selected="false" data-tabgroup="wfl">
                  CSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $branchname; ?>/js/webfontloader.min.js" target="_blank">
                  <li role="tab" class="linkout">
                    Webfontloader.min.js &raquo;
                  </li>
                </a>
              </ul>
              <div class="source js-panel first" id="tab-wfl-markup-panel" role="tabpanel" aria-labelledby="tab-wfl-markup" data-tabgroup="wfl">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/webfontloading.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-wfl-css-panel" role="tabpanel" aria-labelledby="tab-wfl-css" data-tabgroup="wfl">
                <h2 class="js-panel__title">CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_5-font-fallback.scss"); ?></code>
                </pre>
              </div>
            </div>
        </div>
          
<?php // TYPOGRAPHIC HIERARCHY ================================= ?>

      <div class="pattern hierarchy">
          <div class="display">
            <h2 class="guidance">Type hierarchy & styles</h2> 
            <?php echo file_get_contents("guidepatterns/typography.html"); ?>           
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-hierarchy-markup" aria-controls="tab-hierarchy-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="hierarchy">Markup
                </li>
                <li role="tab" id="tab-hierarchy-css" aria-controls="tab-hierarchy-css-panel" aria-selected="false" data-tabgroup="hierarchy">
                  SCSS
                </li>
              </ul>
              <div class="source js-panel first" id="tab-hierarchy-markup-panel" role="tabpanel" aria-labelledby="tab-hierarchy-markup" data-tabgroup="hierarchy">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/typography.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-hierarchy-css-panel" role="tabpanel" aria-labelledby="tab-hierarchy-css" data-tabgroup="hierarchy">
                <h2 class="js-panel__title">CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_5.1-typography.scss"); ?></code>
                </pre>
              </div>
            </div>
        </div>
        
<?php // CALLS TO ACTION / BUTTONS ================================= ?>

      <div class="pattern buttons">
          <div class="display">
            <h2 class="guidance">Buttons & Calls to Action</h2>
            <br/> 
            <?php echo file_get_contents("guidepatterns/buttons.html"); ?>           
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-buttons-markup" aria-controls="tab-buttons-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="buttons">Markup
                </li>
                <li role="tab" id="tab-buttons-css" aria-controls="tab-buttons-css-panel" aria-selected="false" data-tabgroup="buttons">
                  SCSS
                </li>
              </ul>
              <div class="source js-panel first" id="tab-buttons-markup-panel" role="tabpanel" aria-labelledby="tab-buttons-markup" data-tabgroup="buttons">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/buttons.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-buttons-css-panel" role="tabpanel" aria-labelledby="tab-buttons-css" data-tabgroup="buttons">
                <h2 class="js-panel__title">CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/_7-buttons.scss"); ?></code>
                </pre>
              </div>
            </div>
        </div>


          
        
  <?php // BEGIN REGULAR PATTERN LIBRARY ============================
        
        //Iterates through every partial html file and embeds it, also displaying a code panel for the styles and markup ?>
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