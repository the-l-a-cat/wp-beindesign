<?php
	get_header(); ?>	
		
	<div  class="content-area">

		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'page' );
			endwhile;
		?>

		
	</div>

<?php get_footer(); ?>
