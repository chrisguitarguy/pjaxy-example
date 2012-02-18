<?php
define( 'PJAXY_PATH', trailingslashit( get_template_directory() ) );
define( 'PJAXY_URL', get_template_directory_uri() );

if( is_admin() ) {
    
} else {
    require_once( PJAXY_PATH . 'inc/pjax-core.php' );
    require_once( PJAXY_PATH . 'inc/front-enqueue.php' );
}

add_action( 'after_setup_theme', 'pjaxy_setup_theme' );
function pjaxy_setup_theme() {
    
}

add_action( 'template_redirect', 'pjaxy_testing' );
function pjaxy_testing()
{
    if( is_pjax() ) {
        echo 'yep';
        exit();
    }
}
