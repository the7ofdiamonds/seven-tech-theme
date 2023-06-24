<div class="post-category">

     <?php
     $terms = get_the_terms($post->ID, 'category');


     if (!is_wp_error($terms)) :

          foreach ($terms as $term) :
               $termlink = get_term_link($term);
     ?>
               <h3 class="category-name">
                    <a class="category-link" href="<?php echo $termlink; ?>">
                         <?php echo $term->name; ?>
                    </a>
               </h3>
     <?php endforeach;
     endif; ?>
</div>