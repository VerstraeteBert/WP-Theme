<?php
    /* Main Header template */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Bertfolio</title>
    <!-- TODO Dynamic title -->
    <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
<main>
<header>
    <nav class="header-nav">
           <?php
           wp_nav_menu( $arg = [
               'theme_location' => 'primary'
           ]);
           ?>
    </nav>
</header>