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
    <script src="http://localhost:8097"></script>
    <style>
      :root {
        --boxShadowColor: <?php echo esc_html( get_theme_mod('box_shadow_color') ); ?>;
        --boxShadow: <?php echo esc_html( get_theme_mod('box_shadow') ); ?> rgb(var(--boxShadowColor) / .5);
        --boxShadowHoverColor: <?php echo esc_html( get_theme_mod('box_shadow_hover_color') ); ?>;
        --boxShadowHover: inset <?php echo esc_html( get_theme_mod('box_shadow_hover') ); ?> rgb(var(--boxShadowHoverColor) / 1);
        --borderRadius: <?php echo esc_html( get_theme_mod('button_border_radius') ); ?>;
        --borderRadiusCard: none;
      }

      body {
        font-family: <?php echo esc_html( get_theme_mod('body_font_family') ); ?>;
      }

      h1,
      h2,
      h3,
      h4 {
        font-family: <?php echo esc_html( get_theme_mod('heading_link_font_family', 'Times New Roman') ); ?>; 
      }

      a {
        color: <?php echo esc_html( get_theme_mod('link_text_color') ); ?>;
      }

      a:visited {
        color: <?php echo esc_html( get_theme_mod('link_visited_text_color') ); ?>;
      }

      header {
        color: <?php echo '#' . get_theme_mod( 'header_textcolor'); ?>
      }

      nav {
        background-color: <?php echo esc_html( get_theme_mod('nav_background_color') ); ?>;
        box-shadow: var(--boxShadow);
      }

      nav a {
        color: <?php echo esc_html( get_theme_mod('nav_text_color') ); ?>;
      }

      nav li:hover {
        background-color: <?php echo esc_html( get_theme_mod('listitem_background_color') ); ?>;
      }

      nav li a:hover {
          color: <?php echo esc_html( get_theme_mod('listitem_link_text_hover_color') ); ?>;
      }

      nav .hamburger {
        background-color: <?php echo esc_html( get_theme_mod('hamburger_background_color') ); ?>;
      }

      nav .hamburger h1 {
        color: <?php echo esc_html( get_theme_mod('hamburger_text_color') ); ?>;
      }

      .card {
        background-color: <?php echo esc_html( get_theme_mod('card_background_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('card_text_color') ); ?>;
        box-shadow: var(--boxShadow);
        border-radius: var(--borderRadiusCard);
      }

      button,
      .button,
      .schedule-button,
      .payment-button {
        background-color: <?php echo esc_html( get_theme_mod('button_background_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('button_text_color') ); ?>;
        border-radius: var(--borderRadius);
        box-shadow: var(--boxShadow);
      }

      button:hover {
        background-color: <?php echo esc_html( get_theme_mod('button_background_hover_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('button_text_hover_color') ); ?>;
        box-shadow: var(--boxShadowHover);
      }

      .hero-card {
        background-color: <?php echo esc_html( get_theme_mod('hero_card_background_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('hero_card_text_color') ); ?>;
      }

      .hero-btn {
        background-color: <?php echo esc_html( get_theme_mod('hero_button_background_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('hero_button_text_color') ); ?>;
      }

      .hero-btn:hover {
        background-color: <?php echo esc_html( get_theme_mod('hero_button_background_hover_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('hero_button_text_hover_color') ); ?>;
      }

      footer {
        background-color: <?php echo esc_html( get_theme_mod('footer_background_color') ); ?>;
        color: <?php echo esc_html( get_theme_mod('footer_text_color') ); ?>;
      }

      footer a {
        color: <?php echo esc_html( get_theme_mod('footer_link_color') ); ?>;
      }

    </style>
  <?php wp_head();?>
</head>
<body <?php body_class( $class ); ?>>
<?php 
if ( ! function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
<header>
  <nav>
    <div class="leftSide">
      
      <div class="left-menu" id="left-menu">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'left-menu',
              'link_before' => '<h3>',
              'link_after' => '</h3>'
            )
          );
        ?>
      </div>      
    </div>

    <div class="center">
      <?php get_template_part('includes/part', 'logo'); ?>

      <div class="dropdown" id="dropdown">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'top-menu',
              'link_before' => '<h2>',
              'link_after' => '</h2>'
            )
            );
        ?>
      </div>
    </div>
    
    <div class="rightSide">
      <span class="hamburger" id="toggle" onclick="toggleMenu()">
        <h1 class="top" id="dropdown">I</h1>
        <h1 class="middle" id="middle">I</h1>
        <h1 class="bottom" id="dropdown">I</h1>
      </span>  

      <div class="right-menu" id="right-menu">
        <?php
          wp_nav_menu(
            array(
            'theme_location' => 'right-menu',
            'link_before' => '<h3>',
            'link_after' => '</h3>'
            )
          );
        ?>
      </div>
    </div>
  </nav>
</header>