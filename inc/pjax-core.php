<?php
/**
 * Finds the PJAX template to load with preference given to child themes
 * 
 * @since 0.1
 * @param string|array $templates Template files to search fo
 * @return string
 */
function pjaxy_find_template( $templates )
{
    $located = '';
    foreach( (array) $templates as $t ) {
        if( ! $t ) {
            continue;
        } elseif( file_exists( STYLESHEETPATH . '/pjax-templates/' . $t ) ) {
            $located = STYLESHEETPATH . '/pjax-templates/' . $t;
            break;
        } elseif( file_exists( TEMPLATEPATH . '/pjax-templates/' . $t ) ) {
            $located = TEMPLATEPATH . '/pjax-templates/' . $t;
            break;
        }
    }
    return $located;
}

function is_pjax()
{
    if( isset( $_SERVER['HTTP_X_PJAX'] ) && strtolower( $_SERVER['HTTP_X_PJAX'] ) == 'true' ) {
        return true;
    }
    return false;
}

add_filter( '404_template', 'pjaxy_404_template' );
function pjaxy_404_template( $template )
{
    return $template;
}

add_filter( 'index_template', 'pjaxy_index_template' );
function pjaxy_index_template( $template )
{
    return $template;
}

add_filter( 'archive_template', 'pjaxy_archive_template' );
function pjaxy_archive_template( $template )
{
    $post_type = get_query_var( 'post_type' );
    return $template;
}

add_filter( 'author_template', 'pjaxy_author_template' );
function pjaxy_author_template( $template )
{
    $author = get_queried_object();
    return $template;
}

add_filter( 'category_template', 'pjaxy_taxonomy_template' );
add_filter( 'tag_template', 'pjaxy_taxonomy_template' );
add_filter( 'taxonomy_template', 'pjaxy_taxonomy_template' );
function pjaxy_taxonomy_template( $template )
{
    return $template;
}

add_filter( 'date_template', 'pjaxy_date_template' );
function pjaxy_date_templaty( $template )
{
    return $template;
}

add_filter( 'home_template', 'pjaxy_home_template' );
function pjaxy_home_template( $template )
{
    return $template;
}

add_filter( 'front_page_template', 'pjaxy_front_template' );
function pjaxy_front_template( $template )
{
    return $template;
}

add_filter( 'page_template', 'pjaxy_page_template' );
function pjaxy_page_template( $template )
{
    return $template;
}

add_filter( 'single_template', 'pjaxy_singular_template' );
function pjaxy_singular_template( $template )
{
    return $template;
}

add_filter( 'attachment_template', 'pjaxy_attachment_template' );
function pjaxy_attachment_template( $template )
{
    return $template;
}

add_filter( 'paged_template', 'pjaxy_paged_template' );
function pjaxy_paged_template( $template )
{
    return $template;
}

add_filter( 'search_template', 'pjaxy_search_template' );
function pjaxy_search_template( $template )
{
    return $template;
}
