<?php
define( 'PJAXY_PATH', trailingslashit( get_stylesheet_directory() ) );
define( 'PJAXY_URL', trailingslashit( get_stylesheet_directory_uri() ) );

if( ! is_admin() ) {
    require_once( PJAXY_PATH . 'pjaxy/pjax-core.php' );
}

add_action( 'wp_enqueue_scripts', 'pjaxy_make_it_happen' );
function pjaxy_make_it_happen()
{
    wp_enqueue_script(
        'pjaxy-core',
        PJAXY_URL . 'js/pjaxy.js',
        array( 'jquery-pjax' ),
        NULL
    );
}
