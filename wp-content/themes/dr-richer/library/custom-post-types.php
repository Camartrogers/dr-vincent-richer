<?php
// ----- Register post types -----
add_action('init', 'register_cpts');
function register_cpts()
{
    // Product
    $labels = array(
        "name" => "Testimonials",
        "singular_name" => "Testimonial",
    );

    $testimonial_args = array(
        "labels" => $labels,
        "public" => false,
        "rewrite" => array("with_front" => false, "slug" => "testimonials"),
        "menu_icon" => "dashicons-post-status",
        "show_ui" => true,
        "has_archive" => false,
        'publicly_queryable'  => false,
        "show_in_menu" => true,
        'show_in_rest'    => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "hierarchical" => true,
        "query_var" => true,
        "supports" => array("title", "editor", "revisions", "page-attributes", "thumbnail"),
    );

    register_post_type("testimonials", $testimonial_args);
}