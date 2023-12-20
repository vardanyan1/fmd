<?php
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.0.7
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by Sevuni
 *
 */


/* Single Settings */
function alister_bank_woocommerce_options_general_fields($options, $tab) {
	$defaults = alister_bank_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'fmd' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'fmd'),
			'desc' => '',
			'type' => 'checkbox',
			'std' => $defaults[$tab]['fmd' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'alister_bank_woocommerce_options_general_fields', 10, 2);

