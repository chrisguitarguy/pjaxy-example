jQuery(document).ready(function() {
    jQuery('a').pjax('#main').live('click', function(){
        
    });
    jQuery('#main').bind('pjax:end', function(){
        if(typeof(pjaxy_page_info) != 'undefined') {
            jQuery('body').attr('class', pjaxy_page_info.body_class);
            jQuery('head title').html(pjaxy_page_info.page_title);
            if(pjaxy_page_info.header_img) {
                jQuery('header#branding > a img').attr('src', pjaxy_page_info.header_img)
                    .attr('width', pjaxy_page_info.header_width)
                    .attr('height', pjaxy_page_info.header_height);
            }
        }
        jQuery('li.menu-item').removeClass('current-menu-item');
    });
});
