<?php
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.1.3
 * 
 * Admin Panel Scripts & Styles
 * Created by Sevuni
 * 
 */


function alister_bank_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');

	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', array(
		'clear' => 				esc_attr__('Clear', 'fmd'),
		'clearAriaLabel' => 	esc_attr__('Clear color', 'fmd'),
		'defaultLabel' => 		esc_attr__('Color value', 'fmd'),
		'defaultString' => 		esc_attr__('Default', 'fmd'),
		'defaultAriaLabel' => 	esc_attr__('Select default color', 'fmd'),
		'pick' => 				esc_attr__('Select Color', 'fmd'),
	) ); 
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '2.1.4', true);
	
	
	wp_enqueue_style('fmd-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('fmd-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('fmd-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('fmd-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('fmd-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'fmd'), 
		'insert' => 				esc_attr__('Insert image', 'fmd'), 
		'remove' => 				esc_attr__('Remove', 'fmd'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'fmd') 
	));
	
	
	wp_enqueue_script('fmd-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('fmd-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'fmd'), 
		'insert' => 				esc_attr__('Insert', 'fmd'), 
		'deselect' => 				esc_attr__('Deselect', 'fmd'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'fmd'), 
		'find_icons' => 			esc_attr__('Find icons', 'fmd'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'fmd'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'fmd'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'fmd') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('fmd-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('fmd-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('fmd-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('fmd-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('fmd-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('fmd-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('fmd-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'alister_bank_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

