
<article class = "some-p" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		} 
	?>

	<header class="entry-header">
		<h3><?php the_title( ); ?></h3>
	</header>

	<div class="entry-content">
		<?php	the_content( );?>
	</div>

	


</article>
