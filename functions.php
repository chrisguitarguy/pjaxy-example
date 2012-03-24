<?php
define( 'PJAXY_PATH', trailingslashit( get_stylesheet_directory() ) );
define( 'PJAXY_URL', trailingslashit( get_stylesheet_directory_uri() ) );

if( ! is_admin() ) {
    require_once( PJAXY_PATH . 'pjaxy/pjax-core.php' );
}

add_filter( 'pjaxy_page_info', 'pjaxy_twentyeleven_img' );
function pjaxy_twentyeleven_img( $info )
{
    if( is_singular() ) {
        $post = get_queried_object();
        if( $thumb_id = get_post_thumbnail_id( $post->ID ) ) {
           $header_image = wp_get_attachment_image_src( $thumb_id, array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) );
           if( $header_image[1] >= HEADER_IMAGE_WIDTH ) {
               $info['header_img'] = $header_image[0];
               $info['header_width'] = $header_image[1];
               $info['header_height'] = $header_image[2];
           }
        }
    }
    return $info;
}

add_action( 'after_setup_theme', 'pjaxy_twentyeleven_setup' );
function pjaxy_twentyeleven_setup()
{
    define( 'PJAXY_CONTAINER', '#main' );
    define( 'PJAXY_HEADER_IMG', 'header#branding > a img' );
}
