  <?php get_header();?>

  <section class="frontPage">

    <?php 
      include_once ABSPATH . 'wp-admin/includes/plugin.php';

      if ( is_plugin_active( 'orb-products/orb-products.php' ) || is_plugin_active( 'orb-services/orb-services.php' )) {

        get_template_part('includes/section', 'hero');

        echo do_shortcode("[t7odt_orb_services_page]");
      }
    ?>

    <?php echo do_shortcode("[t7odt_thfw_portfolio_page]"); ?>
      
    <?php
      if ( is_plugin_active( 'orb-products/orb-products.php' )) {

        echo do_shortcode("[t7odt_orb_products_page]");
      }

      if ( is_plugin_active( 'orb-products/orb-products.php' ) || is_plugin_active( 'orb-services/orb-services.php' )) {

        get_template_part('includes/part', 'login');
      }
    ?>

  </section>

<?php get_footer();?>