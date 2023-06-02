<?php 

    // Enqueue custom scripts
    function wp_enqueue_custom_files() {

        // Custom JavaScript 
        wp_enqueue_script('university_main_javascript', get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);

        // Google Fonts
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

        // Font Awesome CDN
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        // Custom Styles
        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    }

    add_action('wp_enqueue_scripts', 'wp_enqueue_custom_files');

    // Add title tag to browser tab
    function university_features() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'university_features');
?>