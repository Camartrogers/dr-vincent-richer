<?php

// Search Results Page

$search_post_types         = get_post_types(array('exclude_from_search' => false));
$search_query_post_type = get_query_var('post_type');
$search_query             = get_search_query();
$paged                     = (get_query_var('paged')) ? get_query_var('paged') : 1;

get_header('transparent'); ?>

<section class="fluid-container">
    <h1>Search results for: '
        <?php if (strlen($search_query) > 0) {
            echo $search_query;
        } else {
            echo ' ';
        }; ?>'</h1>
</section>

<?php if (have_posts()) : ?>

<?php endif;
get_footer();
