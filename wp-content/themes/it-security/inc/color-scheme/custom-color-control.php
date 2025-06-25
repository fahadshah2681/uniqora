<?php
$it_security_first_color = get_theme_mod('it_security_first_color');
$it_security_second_color = get_theme_mod('it_security_second_color');
$it_security_color_scheme_css = '';

/*------------------ Global First Color -----------*/
if ($it_security_first_color) {
  $it_security_color_scheme_css .= ':root {';
  $it_security_color_scheme_css .= '--first-theme-color: ' . esc_attr($it_security_first_color) . ' !important;';
  $it_security_color_scheme_css .= '} ';
} 

/*------------------ Global Second Color -----------*/
if ($it_security_second_color) {
  $it_security_color_scheme_css .= ':root {';
  $it_security_color_scheme_css .= '--second-theme-color: ' . esc_attr($it_security_second_color) . ' !important;';
  $it_security_color_scheme_css .= '} ';
} 

//---------------------------------Logo-Max-height--------- 
$it_security_logo_width = get_theme_mod('it_security_logo_width');
if($it_security_logo_width != false){
    $it_security_color_scheme_css .='.logo img{';
      $it_security_color_scheme_css .='width: '.esc_html($it_security_logo_width).'px;';
    $it_security_color_scheme_css .='}';
}

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$it_security_woo_product_img_border_radius = get_theme_mod('it_security_woo_product_img_border_radius');
if($it_security_woo_product_img_border_radius != false){
    $it_security_color_scheme_css .='.woocommerce-shop.woocommerce .product-content .product-image img{';
    $it_security_color_scheme_css .='border-radius: '.esc_attr($it_security_woo_product_img_border_radius).'px;';
    $it_security_color_scheme_css .='}';
}  

/*--------------------------- Preloader Background Image ------------*/

$it_security_preloader_bg_image = get_theme_mod('it_security_preloader_bg_image');
if($it_security_preloader_bg_image != false){
  $it_security_color_scheme_css .='#preloader{';
    $it_security_color_scheme_css .='background: url('.esc_attr($it_security_preloader_bg_image).'); background-size: cover;';
  $it_security_color_scheme_css .='}';
}

/*--------------------------- Scroll to top positions -------------------*/

$it_security_scroll_position = get_theme_mod( 'it_security_scroll_position','Right');
if($it_security_scroll_position == 'Right'){
    $it_security_color_scheme_css .='#button{';
        $it_security_color_scheme_css .='right: 20px;';
    $it_security_color_scheme_css .='}';
}else if($it_security_scroll_position == 'Left'){
    $it_security_color_scheme_css .='#button{';
        $it_security_color_scheme_css .='left: 20px;';
    $it_security_color_scheme_css .='}';
}else if($it_security_scroll_position == 'Center'){
    $it_security_color_scheme_css .='#button{';
        $it_security_color_scheme_css .='right: 50%;left: 50%;';
    $it_security_color_scheme_css .='}';
}

/*--------------------------- Footer background image -------------------*/

$it_security_footer_bg_image = get_theme_mod('it_security_footer_bg_image');
if($it_security_footer_bg_image != false){
    $it_security_color_scheme_css .='#footer{';
        $it_security_color_scheme_css .='background: url('.esc_attr($it_security_footer_bg_image).');';
        $it_security_color_scheme_css .= 'background-size: cover;';  
    $it_security_color_scheme_css .='}';
}

/*--------------------------- Footer image position -------------------*/

$it_security_footer_img_position = get_theme_mod('it_security_footer_img_position','center center');
if($it_security_footer_img_position != false){
    $it_security_color_scheme_css .='#footer{';
        $it_security_color_scheme_css .='background-position: '.esc_attr($it_security_footer_img_position).';';
    $it_security_color_scheme_css .='}';
}	

/*--------------------------- Blog Post Page Image Box Shadow -------------------*/

$it_security_blog_post_page_image_box_shadow = get_theme_mod('it_security_blog_post_page_image_box_shadow',0);
if($it_security_blog_post_page_image_box_shadow != false){
    $it_security_color_scheme_css .='.blog-post img{';
        $it_security_color_scheme_css .='box-shadow: '.esc_attr($it_security_blog_post_page_image_box_shadow).'px '.esc_attr($it_security_blog_post_page_image_box_shadow).'px '.esc_attr($it_security_blog_post_page_image_box_shadow).'px #cccccc;';
    $it_security_color_scheme_css .='}';
}       

/*--------------------------- Single Post Page Image Box Shadow -------------------*/

$it_security_single_post_page_image_box_shadow = get_theme_mod('it_security_single_post_page_image_box_shadow',0);
if($it_security_single_post_page_image_box_shadow != false){
    $it_security_color_scheme_css .='.single-post img{';
        $it_security_color_scheme_css .='box-shadow: '.esc_attr($it_security_single_post_page_image_box_shadow).'px '.esc_attr($it_security_single_post_page_image_box_shadow).'px '.esc_attr($it_security_single_post_page_image_box_shadow).'px #cccccc;';
    $it_security_color_scheme_css .='}';
}  

/*--------------------------- Shop page pagination -------------------*/

$it_security_wooproducts_nav = get_theme_mod('it_security_wooproducts_nav', 'Yes');
if($it_security_wooproducts_nav == 'No'){
  $it_security_color_scheme_css .='.woocommerce nav.woocommerce-pagination{';
    $it_security_color_scheme_css .='display: none;';
  $it_security_color_scheme_css .='}';
}

/*--------------------------- Related Product -------------------*/

$it_security_related_product_enable = get_theme_mod('it_security_related_product_enable',true);
if($it_security_related_product_enable == false){
  $it_security_color_scheme_css .='.related.products{';
    $it_security_color_scheme_css .='display: none;';
  $it_security_color_scheme_css .='}';
}

/*--------------------------- Scroll to Top Button Shape -------------------*/

	$it_security_scroll_top_shape = get_theme_mod('it_security_scroll_top_shape', 'circle');
	if($it_security_scroll_top_shape == 'box' ){
		$it_security_color_scheme_css .='#button{';
			$it_security_color_scheme_css .=' border-radius: 0%';
		$it_security_color_scheme_css .='}';
	}elseif($it_security_scroll_top_shape == 'curved' ){
		$it_security_color_scheme_css .='#button{';
			$it_security_color_scheme_css .=' border-radius: 20%';
		$it_security_color_scheme_css .='}';
	}elseif($it_security_scroll_top_shape == 'circle' ){
		$it_security_color_scheme_css .='#button{';
			$it_security_color_scheme_css .=' border-radius: 50%;';
		$it_security_color_scheme_css .='}';
	}