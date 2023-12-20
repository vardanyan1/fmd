<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.1.6
 * 
 * Theme Settings Defaults
 * Created by Sevuni
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('alister_bank_settings_general_defaults')) {

function alister_bank_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'fmd' . '_theme_layout' => 			'liquid', 
			'fmd' . '_logo_type' => 			'image', 
			'fmd' . '_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'fmd' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'fmd' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Alister Bank', 
			'fmd' . '_logo_subtitle' => 		'', 
			'fmd' . '_logo_custom_color' => 	0, 
			'fmd' . '_logo_title_color' => 		'', 
			'fmd' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'fmd' . '_bg_col' => 			'#f5f5f6', 
			'fmd' . '_bg_img_enable' => 	1, 
			'fmd' . '_bg_img' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/boxed_bg.png', 
			'fmd' . '_bg_rep' => 			'no-repeat', 
			'fmd' . '_bg_pos' => 			'top center', 
			'fmd' . '_bg_att' => 			'scroll', 
			'fmd' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'fmd' . '_fixed_header' => 					1, 
			'fmd' . '_header_overlaps' => 				1, 
			'fmd' . '_header_top_line' => 				0, 
			'fmd' . '_header_top_height' => 			'40', 
			'fmd' . '_header_top_line_short_info' => 	'', 
			'fmd' . '_header_top_social' => 		1, 
			'fmd' . '_header_top_nav' => 			1, 
			'fmd' . '_header_top_line_add_cont' => 		0, 
			'fmd' . '_header_styles' => 				'l_nav', 
			'fmd' . '_header_mid_height' => 			'87', 
			'fmd' . '_header_bot_height' => 			'45', 
			'fmd' . '_header_search' => 				1, 
			'fmd' . '_header_add_cont' => 				'cust_html', 
			'fmd' . '_header_add_cont_cust_html' => 	'', 
			'fmd' . '_woocommerce_cart_dropdown' => 	0 
		), 
		'content' => array( 
			'fmd' . '_layout' => 					'r_sidebar', 
			'fmd' . '_archives_layout' => 			'r_sidebar', 
			'fmd' . '_search_layout' => 			'r_sidebar', 
			'fmd' . '_other_layout' => 				'r_sidebar', 
			'fmd' . '_heading_alignment' => 		'left', 
			'fmd' . '_heading_scheme' => 			'default', 
			'fmd' . '_heading_bg_image_enable' => 	0, 
			'fmd' . '_heading_bg_image' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/headline_bg.jpg', 
			'fmd' . '_heading_bg_repeat' => 		'no-repeat', 
			'fmd' . '_heading_bg_attachment' => 	'scroll', 
			'fmd' . '_heading_bg_size' => 			'cover', 
			'fmd' . '_heading_bg_color' => 			'#fcfcfc', 
			'fmd' . '_heading_height' => 			'180', 
			'fmd' . '_breadcrumbs' => 				1, 
			'fmd' . '_bottom_scheme' => 			'footer', 
			'fmd' . '_bottom_sidebar' => 			0, 
			'fmd' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'fmd' . '_footer_scheme' => 				'footer', 
			'fmd' . '_footer_type' => 					'small', 
			'fmd' . '_footer_additional_content' => 	'nav', 
			'fmd' . '_footer_logo' => 					1, 
			'fmd' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'fmd' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'fmd' . '_footer_nav' => 					1, 
			'fmd' . '_footer_social' => 				1, 
			'fmd' . '_footer_html' => 					'', 
			'fmd' . '_footer_copyright' => 				'Alister Bank' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'fmd')  
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('alister_bank_settings_font_defaults')) {

function alister_bank_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'fmd' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'fmd' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'fmd' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'16', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'fmd' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'fmd' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'36', 
				'line_height' => 		'44', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'24', 
				'line_height' => 		'30', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'fmd' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'fmd' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'14', 
				'line_height' => 		'40', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'default' 
			), 
			'fmd' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'12', 
				'line_height' => 		'22', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'fmd' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'fmd' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'24', 
				'line_height' => 		'36', 
				'font_weight' => 		'300', 
				'font_style' => 		'italic' 
			) 
		),
		'google' => array( 
			'fmd' . '_google_web_fonts' => array( 
				'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic|Roboto',
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie' 
			) 
		)  
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#505050', 
		'#6a6a6a', 
		'#e53b24', 
		'#212121', 
		'#f7f7f7', 
		'#ffffff', 
		'#d2d2d8', 
		'#e53b24' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('alister_bank_color_schemes_defaults')) {

function alister_bank_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#505050', 
			'link' => 		'#6a6a6a', 
			'hover' => 		'#e53b24', 
			'heading' => 	'#212121', 
			'bg' => 		'#f7f7f7', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d2d2d8', 
			'secondary' => 	'#e53b24' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#212121', 
			'mid_link' => 		'#212121', 
			'mid_hover' => 		'#e53b24', 
			'mid_bg' => 		'#f7f7f7', 
			'mid_bg_scroll' => 	'#f7f7f7', 
			'mid_border' => 	'rgba(255,255,255,0)', 
			'bot_color' => 		'#212121', 
			'bot_link' => 		'#212121', 
			'bot_hover' => 		'#e53b24', 
			'bot_bg' => 		'#f7f7f7', 
			'bot_bg_scroll' => 	'#f7f7f7', 
			'bot_border' => 	'rgba(255,255,255,0.3)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#212121', 
			'title_link_hover' => 		'#212121', 
			'title_link_current' => 	'#212121', 
			'title_link_subtitle' => 	'#5e5e5e', 
			'title_link_bg' => 			'#f7f7f7', 
			'title_link_bg_hover' => 	'#f7f7f7', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#5e5e5e', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#212121', 
			'dropdown_link_hover' => 	'#e53b24', 
			'dropdown_link_subtitle' => '#5e5e5e', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#818181', 
			'link' => 					'#c3c3c3', 
			'hover' => 					'#212121', 
			'bg' => 					'#ebebeb', 
			'border' => 				'#dadada', 
			'title_link' => 			'rgba(0,0,0,0.6)', 
			'title_link_hover' => 		'#212121', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#ffffff', 
			'dropdown_link' => 			'#212121', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => '#f15039', 
			'dropdown_link_border' => 	'#ffffff' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#ffffff', 
			'link' => 		'rgba(255,255,255,0.5)', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#252525', 
			'alternate' => 	'#252525', 
			'border' => 	'rgba(255,255,255,0.1)', 
			'secondary' => 	'#f15039' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'rgba(255,255,255,0.35)', 
			'link' => 		'rgba(255,255,255,0.35)', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#262626', 
			'alternate' => 	'#ffffff', 
			'border' => 	'rgba(255,255,255,0.2)', 
			'secondary' => 	'#f15039' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#ffffff', 
			'link' => 		'rgba(255,255,255,0.8)', 
			'hover' => 		'#e53b24', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#f7f7f7', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#d2d2d8', 
			'secondary' => 	'#e53b24' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#ededed', 
			'link' => 		'rgba(255,255,255,0.7)', 
			'hover' => 		'rgba(255,255,255,0.9)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4', 
			'secondary' => 	'#f15039' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('alister_bank_settings_element_defaults')) {

function alister_bank_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'fmd' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'fmd' . '_social_icons' => array( 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'fmd') . '|true||',
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'fmd') . '|true||', 
				'cmsmasters-icon-youtube|#|' . esc_html__('YouTube', 'fmd') . '|true||',
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'fmd') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'fmd') . '|true||'			 
			) 
		), 
		'lightbox' => array( 
			'fmd' . '_ilightbox_skin' => 					'dark', 
			'fmd' . '_ilightbox_path' => 					'vertical', 
			'fmd' . '_ilightbox_infinite' => 				0, 
			'fmd' . '_ilightbox_aspect_ratio' => 			1, 
			'fmd' . '_ilightbox_mobile_optimizer' => 		1, 
			'fmd' . '_ilightbox_max_scale' => 				1, 
			'fmd' . '_ilightbox_min_scale' => 				0.2, 
			'fmd' . '_ilightbox_inner_toolbar' => 			0, 
			'fmd' . '_ilightbox_smart_recognition' => 		0, 
			'fmd' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'fmd' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'fmd' . '_ilightbox_controls_toolbar' => 		1, 
			'fmd' . '_ilightbox_controls_arrows' => 		0, 
			'fmd' . '_ilightbox_controls_fullscreen' => 	1, 
			'fmd' . '_ilightbox_controls_thumbnail' => 		1, 
			'fmd' . '_ilightbox_controls_keyboard' => 		1, 
			'fmd' . '_ilightbox_controls_mousewheel' => 	1, 
			'fmd' . '_ilightbox_controls_swipe' => 			1, 
			'fmd' . '_ilightbox_controls_slideshow' => 		0 
		), 
		'sitemap' => array( 
			'fmd' . '_sitemap_nav' => 			1, 
			'fmd' . '_sitemap_categs' => 		1, 
			'fmd' . '_sitemap_tags' => 			1, 
			'fmd' . '_sitemap_month' => 		1, 
			'fmd' . '_sitemap_pj_categs' => 	1, 
			'fmd' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'fmd' . '_error_color' => 				'#313131', 
			'fmd' . '_error_bg_color' => 			'#ffffff', 
			'fmd' . '_error_bg_img_enable' => 		0, 
			'fmd' . '_error_bg_image' => 			'', 
			'fmd' . '_error_bg_rep' => 				'no-repeat', 
			'fmd' . '_error_bg_pos' => 				'top center', 
			'fmd' . '_error_bg_att' => 				'scroll', 
			'fmd' . '_error_bg_size' => 			'cover', 
			'fmd' . '_error_search' => 				1, 
			'fmd' . '_error_sitemap_button' =>		1, 
			'fmd' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'fmd' . '_custom_css' => 			'', 
			'fmd' . '_custom_js' => 			'', 
			'fmd' . '_gmap_api_key' => 			'', 
			'fmd' . '_twitter_access_token' =>	''
		), 
		'recaptcha' => array( 
			'fmd' . '_recaptcha_public_key' => 		'', 
			'fmd' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('alister_bank_settings_single_defaults')) {

function alister_bank_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'fmd' . '_blog_post_layout' => 			'fullwidth', 
			'fmd' . '_blog_post_title' => 			1, 
			'fmd' . '_blog_post_date' => 			1, 
			'fmd' . '_blog_post_cat' => 			1, 
			'fmd' . '_blog_post_author' => 			1, 
			'fmd' . '_blog_post_comment' => 		1, 
			'fmd' . '_blog_post_tag' => 			1, 
			'fmd' . '_blog_post_like' => 			1, 
			'fmd' . '_blog_post_nav_box' => 		1, 
			'fmd' . '_blog_post_nav_order_cat' => 	0, 
			'fmd' . '_blog_post_share_box' => 		1, 
			'fmd' . '_blog_post_author_box' => 		1, 
			'fmd' . '_blog_more_posts_box' => 		'popular', 
			'fmd' . '_blog_more_posts_count' => 	'3', 
			'fmd' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'fmd' . '_portfolio_project_title' => 			1, 
			'fmd' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'fmd'), 
			'fmd' . '_portfolio_project_date' => 			1, 
			'fmd' . '_portfolio_project_cat' => 			1, 
			'fmd' . '_portfolio_project_author' => 			1, 
			'fmd' . '_portfolio_project_comment' => 		0, 
			'fmd' . '_portfolio_project_tag' => 			0, 
			'fmd' . '_portfolio_project_like' => 			1, 
			'fmd' . '_portfolio_project_link' => 			0, 
			'fmd' . '_portfolio_project_share_box' => 		1, 
			'fmd' . '_portfolio_project_nav_box' => 		1, 
			'fmd' . '_portfolio_project_nav_order_cat' => 	0, 
			'fmd' . '_portfolio_project_author_box' => 		1, 
			'fmd' . '_portfolio_more_projects_box' => 		'popular', 
			'fmd' . '_portfolio_more_projects_count' => 	'4', 
			'fmd' . '_portfolio_more_projects_pause' => 	'5', 
			'fmd' . '_portfolio_project_slug' => 			'project', 
			'fmd' . '_portfolio_pj_categs_slug' => 			'pj-categs', 
			'fmd' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'fmd' . '_profile_post_title' => 			1, 
			'fmd' . '_profile_post_details_title' => 	esc_html__('Profile details', 'fmd'), 
			'fmd' . '_profile_post_cat' => 				1, 
			'fmd' . '_profile_post_comment' => 			1, 
			'fmd' . '_profile_post_like' => 			1, 
			'fmd' . '_profile_post_nav_box' => 			1, 
			'fmd' . '_profile_post_nav_order_cat' => 	0, 
			'fmd' . '_profile_post_share_box' => 		1, 
			'fmd' . '_profile_post_slug' => 			'profile', 
			'fmd' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('alister_bank_project_puzzle_proportion')) {

function alister_bank_project_puzzle_proportion() {
	return 0.7069;
}

}



/* Project Puzzle Proportion */
if (!function_exists('alister_bank_project_puzzle_large_gar_parameters')) {

function alister_bank_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2.6 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('alister_bank_get_image_thumbnail_list')) {

function alister_bank_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		75, 
			'height' => 	75, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'fmd') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	366, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'fmd') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	410, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'fmd') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'fmd') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	575, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'fmd') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'fmd') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	770, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'fmd') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'fmd') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'fmd') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('alister_bank_project_labels')) {

function alister_bank_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'fmd'), 
		'singular_name' => 			esc_html__('Project', 'fmd'), 
		'menu_name' => 				esc_html__('Projects', 'fmd'), 
		'all_items' => 				esc_html__('All Projects', 'fmd'), 
		'add_new' => 				esc_html__('Add New', 'fmd'), 
		'add_new_item' => 			esc_html__('Add New Project', 'fmd'), 
		'edit_item' => 				esc_html__('Edit Project', 'fmd'), 
		'new_item' => 				esc_html__('New Project', 'fmd'), 
		'view_item' => 				esc_html__('View Project', 'fmd'), 
		'search_items' => 			esc_html__('Search Projects', 'fmd'), 
		'not_found' => 				esc_html__('No projects found', 'fmd'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'fmd') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'alister_bank_project_labels');


if (!function_exists('alister_bank_pj_categs_labels')) {

function alister_bank_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'fmd'), 
		'singular_name' => 			esc_html__('Project Category', 'fmd') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'alister_bank_pj_categs_labels');


if (!function_exists('alister_bank_pj_tags_labels')) {

function alister_bank_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'fmd'), 
		'singular_name' => 			esc_html__('Project Tag', 'fmd') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'alister_bank_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('alister_bank_profile_labels')) {

function alister_bank_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'fmd'), 
		'singular_name' => 			esc_html__('Profiles', 'fmd'), 
		'menu_name' => 				esc_html__('Profiles', 'fmd'), 
		'all_items' => 				esc_html__('All Profiles', 'fmd'), 
		'add_new' => 				esc_html__('Add New', 'fmd'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'fmd'), 
		'edit_item' => 				esc_html__('Edit Profile', 'fmd'), 
		'new_item' => 				esc_html__('New Profile', 'fmd'), 
		'view_item' => 				esc_html__('View Profile', 'fmd'), 
		'search_items' => 			esc_html__('Search Profiles', 'fmd'), 
		'not_found' => 				esc_html__('No Profiles found', 'fmd'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'fmd') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'alister_bank_profile_labels');


if (!function_exists('alister_bank_pl_categs_labels')) {

function alister_bank_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'fmd'), 
		'singular_name' => 			esc_html__('Profile Category', 'fmd') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'alister_bank_pl_categs_labels');

