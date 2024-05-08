<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  if (!function_exists('wp_body_open')) {
    wp_body_open();
  }
  ?>
  <header>
    <div class="header">
      <div class="leftSide">

        <div class="left-menu" id="left-menu">
          <?php
          wp_nav_menu(
            array(
              'menu' => 'Left Menu',
              'theme_location' => 'left-menu',
              'link_before' => "<h3 class='title'>",
              'link_after' => '</h3>'
            )
          );
          ?>
        </div>
      </div>

      <div class="center">
        <?php get_template_part('includes/part', 'logo'); ?>
      </div>

      <div class="rightSide">
        <span class="hamburger" id="toggle" onclick="toggleMenu()">
          <h1 class="top" id="open">I</h1>
          <h1 class="middle" id="open">I</h1>
          <h1 class="bottom" id="open">I</h1>

          <h1 class="close" id="close">X</h1>
        </span>

        <div class="right-menu" id="right-menu">
          <?php
          wp_nav_menu(
            array(
              'menu' => 'Right Menu',
              'theme_location' => 'right-menu',
              'link_before' => "<h3 class='title'>",
              'link_after' => '</h3>'
            )
          );
          ?>
        </div>
      </div>
    </div>

    <nav class="dropdown" id="dropdown">
      <?php
      wp_nav_menu(
        array(
          'menu' => 'Mobile',
          'theme_location' => 'mobile-menu',
          'link_before' => "<h2 class='title'>",
          'link_after' => '</h2>'
        )
      );
      ?>
    </nav>
  </header>