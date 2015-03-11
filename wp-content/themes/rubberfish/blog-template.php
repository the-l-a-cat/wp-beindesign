<?php/*
Template Name: blog-template
*/?> 

		<?php if ( is_home()) {
			get_header(); ?> 
			 
			
			<?php }; ?>
		
		
		
		
		<div  class="content-area blog-wr " >
					
		<?php if ( !is_home()) {
			 global $query_string; 
			$posts = query_posts($query_string.'&posts_per_page=3');	
		}; 
		?>
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article  class="blog-p" id="<?php the_ID(); ?>" >
		
					<?php if ( has_post_thumbnail() ) : ?>
						<div >
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
					<?php endif; ?>
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>		
						<div >
							<?php the_content(); ?>
						</div>
						
						

			</article>
					<?php endwhile; ?>
				<?php endif;
					
					wp_reset_query();?>
			
			<?php if ( is_front_page()){
				$page_id=23;
				 ?>
			<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
		
			<?php }; ?>
				
		</div><!-- content-area -->

<?php get_footer(); ?>