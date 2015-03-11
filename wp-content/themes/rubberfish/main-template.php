<?php/*
Template Name: main-template
*/?> 
	
	<?php get_header(); ?>
	
		<div  class="content-area">
			<div class="frontpage-content "	>
				    
				<div id="5" class="frontpage-part main-p "> 
					 <?php $page_id = 5;
                        
						$page_data = get_page($page_id); 
						echo '<h3 class="title">'. $page_data->post_title .'</h3>'; 
						echo apply_filters('the_content', $page_data->post_content); ?>
						
						<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
				
				</div>
				
				<div id="8" class="frontpage-part main-p"> 
				
					<?php $page_id = 8;
                        
						$page_data = get_page($page_id); 
						echo '<h3 class="title">'. $page_data->post_title .'</h3>'; 
						echo apply_filters('the_content', $page_data->post_content); ?>
						
						<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
					
				</div>
						
				<div id="11" class="frontpage-part main-p">
					<?php $page_id = 11;
                        
					$page_data = get_page($page_id); 
					echo '<h3 class="title">'. $page_data->post_title .'</h3>'; 
					echo apply_filters('the_content', $page_data->post_content); ?>
						
					<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
						
				</div>
				<div id="7" class="frontpage-part main-p">
					<?php $page_id = 7;
                        
					$page_data = get_page($page_id); 
					echo '<h3 class="title">'. $page_data->post_title .'</h3>'; 
					echo apply_filters('the_content', $page_data->post_content); ?>
						
					<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
						
				</div>
				
				<div id="23" class="frontpage-part ">  
				
					<?php get_template_part( 'blog-template' ); ?>
					
				</div>
			</div>
		</div>			
	<footer>
		<div >
			<a href="#"> Powered</a>
		</div>
	</footer>