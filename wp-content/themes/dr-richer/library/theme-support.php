<?php

// ----- General Theme Settings -----

if (!function_exists('theme_support')) :
    function theme_support()
    {
        // Add language support
        load_theme_textdomain('foundationpress', get_template_directory() . '/languages');

        // Switch default core markup for search form, comment form, and comments to output valid HTML5
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        // Add menu support
        add_theme_support('menus');

        // Let WordPress manage the document title
        add_theme_support('title-tag');

        // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');

        // RSS thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support: http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
    }

    add_action('after_setup_theme', 'theme_support');
endif;

// ----- Enable SVG ------

function mime_types($mimes)
{
    // New allowed mime types.
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc']  = 'application/msword';

    // Optional. Remove a mime type.
    unset($mimes['exe']);

    return $mimes;
}
add_filter('upload_mimes', 'mime_types');



// ----- Exclude attachments from search results -----
function exclude_images_from_search_results()
{
    global $wp_post_types;
    $wp_post_types['attachment']->exclude_from_search = true;
}
add_action('init', 'exclude_images_from_search_results');
