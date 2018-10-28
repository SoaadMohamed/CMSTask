<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dave Shea">
    <meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
    <meta name="robots" content="all">
    
    <title>CSS Zen Garden: The Beauty of CSS Design</title>
    <link rel="stylesheet" media="screen" href="style.css?v=8may2013">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

    
    
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body id="css-zen-garden">
  <div class="page-wrapper">
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </div>
</body>
</html>