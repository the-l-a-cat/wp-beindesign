<?php /*
Template Name: blog-template
*/ ?> 
    <?php get_header(); ?> 
    <script>

    function transition_in (x) {
        jQuery (x) .css ('display', 'block');
        jQuery (x) .css ('visibility', 'visible');
        jQuery (x) .fadeTo (500, 1);
    }

    function transition_out (x) {
        jQuery (x) .fadeTo (500, 0);
        jQuery (x) .css ('display', 'none');
    }

    function transition (target_screen) {
        if (current_screen != target_screen) {
            transition_out (current_screen);
            transition_in (target_screen);
            current_screen = target_screen;
        }
    }


    function Clone(x) {
           for(p in x)
               this[p] = (typeof(x[p]) == 'object')? new Clone(x[p]) : x[p];
    }

    var contents = [] ;
    var current_screen = ''

    </script>
    <div>
        <ul class='blog-menu'>
<?php if (is_category('frontpage')):
echo '<li><span>BEinDESIGN</span></li>';
else:
    echo '<li><a href="'.get_term_link('frontpage', 'category') .'">BEinDESIGN</a></li>';
endif; ?>
        </ul>
    </div>
    <div  class="content-area blog-wr" >
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part ('post'); ?>
    <?php endwhile; ?>

    </div><!-- content-area -->
<script>

                for (x in contents) {
                    jQuery ('.blog-menu') .append (
                        '<li id="blog-menu-' + contents[x]['slug']
                        + '">' + contents[x]['title']
                        + '</li>'
                    );

                    function closure (target_slug) {
                        function tempora () {
                            var target_screen = '#post-'+target_slug;
                            transition (target_screen);
                        }
                        return tempora;
                    }

                    jQuery ('#blog-menu-' + contents [x] ['slug']) .click (
                        closure (contents [x] ['slug'])
                    );


                };

                // Initialize first screen.
                if (window.location.hash) { current_screen = window.location.hash ; }
                else { current_screen = '#post-' + contents [0] ['slug']; }
                jQuery(document) .ready ( function () {
                    setTimeout (transition_in (current_screen, current_screen), 1000); //???
                    scroll_listener();
                }
                );

                function scroll_listener () {
                    var delta = 12;
                    jQuery(window) .bind ('DOMMouseScroll mousewheel', function (event) {
                        if (Math.abs(event.originalEvent.wheelDelta) < delta || Math.abs (event.originalEvent.detail) < delta) {
                            return;
                        }
                            return;

                        if (event.originalEvent.wheelDelta > 0) {
                            for (x in contents) {
                                if ('#post'+contents [x] ['slug'] == current_screen) {
                                    if (x+1 in contents) {
                                        transition ('#post-' + contents [x+1] ['slug']);
                                    }
                                }
                            }
                        }
                    }
                )
                }



                jQuery ('.blog-menu li') .hover ( function () {
                    jQuery (this) .css ('border', '2px solid rgba(128, 128, 128, 1.0')
                }
                , function () {
                    jQuery (this) .css ('border', '2px solid rgba(128, 128, 128, 0.0')
                }
                );

</script>

<?php get_footer(); ?>
