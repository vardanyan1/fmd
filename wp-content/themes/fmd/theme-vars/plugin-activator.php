<?php
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.1.7
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by Sevuni
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('alister_bank_register_theme_plugins')) {

function alister_bank_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'fmd'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.5.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'fmd'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'fmd'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'fmd'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'fmd'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '7.6.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'fmd'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.6.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'fmd'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		),
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'fmd'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'fmd'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'fmd'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'fmd'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'fmd', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'fmd'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'fmd'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'fmd') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'alister_bank_register_theme_plugins');

