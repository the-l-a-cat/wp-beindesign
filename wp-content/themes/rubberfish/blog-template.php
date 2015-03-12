<?php/*
Template Name: blog-template
*/?> 
    <?php get_header(); ?> 
    <script>

    function Clone(x) {
           for(p in x)
               this[p] = (typeof(x[p]) == 'object')? new Clone(x[p]) : x[p];
    }

    var contents = [] ;
    var current_screen = ''

    </script>
    <ul class='blog-menu'></ul>
    <div  class="content-area blog-wr" >
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part ('post'); ?>
    <?php endwhile; ?>
                
			<?php if ( is_front_page()){
				$page_id=23;
				 ?>
			<div class='read-more-b'><a href="<?php echo get_page_uri($page_id )?>"> Подробнее </a></div>
		
			<?php }; ?>
				
    </div><!-- content-area -->
<script>

                for (x in contents) {
                    jQuery ('.blog-menu') .append (
                        '<li id="blog-menu-' + contents[x]['ID']
                        + '">' + contents[x]['title']
                        + '</li>'
                    );

                    function closure (current_id) {
                        function tempora () {
                                jQuery (current_screen) .css ('visibility', 'hidden');
                                current_screen = '#post-' + current_id;
                                jQuery (current_screen) .css ('visibility', 'visible');
                        }
                        return tempora;
                    }

                    jQuery ('#blog-menu-' + contents [x] ['ID']) .click (
                        closure (contents [x] ['ID'])
                    );


                };

                // Initialize first screen.
                current_screen = '#post-' + contents [0] ['ID'];
                jQuery (current_screen) .css ('visibility', 'visible');

                jQuery ('.blog-menu li') .hover ( function (o) {
                    jQuery (o) .css ('background-color', 'red')
                }
                , function (o) {
                    jQuery (o) .css ('opacity', '1.0')
                }
                );

</script>

<?php get_footer(); ?>
