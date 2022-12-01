<section class="hero" id="hero">
  
  <div class="card">

    <h2 class="title"><?php echo get_bloginfo( 'description' ); ?></h2>
    
    <?php the_content();?>

    <button class="hero-btn" onclick="location.href='/services/theme'" type="button">
      <h3>  
        START NOW
      </h3>
    </button>
  </div>
</section>