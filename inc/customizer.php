<?php
// Add Footer Section
// $wp_customize->add_section('My_Agency_footer', array(
// 'title' => 'Footer',
// 'description' => '',
// 'priority' => 120,
// 'section' => 'My_Agency_footer'
// ));

function theme_customizer__funtion($wp_customize){
    $wp_customize->add_panel('landing_panel', array(
        'title' => 'Landing Panel',
        'priority' => 10,
        'capability' => 'edit_theme_options',
    ));

    // Add Top Section
    $wp_customize->add_section('My_Agency_top_section', array(
    'title' => 'Top Section',
    'description' => '',
    'priority' => 110,
    'panel' => 'landing_panel',
    ));

    // Add Top Section image Options
    $wp_customize->add_setting('landing_top_section_image', array(
        'default' => __('https://insidetema.com/wp-content/uploads/2018/05/170717100550_1_900x600.jpg'),
    ));
    // Control Image Options Placed
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'landing_top_section_image', array(
    'label' => 'Featured Image',
    'section' => 'My_Agency_top_section',
    'priority' => 1,
    )));

    // Add Image Options X-Axis
    $wp_customize->add_setting('landing_top_section_image_x_axis', array(
        'default' => __('-210'),
    ));
    // Control Image Options X-Axis Placement
    $wp_customize->add_control('landing_top_section_image_x_axis', array(
    'label' => 'Left / Right (X-Axis)',
    'section' => 'My_Agency_top_section',
    'priority' => 2,
    'type'=> 'number'
    ));
    
    // Add Image Options Y-Axis
    $wp_customize->add_setting('landing_top_section_image_y_axis', array(
        'default' => __('-168'),
    ));
    // Control Image Options Y-Axis Placement
    $wp_customize->add_control('landing_top_section_image_y_axis', array(
    'label' => 'Up / Down (Y-Axis)',
    'section' => 'My_Agency_top_section',
    'priority' => 3,
    'type'=> 'number'
    ));
    
    // Add Image Options Y-Axis
    $wp_customize->add_setting('landing_top_section_image_width', array(
        'default' => __('1000'),
    ));
    // Control Image Options Y-Axis Placement
    $wp_customize->add_control('landing_top_section_image_width', array(
    'label' => 'Image Width',
    'section' => 'My_Agency_top_section',
    'priority' => 4,
    'type'=> 'number'
    ));
    
    // Add Image Options Y-Axis
    $wp_customize->add_setting('landing_top_section_image_height', array(
        'default' => __('1000'),
    ));
    // Control Image Options Y-Axis Placement
    $wp_customize->add_control('landing_top_section_image_height', array(
    'label' => 'Image Height',
    'section' => 'My_Agency_top_section',
    'priority' => 5,
    'type'=> 'number'
    ));

    // Add Footer Section
    $wp_customize->add_section('My_Agency_footer', array(
    'title' => 'Footer',
    'description' => '',
    'priority' => 120,
    'panel' => 'landing_panel',
    ));

    // Add Footer Section Email Options
    $wp_customize->add_setting('landing_footer_email', array(
        'default' => __('newera@agencey.com'),
    ));
    // Control Email Options Name Where Its Placed
    $wp_customize->add_control('landing_footer_email', array(
    'label' => 'Email',
    'section' => 'My_Agency_footer',
    'priority' => 1,
    ));

    // Add Footer Section Number 1 Options
    $wp_customize->add_setting('landing_footer_number_1', array(
        'default' => __('+1 758 230 9214'),
    ));
    // Control Number 1 Options Name Where Its Placed
    $wp_customize->add_control('landing_footer_number_1', array(
    'label' => 'Primary Number',
    'section' => 'My_Agency_footer',
    'priority' => 2,
    ));

    // Add Footer Section Number 2 Options
    $wp_customize->add_setting('landing_footer_number_2', array(
        'default' => __('+44589002932'),
    ));
    // Control Number 2 Options Name Where Its Placed
    $wp_customize->add_control('landing_footer_number_2', array(
    'label' => 'Secondary Number',
    'section' => 'My_Agency_footer',
    'priority' => 3,
    ));
    
    // Add Footer Section Address Options
    $wp_customize->add_setting('landing_footer_address', array(
        'default' => __('Maigot bay, Kanel, 5th Avenue Broadway Classtown'),
    ));
    // Control Address Options Name Where Its Placed
    $wp_customize->add_control('landing_footer_address', array(
    'label' => 'Address',
    'section' => 'My_Agency_footer',
    'priority' => 4,
    'type'=>'textarea'
    ));
}
add_action('customize_register', 'theme_customizer__funtion');