<?php 
    $header_src = get_header_image();
    $header_width = HEADER_IMAGE_WIDTH;
    $header_height = HEADER_IMAGE_HEIGHT;
    if( is_singular() ) {
        $post = get_queried_object();
        if( $thumb_id = get_post_thumbnail_id( $post->ID ) ) {
           $header_image = wp_get_attachment_image_src( $thumb_id, array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) );
           if( $header_image[1] >= HEADER_IMAGE_WIDTH ) {
               $header_src = $header_image[0];
               $header_width = $header_image[1];
               $header_height = $header_image[2];
           }
        }
    }
?>
<script type="text/javascript">
    var pjaxy_page_info = {
        body_class: "<?php echo esc_js( join( ' ', get_body_class( 'pjax-loaded' ) ) ); ?>",
        page_title: "<?php echo esc_js( wp_title( '', false ) ); ?>",
        header_img: "<?php echo esc_js( $header_src ); ?>",
        header_height: "<?php echo esc_js( $header_height ); ?>",
        header_width: "<?php echo esc_js( $header_width ); ?>"
    }
</script>
