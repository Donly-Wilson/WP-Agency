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


/**
 * Action fires before the form is displayed to determine position of certain form elements such as labels.
 *
 * @link   https://wpforms.com/developers/wpforms_display_field_after/
 * 
 * @param  array    $fields      Sanitized entry field values/properties.
 * @param  array    $form_data   Form settings/data.
 *
 * @return array
 */


/* First remove the label from appearing above the form field for form 71 */

function wpf_dev_display_field_before($field, $form_data)
{

    if (absint($form_data['id']) !== 71) {
        return;
    }
    remove_action('wpforms_display_field_before', array(wpforms()->frontend, 'field_label'), 15);
}

add_action('wpforms_display_field_before', 'wpf_dev_display_field_before', 10, 2);

/* Now position the label to appear below the form field for form 71 */

function wpf_dev_display_field_after($field, $form_data)
{
    if (absint($form_data['id']) !== 71) {
        return;
    }

    wpforms()->frontend->field_label($field, $form_data);
}

add_action('wpforms_display_field_after', 'wpf_dev_display_field_after', 1, 2);
/* End of repostioning label and input*/

/**
 * Modify the required field indicator
 *
 * @link https://wpforms.com/developers/how-to-change-required-field-indicator/
 *
 */
function wpf_dev_required_indicator($text)
{
    return '';
}
add_filter('wpforms_get_field_required_label', 'wpf_dev_required_indicator');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
