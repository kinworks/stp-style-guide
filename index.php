<!DOCTYPE html>
<html lang="en" class="guide">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Primer</title>
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
  foreach ($files as $file):
  ?>
    <div class="pattern">
      <div class="display">
      <?php include($file); ?>
      </div>
      <div class="source">
        <h2>Markup</h2>
        <pre>
          <code><?php echo htmlspecialchars(file_get_contents($file)); ?></code>
        </pre>
      </div>
      <div class="style">
        <h2>CSS/Sass</h2>
        <pre>
          <code><?php echo file_get_contents("css/sass/_".basename($file, ".html").".scss"); ?></code>
        </pre>
      </div>
    </div>
  <?php endforeach; ?>
  </body>
</html>