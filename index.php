<!DOCTYPE html>
<html lang="en" class="guide no-js" xmlns:html="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STP Style Guide</title>
    <script>(function(b,a){"querySelector"in b&&(a.className=a.className.replace(/\bno-js\b/,"js-tabs"))})(document,document.documentElement);</script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/output/global.css">
    <link rel="stylesheet" href="css/solarized_dark.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <![if !IE 6]>  
      <script type="text/javascript">
        // Webfont loader - see https://github.com/typekit/webfontloader for details
  	    WebFontConfig = {
  	      typekit: { id: 'ovp2cfb' }
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
    <![endif]>
	  
	  <script>
  	  // Outline focus method without disrupting UI via @decadecity - https://decadecity.net/blog/2012/11/06/building-a-layered-ui#focus
      // This assumes we are using a modern browser - you'll need to cut the mustard to use this reliably.
      document.querySelector('html').classList.add('js');
      var addKeyboardHook = function () {
        document.querySelector('html').classList.add('keyboard');
        document.removeEventListener('keydown', addKeyboardHook);
      };
      document.addEventListener('keydown', addKeyboardHook);
    </script>
  </head>
  <?php include 'functions.php'; ?>
  <body>
    
    <header class="header clearfix">
      <div class="header__contents">
        <div class="header__title">
          <a href="#"><h1 class="heading heading__large">Style Guide</h1></a>
        </div>
        <a class="header__logo" href="http://www.scotlandstowns.org" target="_blank" title="Visit Scotland's Towns Partnership"></a>
      </div>
      <div class="header__trim"></div>
    </header>
    
    <span class="versioninfo">
        Version <?php echo $tagname; ?> - <a class="cta cta--blue" href="https://github.com/kinworks/stp-style-guide/tree/<?php echo $tagname; ?>" target="_blank">
          View on GitHub</a>
      </span>
    
    <div id="js-binder" class="styleguide">
    
      <?php // ReadMe ?>
      
      <h1 class="guidance">Introduction</h1>
      <br/>
      <p class="guidance">
        For information about this style guide and to file issues / pull requests, please refer to the project on <a href="https://github.com/kinworks/stp-style-guide/tree/<?php echo $tagname; ?>" target="_blank">GitHub</a>.
      </p>
      
      <p class="guidance">
        <b>Warning:</b> This guide has not been extensively browser tested, and should be viewed in Google Chrome, with the resulting rendering being taken as the target for reproducing the assets visually. With further development and improvement we hope to add to it and document any UA bugs that arise...
      </p>
      
      <div class="pattern elements-heading">
        <h1 class="guidance">Core Assets</h1>
        <br/>
      </div>
      
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
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/css/sass/_1-normalize.scss" target="_blank">
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
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/css/sass/_3-defaults.scss" target="_blank">
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
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/css/sass/_2-mixins.scss" target="_blank">
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
        
        <div class="pattern">
          <h1 class="guidance">Colour</h1>
        </div>
        
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
                
                <h2 class="guidance">Calls to Action / Contrast / Feedback</h2>
                <ul>
                  <li>
                    <span class="purple"><!--color fill--></span>
                    <b>$purple</b>
                  </li>
                  <li>
                    <span class="blue"><!--color fill--></span>
                    <b>$blue</b>
                  </li>
                  <li>
                    <span class="feedback"><!--color fill--></span>
                    <b>$feedback</b>
                  </li>
                  <li>
                    <span class="error"><!--color fill--></span>
                    <b>$error</b>
                  </li>
                </ul>
              </div>
          </div>
          <div class="js-tab-ui panels">
            <ul class="js-tabs-list" role="tablist">
              <li role="tab" id="tab<?php echo $scss ?>" aria-controls="scss<?php echo $scss ?>" aria-selected="true" data-tabgroup="<?php echo $i ?>">
                SCSS
              </li>
              <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/css/sass/_4-colours.scss" target="_blank">
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

        <div class="pattern">
          <h1 class="guidance">Typography</h1>
        </div>
        
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
            <ul class="guidance">
              <li>The webfont loader script (<a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/js/webfontloader.min.js" target="_blank">here,</a> minified)</li>
              <li>The &lt;script&gt; found in 'Markup' (right) in your &lt;head&gt;, and; </li>
              <li>the fallback CSS (right)</li>
            </ul>
            
            <p class="guidance">
              The current kit ID, from a Typekit account owned by STP, is <b>ovp2cfb</b> and weighs around 98kb.
            </p>
            
            <p class="guidance">
              IE6 has trouble with <em>document.createElement</em>, so the &lt;script&gt; tag in your document head should be wrapped in an IE6 conditional comment.
            </p>
            
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-wfl-markup" aria-controls="tab-wfl-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="wfl">Markup
                </li>
                <li role="tab" id="tab-wfl-css" aria-controls="tab-wfl-css-panel" aria-selected="false" data-tabgroup="wfl">
                  CSS
                </li>
                <a href="https://raw.githubusercontent.com/kinworks/stp-style-guide/<?php echo $tagname; ?>/js/webfontloader.min.js" target="_blank">
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
        
  <?php // HEADER BLOCK PATTERN FOR EXTERNAL SITES ==================== ?>
    
        <div class="pattern">
          <h1 class="guidance">Layout</h1>
        </div>
        <div class="pattern pattern-header">
      
          <h2 class="guidance">Header Block (External Sites / Tools)</h2>
          <p class="guidance">
            This is the header block style to be used on sites external to — or on a subdomain of — the main STP site at scotlandstowns.org.
          </p>
          <p class="guidance">
            The title heading links to the external site or tool, and the STP logo links to the main site, opening in a new window/tab.
          </p>
          <p class="guidance">
            For the purposes of this guide, the image asset required is switching to higher resolution PNG based on a media query. Our preferred method would actually be to use the SVG provided in the /assets folder and a PNG fallback, using Modernizr or similar. Either way, resolution independence for all vector-based visual assets is a requirement of any interface built for STP projects.
          </p>
          <br/>      
          <header class="header clearfix">
            <div class="header__contents">
              <div class="header__title">
                <a href="#"><h1 class="heading heading__large">Site Title</h1></a>
              </div>
              <a class="header__logo" href="http://www.scotlandstowns.org" 
              target="_blank" title="Visit Scotland's Towns Partnership"></a>
            </div>
            <div class="header__trim"></div>
          </header>
      
          <div class="display">
          
            <header class="header clearfix">
              <div class="header__contents">
                <div class="header__title">
                  <a href="#"><h1 class="heading heading__large">Site Title</h1></a>
                </div>
                <a class="header__logo" href="http://www.scotlandstowns.org" 
                target="_blank" title="Visit Scotland's Towns Partnership"></a>
              </div>
              <div class="header__trim"></div>
            </header>
            
            <iframe src="guidepatterns/mobileheader.html"></iframe>
          
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-header-markup" aria-controls="tab-header-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="header">Markup
                </li>
                <li role="tab" id="tab-header-scss" aria-controls="tab-header-scss-panel" aria-selected="false" data-tabgroup="header">
                  SCSS
                </li>
                <li role="tab" id="tab-header-css" aria-controls="tab-header-css-panel" aria-selected="false" data-tabgroup="header">
                  Generated CSS
                </li>
              </ul>
              <div class="source js-panel first" id="tab-header-markup-panel" role="tabpanel" aria-labelledby="tab-header-markup" data-tabgroup="header">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/header.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-header-scss-panel" role="tabpanel" aria-labelledby="tab-header-scss" data-tabgroup="header">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/patterns/0-header.scss"); ?></code>
                </pre>
              </div>            
              <div class="style js-panel" id="tab-header-css-panel" role="tabpanel" aria-labelledby="tab-header-css" data-tabgroup="header">
                <h2 class="js-panel__title">Generated CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/output/patterns/0-header.css"); ?></code>
                </pre>
              </div>
            </div>
          </div>
          
<?php // FOOTER BLOCK PATTERN FOR EXTERNAL SITES ==================== ?>
    
    <div class="pattern pattern-footer">
      
          <h2 class="guidance">Footer Block</h2>
          <p class="guidance">
            This is the footer block style to be on all STP web properties.
          </p>
          <p class="guidance">
            When using this pattern, be sure to verify the hardcoded links to the top-level sections of scotlandtowns.org have not changed on the main site. <b>At time of writing, these URLs do not exist but will at STP launch.</b> If using this pattern on an external site, or subdomain of scotlandstowns.org, the links could open in a new window/tab at your discretion.
          </p>

          <p class="guidance">
            For the purposes of this guide, the image asset required is switching to higher resolution PNG based on a media query. Our preferred method would actually be to use the SVG provided in the /assets folder and a PNG fallback, using Modernizr or similar. Either way, resolution independence for all vector-based visual assets is a requirement of any interface built for STP projects.
          </p>
          <br/>     
          <footer class="footer">
            <div class="footer__container clearfix">
              <h1 class="heading heading__medium">Scotland's Towns Partnership</h1>
              <a class="footer__twitter clearfix" href="https://twitter.com/ScotlandsTowns" target="_blank">
                <span class="heading heading__small">Follow us on Twitter &raquo;</span>
                <span class="icon"></span>
              </a>
              <nav class="footer__nav clearfix">
                <ul>
                  <li><a href="http://www.scotlandstowns.org/">Home</a></li>
                  <li><a href="http://www.scotlandstowns.org/news-and-resources">News &amp; Resources</a></li>
                  <li><a href="http://www.scotlandstowns.org/community">Community</a></li>
                  <li><a href="http://www.scotlandstowns.org/about-us">About Us</a></li>
                  <li><a href="http://www.scotlandstowns.org/get-involved">Get Involved</a></li>
                </ul>
              </nav>
              
            </div>
            <div class="footer__container footer__container--dark clearfix">
              <div class="footer__terms">
                <p class="text__small">
                  &copy; 2015 Scotland's Towns Ltd. Registered in Scotland No. SC419769. All Rights Reserved. 
                </p>
              </div>
            </div>
          </footer>
          
          <br/>
      
          <div class="display">
          
            <iframe class="thicker" src="guidepatterns/mobilefooter.html"></iframe>

            <br/>
                      
            <iframe class="thinner" src="guidepatterns/mobilefooter.html"></iframe>
          
          </div>
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-footer-markup" aria-controls="tab-footer-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="footer">Markup
                </li>
                <li role="tab" id="tab-footer-scss" aria-controls="tab-footer-scss-panel" aria-selected="false" data-tabgroup="footer">
                  SCSS
                </li>
                <li role="tab" id="tab-footer-css" aria-controls="tab-footer-css-panel" aria-selected="false" data-tabgroup="footer">
                  Generated CSS
                </li>
              </ul>
              <div class="source js-panel first" id="tab-footer-markup-panel" role="tabpanel" aria-labelledby="tab-footer-markup" data-tabgroup="footer">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/footer.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-footer-scss-panel" role="tabpanel" aria-labelledby="tab-footer-scss" data-tabgroup="footer">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/patterns/0-footer.scss"); ?></code>
                </pre>
              </div>            
              <div class="style js-panel" id="tab-footer-css-panel" role="tabpanel" aria-labelledby="tab-footer-css" data-tabgroup="footer">
                <h2 class="js-panel__title">Generated CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/output/patterns/0-footer.css"); ?></code>
                </pre>
              </div>
            </div>
          </div>


<?php // BLOCK LAYOUT PATTERN ==================== ?>
    
    <div class="pattern pattern-blocks">
      
          <h2 class="guidance">Layout: Blocks</h2>
          <p class="guidance">
            Layout across STP sites is handled using modules or 'blocks' against a $grey background. Blocks can be any width or height, provided that certain layout rules are adhered to.
          </p>
          <br/>
          <div class="blocks clearfix">
            
            <div class="block block--50">
              <div class="block__heading">
                <span class="heading">Standard Block</span>
              </div>
              <div class="block__content">
                Standard Block, charcoal heading bar (default bar);
                Layout: 50% (.block--50)
              </div>
            </div>
            
            <div class="block block--50 block--aqua">
              <div class="block__heading">
                <span class="heading">Aqua Block</span>
              </div>
              <div class="block__content">
                Aqua Block, charcoal heading bar (default bar);
                Layout: 50% (.block--50)
              </div>
            </div>
            
            <div class="block block--75 block--dark-aqua">
              <div class="block__heading block__heading--aqua">
                <span class="heading">Dark Aqua Block</span>
              </div>
              <div class="block__content">
                Dark Aqua Block, aqua heading bar;
                Layout: 75% (.block--75)
              </div>
            </div>
            
            <div class="block block--25 block--charcoal">
              <div class="block__heading block__heading--dark-aqua">
                <span class="heading">Charcoal Block</span>
              </div>
              <div class="block__content">
                Charcoal Block, dark aqua heading bar;
                Layout: 25% (.block--25)
              </div>
            </div>
            
            <div class="block block--33 block--trim-bottom-aqua">
              <div class="block__content">
                White Block with aqua bottom trim;
                Layout: 33% (.block--33)
              </div>
            </div>
            
            <div class="block block--33 block--trim-bottom-charcoal">
              <div class="block__content">
                White Block with charcoal bottom trim;
                Layout: 33% (.block--33)
              </div>
            </div>
            
            <div class="block block--33 block--trim-bottom-dark-aqua">
              <div class="block__content">
                White Block with dark aqua bottom trim;
                Layout: 33% (.block--33)
              </div>
            </div>
            
            <div class="block block--25 block--trim-top-aqua">
              <div class="block__content">
                White block with .block--trim-top-aqua;
                Layout: 25% (.block--25)
              </div>
            </div>
            
            <div class="block block--25 block--aqua block--trim-top-dark-aqua">
              <div class="block__content">
                Aqua block with .block--trim-top-dark-aqua;
                Layout: 25% (.block--25)
              </div>
            </div>
            
            <div class="block block--25 block--dark-aqua block--trim-top-charcoal">
              <div class="block__content">
                Dark aqua block with .block--trim-top-charcoal;
                Layout: 25% (.block--25)
              </div>  
            </div>
            
            <div class="block block--25 block--charcoal block--trim-top-dark-aqua">
              <div class="block__content">
                Charcoal Block with .block--trim-top-dark-aqua;
                Layout: 25% (.block--25)
              </div>
            </div>
            
            <div class="block block--66">
              <div class="block__heading">
                <span class="heading">66% Standard Block</span>
              </div>
              <div class="block__content">
                Standard Block, charcoal heading bar (default bar);
                Layout: 66% (.block--66)
              </div>
            </div>
            
            <div class="block block--33">
              <div class="block__heading">
                <span class="heading">33% Standard Block</span>
              </div>
              <div class="block__content">
                Standard Block, charcoal heading bar (default bar);
                Layout: 33% (.block--33)
              </div>
            </div>
            
            <div class="block block--100 block--aqua">
              <div class="block__heading block__heading--aqua">
                <span class="heading">100% Aqua Block</span>
              </div>
              <div class="block__content">
                Aqua Block, aqua heading bar;
                Layout: 100% (.block--100)
              </div>
            </div>
            
            <div class="block block--50 block--trim-bottom-aqua">
              <div class="block__image block__image--top"
                style="background: url('guidepatterns/images/banff.jpg');
                  min-height: 12.5625em">
                &nbsp;
              </div>
              <div class="block__content">
                White Block, block__image--top;
                Layout: 50% (.block--50), block--trim-bottom-aqua
              </div>
            </div>
            
            <div class="block block--50 guide-lastbanff">
              <div class="block__content">
                White Block, block__image--bottom;
                Layout: 50% (.block--50)
              </div>
              <div class="block__image block__image--bottom"
                style="background: url('guidepatterns/images/banff.jpg');
                  height: 12.5625em">
                &nbsp;
              </div>
            </div>
            
            <div class="block block--50">
              <div class="block__heading">
                <span class="heading">Standard Block</span>
              </div>
              <div class="block__image block__image--left"
                style="background: url('guidepatterns/images/edinburgh.jpg') bottom center;
                  height: 30em">
                &nbsp;
              </div>
              <div class="block__content block__content--right">
                White Block, with content set to block__content--right and image set to block__image--left;
                Layout: 50% (.block--50)
              </div>
            </div>
            
            <div class="block block--50">
              <div class="block__heading">
                <span class="heading">Standard Block</span>
              </div>
              <div class="block__content block__content--left">
                White Block, with content set to block__content--left and image set to block__image--right;
                Layout: 50% (.block--50)
              </div>
              <div class="block__image block__image--right"
                style="background: url('guidepatterns/images/edinburgh.jpg') bottom center;
                  height: 30em">
                &nbsp;
              </div>
            </div>
            
          </div><!--/blocks-->
          
          <div class="display">
            <h2 class="guidance">Block / layout rules & guidance</h2>
            <ul class="guidance">
              <li>Adding trim to blocks is optional and should be used sparingly, rather than on every block.</li>
              <li>Bottom trim should only be used on white blocks.</li>
              <li>Top trim should only be used where there's no heading bar on a block.</li>
              <li>Feel free to use <a href="http://masonry.desandro.com/" target="_blank">Masonry</a> for layout - we're doing so for news and resource content on the main website.</li>
              <li>Block width classes are for guidance; the actual widths and implementation for your app can differ, however a 3% side margin and 1em top/bottom margin should be observed regardless.</li>
              <li>Stacking blocks using media queries (e.g. for tablet sizes, turning a row of block--25 into two rows of block--50) is at your own discretion based on your block content. We don't provide any classes in this style guide for doing these manipulations.</li>
            </ul>
            <br/>
            <h3 class="guidance">For Image Blocks:/h3>
            <br/>
            <ul class="guidance">
              <li>Where possible, a neat solution to scaling images for different viewports is to use them as background images; this is what our examples use, with the image URLs and heights set in markup for demo purposes. If you're able to, looking into a solution for serving scaled images with &lt;picture&gt; or similar would be advantageous, but isn't mandated by this guide.</li>
              <li>For blocks with a block__image--top, don't set a top trim. Similarly, for blocks with a block__image--bottom, don't set a bottom trim.</li>
              <li>We've set block__image--left and --right to 50% width, along with the related classes on block__content - but these are sizes that can of course be more adjusted to suit your content.</li>
            </ul>
          </div>
          
          <div class="js-tab-ui panels">
              <ul class="js-tabs-list" role="tablist">
                <li role="tab" id="tab-blocks-markup" aria-controls="tab-blocks-markup-panel" tabindex="0" aria-selected="true" data-tabgroup="blocks">Markup
                </li>
                <li role="tab" id="tab-blocks-scss" aria-controls="tab-blocks-scss-panel" aria-selected="false" data-tabgroup="blocks">
                  SCSS
                </li>
                <li role="tab" id="tab-blocks-css" aria-controls="tab-blocks-css-panel" aria-selected="false" data-tabgroup="blocks">
                  Generated CSS
                </li>
              </ul>
              <div class="source js-panel first" id="tab-blocks-markup-panel" role="tabpanel" aria-labelledby="tab-blocks-markup" data-tabgroup="blocks">
                <h2 class="js-panel__title">Markup</h2>
                <pre>
                  <code><?php echo htmlspecialchars(file_get_contents("guidepatterns/blocks.html")); ?></code>
                </pre>
              </div>
              <div class="style js-panel" id="tab-blocks-scss-panel" role="tabpanel" aria-labelledby="tab-blocks-scss" data-tabgroup="blocks">
                <h2 class="js-panel__title">SCSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/sass/patterns/01-blocks.scss"); ?></code>
                </pre>
              </div>            
              <div class="style js-panel" id="tab-blocks-css-panel" role="tabpanel" aria-labelledby="tab-blocks-css" data-tabgroup="blocks">
                <h2 class="js-panel__title">Generated CSS</h2>
                <pre>
                  <code><?php echo file_get_contents("css/output/patterns/01-blocks.css"); ?></code>
                </pre>
              </div>
            </div>
          
    </div><!--/pattern-->               

  <?php // Heading for elements section ======================== ?>
  
  <div class="pattern elements-heading">
    <h1 class="guidance">Page Elements Style Guide:</h1>
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
        <div class="pattern elements-heading">
          <h2 class="guidance"><?php echo str_replace('-',' ', substr(basename($file, ".html"), 3)) ;?></h2>
        </div>
      
        <div class="pattern pattern-<?php echo substr(basename($file, ".html"), 3) ;?>">
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
                <code><?php echo file_get_contents("css/sass/patterns/".basename($file, ".html").".scss"); ?></code>
              </pre>
            </div>
            <div class="style js-panel" id="css<?php echo $css ?>" role="tabpanel" aria-labelledby="tab<?php echo $css ?>" data-tabgroup="<?php echo $i ?>">
              <h2 class="js-panel__title">Generated CSS</h2>
              <pre>
                <code><?php echo file_get_contents("css/output/patterns/".basename($file, ".html").".css"); ?></code>
              </pre>
            </div>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
    <footer class="footer">
      <div class="footer__container clearfix">
        <h1 class="heading heading__medium">Scotland's Towns Partnership</h1>
        <a class="footer__twitter clearfix" href="https://twitter.com/ScotlandsTowns" target="_blank">
          <span class="heading heading__small">Follow us on Twitter &raquo;</span>
          <span class="icon"></span>
        </a>
        <nav class="footer__nav clearfix">
          <ul>
            <li><a href="http://www.scotlandstowns.org/">Home</a></li>
            <li><a href="http://www.scotlandstowns.org/news-and-resources">News &amp; Resources</a></li>
            <li><a href="http://www.scotlandstowns.org/community">Community</a></li>
            <li><a href="http://www.scotlandstowns.org/about-us">About Us</a></li>
            <li><a href="http://www.scotlandstowns.org/get-involved">Get Involved</a></li>
          </ul>
        </nav>
        
      </div>
      <div class="footer__container footer__container--dark clearfix">
        <div class="footer__terms">
          <p class="text__small">
            &copy; 2015 Scotland's Towns Ltd. Registered in Scotland No. SC419769. All Rights Reserved. 
          </p>
        </div>
      </div>
    </footer>
  <script src="js/tabs.js"></script>
  </body>
</html>
