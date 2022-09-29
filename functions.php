<?php

if (!function_exists('startercore_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features
     *  @package StarterCore
     *  @since StarterCore 1.0
     */
    function startercore_setup()
    {
        // Make theme Available for translation
        load_theme_textdomain('startercore', get_template_directory() . '/languages');

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('editor-style.css');

        // Enqueue Theme Stylesheet
        wp_enqueue_style('style', get_stylesheet_uri());

        // Enqueue tailwind css files
        wp_enqueue_style('your-theme-styles', get_template_directory_uri() . '/css/theme.css', array(), 1.0);
    }
endif;
add_action('after_setup_theme', 'startercore_setup');
