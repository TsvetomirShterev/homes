<?php
/**
 * This functions is about enqueuing styles
 *
 * @return void
 */
function softuni_assets()
{
    wp_enqueue_style(
        'softuni-homes',
        get_template_directory_uri() . '/css/master.css',
        array(),
        filemtime( get_template_directory() . '/css/master.css' )
    );

}
add_action('wp_enqueue_scripts', 'softuni_assets');