<?php
?>

<!Doctype HTML>
<html id="html-element" class="mulish-serif">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="William Couture's Web, Game, and Software development portfolio website.">
        <meta name="keywords" content="Various programming projects made with web, game, and software development focuses.">
        <meta name="author" content="William Couture">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="games/innoculation/TemplateData/style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <?php
        if (isset($page_css))
            echo $page_css;
        ?>
    </head>
    <body>
        <div id="header-nav-container" class="header-nav-container">
            <a href="/" class="nav-item <?php if ($page_title == "explore") echo "active"; ?>">Explore</a>
            <a href="/about" class="nav-item <?php if ($page_title == "about") echo "active"; ?>">About</a>
            <a href="/contact" class="nav-item <?php if ($page_title == "contact") echo "active"; ?>">Contact</a>
        </div>
        <script src="/js/move-header-onscroll.js"></script>
