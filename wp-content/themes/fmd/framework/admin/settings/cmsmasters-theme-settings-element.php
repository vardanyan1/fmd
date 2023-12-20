<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.1.6
 * 
 * Admin Panel Element Options
 * Created by Sevuni
 * 
 */


function alister_bank_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'fmd');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'fmd');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'fmd');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'fmd');
	$tabs['error'] = esc_attr__('404', 'fmd');
	$tabs['code'] = esc_attr__('Custom Codes', 'fmd');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'fmd');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function alister_bank_options_element_sections() {
	$tab = alister_bank_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'fmd');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'fmd');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'fmd');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'fmd');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'fmd');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'fmd');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'fmd');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function alister_bank_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = alister_bank_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = alister_bank_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'fmd' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'fmd'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['fmd' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'fmd' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'fmd'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['fmd' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'fmd') . '|dark', 
				esc_html__('Light', 'fmd') . '|light', 
				esc_html__('Mac', 'fmd') . '|mac', 
				esc_html__('Metro Black', 'fmd') . '|metro-black', 
				esc_html__('Metro White', 'fmd') . '|metro-white', 
				esc_html__('Parade', 'fmd') . '|parade', 
				esc_html__('Smooth', 'fmd') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'fmd'), 
			'desc' => esc_html__('Sets path for switching windows', 'fmd'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'fmd') . '|vertical', 
				esc_html__('Horizontal', 'fmd') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'fmd'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'fmd'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'fmd'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'fmd'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'fmd'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'fmd'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'fmd'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'fmd'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'fmd'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'fmd'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'fmd') . '|center', 
				esc_html__('Fit', 'fmd') . '|fit', 
				esc_html__('Fill', 'fmd') . '|fill', 
				esc_html__('Stretch', 'fmd') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'fmd'), 
			'desc' => esc_html__('Sets buttons be available or not', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'fmd'), 
			'desc' => esc_html__('Enable the arrow buttons', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'fmd'), 
			'desc' => esc_html__('Sets the fullscreen button', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'fmd'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'fmd'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'fmd'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'fmd'), 
			'desc' => esc_html__('Sets the swipe navigation', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'fmd' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'fmd'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'fmd' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_color', 
			'title' => esc_html__('Text Color', 'fmd'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['fmd' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'fmd'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'fmd'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'fmd') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'fmd') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'fmd') . '|repeat-y', 
				esc_html__('Repeat', 'fmd') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'fmd') . '|top left', 
				esc_html__('Top Center', 'fmd') . '|top center', 
				esc_html__('Top Right', 'fmd') . '|top right', 
				esc_html__('Center Left', 'fmd') . '|center left', 
				esc_html__('Center Center', 'fmd') . '|center center', 
				esc_html__('Center Right', 'fmd') . '|center right', 
				esc_html__('Bottom Left', 'fmd') . '|bottom left', 
				esc_html__('Bottom Center', 'fmd') . '|bottom center', 
				esc_html__('Bottom Right', 'fmd') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'fmd') . '|scroll', 
				esc_html__('Fixed', 'fmd') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'fmd') . '|auto', 
				esc_html__('Cover', 'fmd') . '|cover', 
				esc_html__('Contain', 'fmd') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_search', 
			'title' => esc_html__('Search Line', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'fmd' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'fmd' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'fmd'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['fmd' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'fmd' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'fmd'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['fmd' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'fmd' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'fmd' . '_twitter_access_token', 
			'title' => esc_html__('Twitter Access Token', 'fmd'), 
			'desc' => sprintf(
				/* translators: Twitter access token. %s: Link to twitter access token generator */
				esc_html__( 'Generate %s and paste Access Token to this field.', 'fmd' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access token', 'fmd' ) .
				'</a>'
			), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_twitter_access_token'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'fmd' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'fmd' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

