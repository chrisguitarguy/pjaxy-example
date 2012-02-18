<?php
add_action( 'wp_enqueue_scripts', 'pjaxy_front_enqueue_scripts' );
function pjaxy_front_enqueue_scripts()
{
    if( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
