<?php /*
Template Name: blog-template
*/ ?> 
<?php get_header(); ?> 
<script>

function transition_in (x) {
    console.log ('trans in ' + x);
    obj = $(x);
    obj .fadeIn(500)
        .queue ('in', function (next) { console.log ('trans in queue enter'); next('in') } )
        .queue ('in', function (next) { obj .css ('display', 'block'); next('in') } )
        .queue ('in', function (next) { obj .css ('visibility', 'visible'); next('in') } )
        .queue ('in', function (next) { obj .animate ({'opacity': 1}); next('in') } )
        .queue ('in', function (next) { console.log ('trans in queue done'); next('in') } )

    $(current_label) .animate ({ 'color': jQuery.Color([0, 0, 0, 0.6]) }, 'fast');
}

function transition_out (x) {
    console.log ('trans out ' + x);
    obj = $(x);
    obj
        .queue ( function (next) { obj .animate ({'opacity': 1}); next() } )
        .queue ( function (next) { obj .css ('display', 'none'); next() } )
        .queue ( function (next) { $(window) .resize(); } )

    $(target_label) .animate ({ 'color': jQuery.Color([0, 0, 0, 0.9]) }, 'fast');
}

function transition (label) {
    target_screen = '#post-' + label;
    target_label = '#blog-menu-' + label;
    console.log ( 'current screen ' + current_screen );
    console.log ( 'current label ' + current_label );
    console.log ( 'label ' + label );
    if (current_screen != target_screen) {
        transition_out (current_screen);
        transition_in (target_screen);

        current_screen = target_screen;
        current_label = target_label;
        $(window) .resize();
    }
}


function Clone(x) {
       for(p in x)
           this[p] = (typeof(x[p]) == 'object')? new Clone(x[p]) : x[p];
}

var contents = [] ;
var current_screen = '' ;
var current_label = '' ;
var label = '';

</script>

<div>
    <div class='nav blog-menu margins'>
<?php if (is_category('frontpage')):
echo '<div class="nav-elem inline-block"><span>BEinDESIGN</span></div>';
else:
    echo '<div class="nav-elem inline-block"><a href="'.get_term_link('frontpage', 'category') .'">BEinDESIGN</a></div>';
endif; ?>
        </div>
    </div>
    <div  class="content-area blog-wr" >
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part ('post'); ?>
    <?php endwhile; ?>

    </div><!-- content-area -->
<script>

for (x in contents) {
    $ ('.blog-menu') .append (
        '<div class="nav-elem inline-block" id="blog-menu-' + contents[x]['slug']
        + '">' + contents[x]['title']
        + '</div>'
    );

    function closure (target_slug) {
        function tempora () {
            transition (target_slug);
        }
        return tempora;
    }

    $ ('#blog-menu-' + contents [x] ['slug']) .click (
        closure (contents [x] ['slug'])
    );


};

// Initialize first screen.
if (window.location.hash) { current_screen = window.location.hash ; }
else {
    label = contents [0] ['slug'];
    current_screen = '#post-' + contents [0] ['slug'];
    current_label = '#blog-menu-' + contents [0] ['slug'];
}

$(document) .ready ( function () {
    setTimeout (transition (label), 1000); //???
    scroll_listener();
}
);

function scroll_listener () {
    scroll_value = 0;
    var delta = 3;
    $(window) .bind ('DOMMouseScroll mousewheel', function (event) {
        var scroll_unit_firefox = event.originalEvent.wheelDelta / -120;
        var scroll_unit_chrome = event.originalEvent.detail / 3;
        
        if (! isNaN(scroll_unit_firefox) ) { console.log (scroll_unit_firefox) ; scroll_value = scroll_value + parseInt (scroll_unit_firefox) };
        if (scroll_unit_chrome !== NaN) { scroll_value = scroll_value + parseInt (scroll_unit_chrome) };
        if (Math.abs(scroll_value) > delta) {
            for (x in contents) {
                if ('#post-' + contents [x] ['slug'] === current_screen) {
                    if (parseInt(x) + Math.sign(scroll_value) in contents) {
                        transition (contents [parseInt(x)+Math.sign (scroll_value)] ['slug']);
                    }
                    break;
                }
            }
            scroll_value = 0;
        }
    }
)
}



$ ('.blog-menu li') .hover ( function () {
    $ (this) .css ('border', '2px solid rgba(128, 128, 128, 1.0')
    $ (this) .css ('z-index', '1000')
}
, function () {
    $ (this) .css ('border', '2px solid rgba(128, 128, 128, 0.0')
    $ (this) .css ('z-index', '0')
}
);

$(window).resize(function() {
    return $('.fullscreen').each(function() {
        return $(this).css({
            'height': $(window).height() - (
                parseInt($(this).css('margin-bottom')
                    ) ) - $(this).offset().top 
        });
    });
});

$(document).ready(function() {
    return $(window).resize();
});

</script>
