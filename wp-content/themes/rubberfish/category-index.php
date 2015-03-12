<?php
/*
 * Template Name: Category Index
 * */
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $current_category = get_the_title(); ?>

<?php $my_query = new WP_Query( 'category_name=' . $current_category );
if ( $my_query->have_posts() ) { 
    while ( $my_query->have_posts() ) { 
        $my_query->the_post();
         ?>
             <h1><?php $current_category; ?> </h1>
        <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?></a></h2>
        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

        <div class="entry">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>

        <p class="postmetadata">
        Posted in <?php the_category(', ') ?> 
        <strong>|</strong>
        <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
        <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
    <?php wp_reset_query();?>
			
<?php
    }
}
wp_reset_postdata();
?>




<?php endwhile; ?>
<?php endif; ?>
