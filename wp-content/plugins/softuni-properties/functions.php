<?php

function softuni_update_property_views($post_id)
{
    if (empty($post_id)) {
        return;
    }

    if (!is_single('property')) {
        return;
    }

    $view_count = get_post_meta($post_id, 'views_count', true);
    if (!empty($view_count)) {
        $view_count++;
    } else {
        $view_count = 1;
    }
    update_post_meta($post_id, 'views_count');
}