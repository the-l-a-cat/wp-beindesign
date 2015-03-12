<?php /*
Template Name: post
 */ ?>

        <article class="blog-post" id="post-<?php echo $post->post_name; ?>" >
            <?php
            if (get_page_by_path ('page-'.$post->post_name)):
                $link_to_post = True;
            elseif (get_category_by_slug($post->post_name)):
                $link_to_category = True;
            endif;
            ?>

        <?php if ($link_to_post or $link_to_category):
            {
                echo '<a class="blog-post-link"';
                if (get_page_by_path ('page-'.$post->post_name)):
                    echo ('href="/page-'.$post->post_name.'"');
                elseif (get_category_by_slug($post->post_name)):
                    echo ('href="/category/'.$post->post_name.'"');
                endif;
                echo '> <div class="inlay"> </div> </a>';
            };
            endif;
        ?>


		
            <?php if ( has_post_thumbnail() ) : ?>
                <div >
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
            <?php endif; ?>

                <h3>
                    <span href="<?php the_permalink(); ?>"><?php the_title(); ?></span>
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
