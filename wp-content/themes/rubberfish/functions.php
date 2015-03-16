<?php
add_theme_support( 'post-thumbnails' );

add_filter( 'display_posts_shortcode_output', 'be_display_posts_portfolio', 10, 7 );
function be_display_posts_portfolio( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper ) {

    $output = '<' . $inner_wrapper . ' class="listing-item">
        <div class="index-card">
            <div class="index-card-image">
                    ' . $image .'
            </div>
            <div class="index-card-content">
                ' . $title . $date . $excerpt . '
            </div>
        </div>
    </' . $inner_wrapper . '>';
    // Finally we'll return the modified output
    return $output;
} 

?>
