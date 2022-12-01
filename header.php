<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">  
    <title><?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?></title>
    <style>
      :root {
        --boxShadowColor: <?php echo get_theme_mod('box_shadow_color') ?>;
        --boxShadow: <?php echo get_theme_mod('box_shadow') ?> rgb(var(--boxShadowColor) / .5);
        --boxShadowHoverColor: <?php echo get_theme_mod('box_shadow_hover_color') ?>;
        --boxShadowHover: inset <?php echo get_theme_mod('box_shadow_hover') ?> rgb(var(--boxShadowHoverColor) / 1);
        --borderRadius: <?php echo get_theme_mod('button_border_radius') ?>;
      }

      nav {
        background-color: <?php echo get_theme_mod('nav_background_color') ?>;
        box-shadow: var(--boxShadow);
      }

      nav a {
        color: <?php echo get_theme_mod('nav_text_color') ?>;
      }

      nav li:hover {
        background-color: <?php echo get_theme_mod('listitem_background_color') ?>;
      }

      nav li a:hover {
          color: <?php echo get_theme_mod('listitem_link_text_hover_color') ?>;
      }

      h1,
      h2,
      h3,
      h4,
      a {
        font-family: <?php echo get_theme_mod('heading_link_font_family'); ?>; 
      }

      nav button.hamburger {
        background-color: <?php echo get_theme_mod('hamburger_background_color') ?>;
      }

      nav button.hamburger h2 {
        color: <?php echo get_theme_mod('hamburger_text_color') ?>;
      }

      body {
        font-family: <?php echo get_theme_mod('body_font_family') ?>;
        background-color: <?php echo get_theme_mod('body_background_color') ?>;
      }

      .hero .card {
        background-color: <?php echo get_theme_mod('hero_card_background_color') ?>;
        color: <?php echo get_theme_mod('hero_card_text_color') ?>;
      }

      .hero-btn {
        background-color: <?php echo get_theme_mod('hero_button_background_color') ?>;
        color: <?php echo get_theme_mod('hero_button_text_color') ?>;
      }

      .hero-btn:hover {
        background-color: <?php echo get_theme_mod('hero_button-background_hover_color') ?>;
        color: <?php echo get_theme_mod('hero_button_text_hover_color') ?>;
      }

      .card {
        background-color: <?php echo get_theme_mod('card_background_color') ?>;
        color: <?php echo get_theme_mod('card_text_color') ?>;
        box-shadow: var(--boxShadow);
        border-radius: var(--borderRadius);
      }

      button,
      .schedule-button,
      .payment-button {
        background-color: <?php echo get_theme_mod('button_background_color') ?>;
        color: <?php echo get_theme_mod('button_text_color') ?>;
        border-radius: var(--borderRadius);
        box-shadow: var(--boxShadow);
      }

      button:hover {
        background-color: <?php echo get_theme_mod('button_background_hover_color') ?>;
        color: <?php echo get_theme_mod('button_text_hover_color') ?>;
        box-shadow: var(--boxShadowHover);
      }

      a:visited {
        color: <?php echo get_theme_mod('link_visited_text_color') ?>;
      }

      .thfw-footer {
        background-color: <?php echo get_theme_mod('footer_background_color') ?>;
        color: <?php echo get_theme_mod('footer_text_color') ?>;
      }

      .footerNav a {
        color: <?php echo get_theme_mod('footer_link_color') ?>;
      }

      footer .bottom {
        box-shadow: var(--boxShadow);
      }
    </style>
  <?php wp_head();?>
</head>
<body>
 
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
      <div class="logo photo-link">
          <a href="<?php echo get_bloginfo('wpurl'); ?>">
              <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
              ?>
          </a>
      </div>

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