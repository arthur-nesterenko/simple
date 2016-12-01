
    <?php the_content(); ?>

<?php 
    if( is_front_page() ){
        get_template_part('templates/bottom-section-content'); 
    }
?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
