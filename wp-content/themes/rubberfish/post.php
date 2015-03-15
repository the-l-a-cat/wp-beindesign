<?php /*
Template Name: post
 */ ?>

<?php
if (get_page_by_path ('page-'.$post->post_name)):
    $link_to_post = True;
elseif (get_category_by_slug($post->post_name)):
    $link_to_category = True;
endif;
if (has_post_thumbnail()):
    $thumbnail = True;
endif;
?>
<article class="blog-post slide paper fullscreen margins" id="post-<?php echo $post->post_name; ?>" >
        <a class="fill underlay background-image"
            <?php if ($link_to_post): ?>
            href="/page-<?php echo $post->post_name; ?>"
            <?php elseif (get_category_by_slug($post->post_name)): ?>
            href="/category/<?php echo $post->post_name ; ?>"
            <?php endif ; ?>
            <?php if ($thumbnail): ?>
            <?php $thumbnail_url = wp_get_attachment_image_src(
                        (get_post_thumbnail_id($post->ID)), 'post-thumbnail', false)[0]; ?>
            style='background-image: url("<?php echo $thumbnail_url; ?>")'
            <?php endif; ?>
        >
        </a>

    <div class="content">

        <h3>
            <span href="<?php the_permalink(); ?>"><?php the_title(); ?></span>
        </h3>
        <div >
            <?php the_content(); ?>
        </div>
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
