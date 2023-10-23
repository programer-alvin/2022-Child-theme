<?php
// customizer
function custom_theme_customize_register($wp_customize) {
    $wp_customize->add_section('custom_section', array(
        'title' => 'Custom Section',
        'priority' => 30,
    ));

    $wp_customize->add_setting('custom_setting', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('custom_setting_control', array(
        'label' => 'Custom Setting Label',
        'section' => 'custom_section',
        'settings' => 'custom_setting',
        'type' => 'text',
    ));

    $wp_customize->add_setting('custom_setting2', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('custom_setting_control2', array(
        'label' => 'Custom Setting Label 2',
        'section' => 'custom_section',
        'settings' => 'custom_setting2',
        'type' => 'text',
    ));
}
add_action('customize_register', 'custom_theme_customize_register');
