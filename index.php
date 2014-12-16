<!DOCTYPE html>
<html lang="en" class="guide">
  <head>
    <meta charset="utf-8">
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
      echo '<div class="pattern">';
      echo '<div class="display">';
      include($file);
      echo '</div>';
      echo '<div class="source">';
      echo '<h2>Markup</h2>';
      echo '<pre>';
      echo '<code>';
      echo htmlspecialchars(file_get_contents($file));
      echo '</code>';
      echo '</pre>';
      echo '</div>';
      echo '<div class="style">';
      echo '<h2>CSS/Sass</h2>';
      echo '<pre>';
      echo '<code class="sass">';
      echo '.homeblock a {
  color: darken($navcolor,5%);
  text-decoration: none;
  &:hover {
    color: $navcolor;
    text-decoration: underline;
  }
}';
      echo '</code>';
      echo '</pre>';
      echo '</div>';
      echo '</div>';
  endforeach;
  ?>
  
  </body>
</html>