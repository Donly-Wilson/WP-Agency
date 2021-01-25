<?php
//Create function 
function mytheme_post_thumbnails()
{
    //Add functionality for featured images
    add_theme_support('post-thumbnails');
    //Add functionality for excerpt
    add_post_type_support('page', 'excerpt');
}
//Add function to wordpress
add_action(
    'after_setup_theme',
    'mytheme_post_thumbnails'
);

function myportfolio_widgets_init()
{
    // This is the right side widget bar 
    register_sidebar(array(
        'name'          => __('right-sidebar', 'My Agency'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // This is the left side widget bar 
    register_sidebar(array(
        'name'          => __('left-sidebar', 'My Agency'),
        'id'            => 'left-sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
//Add function to wordpress
add_action('widgets_init', 'myportfolio_widgets_init');

// [template_dir image="something.jpg"]
add_shortcode('template_dir', function ($atts) {
    return get_template_directory_uri() . '/img/' . $atts['image'];
});
