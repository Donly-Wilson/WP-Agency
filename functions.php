<?php
function mytheme_post_thumbnails()
{
    //Add functionality for featured images
    add_theme_support('post-thumbnails');
    //Add functionality for excerpt
    add_post_type_support('page', 'excerpt');
}
add_action(
    'after_setup_theme',
    'mytheme_post_thumbnails'
);
