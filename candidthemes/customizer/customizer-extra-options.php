<?php

/**
 *  Fairy Extra Option
 *
 * @since Fairy 1.0.0
 *
 */
/*Extra Options*/
$wp_customize->add_section('fairy_extra_section', array(
   'priority'       => 60,
   'capability'     => 'edit_theme_options',
   'theme_supports' => '',
   'title'          => __('Extra Options', 'fairy'),
   'panel'        => 'fairy_panel',
));

/*post published or updated date*/
$wp_customize->add_setting('fairy_options[fairy-post-published-updated-date]', array(
   'capability'        => 'edit_theme_options',
   'transport' => 'refresh',
   'default'           => $default['fairy-post-published-updated-date'],
   'sanitize_callback' => 'fairy_sanitize_select'
));
$wp_customize->add_control('fairy_options[fairy-post-published-updated-date]', array(
   'choices' => array(
      'post-published'    => __('Show Post Published Date', 'fairy'),
      'post-updated'   => __('Show Post Updated Date', 'fairy'),
   ),
   'label'     => __('Show Post Publish or Updated Date', 'fairy'),
   'description' => __('Show either post published or updated date.', 'fairy'),
   'section'   => 'fairy_extra_section',
   'settings'  => 'fairy_options[fairy-post-published-updated-date]',
   'type'      => 'select',
   'priority'  => 10,
));

/*Font awesome version loading*/
$wp_customize->add_setting('fairy_options[fairy-font-awesome-version-loading]', array(
   'capability'        => 'edit_theme_options',
   'transport' => 'refresh',
   'default'           => $default['fairy-font-awesome-version-loading'],
   'sanitize_callback' => 'fairy_sanitize_select'
));
$wp_customize->add_control('fairy_options[fairy-font-awesome-version-loading]', array(
   'choices' => array(
      'version-4'    => __('Current Theme Used Version 4', 'fairy'),
      'version-5'   => __('New Fontaweome Version 5', 'fairy'),
      'version-6'   => __('New Fontaweome Version 6', 'fairy'),
   ),
   'label'     => __('Select the preferred fontawesome version', 'fairy'),
   'description' => __('You can select the latest fontawesome version to get more options for icons', 'fairy'),
   'section'   => 'fairy_extra_section',
   'settings'  => 'fairy_options[fairy-font-awesome-version-loading]',
   'type'      => 'select',
   'priority'  => 10,
));
