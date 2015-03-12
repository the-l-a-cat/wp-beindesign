<?php /*
Template Name: post
 */ ?>
        <article class="blog-post" id="post-<?php the_ID(); ?>" >
		
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
        <script>
            contents.push (
                { 'slug'  : '<?php echo $post->post_name; ?>'
                , 'title' : '<?php echo $post->post_title; ?>'
                , 'ID'    : '<?php echo $post->ID; ?>'
                }
            )

        </script>
