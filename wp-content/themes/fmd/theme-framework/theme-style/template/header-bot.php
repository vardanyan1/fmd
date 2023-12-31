<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.1.1
 * 
 * Header Bottom Template
 * Created by Sevuni
 * 
 */


$cmsmasters_option = alister_bank_get_global_options();


if ($cmsmasters_option['fmd' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['fmd' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				echo '<span class="header_bot_border_top"></span>';
				
				
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);
				
				
				echo '<div class="resp_bot_nav_wrap">' . 
					'<div class="resp_bot_nav_outer">' . 
						'<a class="responsive_nav resp_bot_nav" href="' . esc_js("javascript:void(0)") . '">' . 
							'<span></span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
				
				
				if (
					CMSMASTERS_WOOCOMMERCE && 
					$cmsmasters_option['fmd' . '_header_styles'] != 'default' && 
					 (
						  isset($cmsmasters_option['fmd' . '_woocommerce_cart_dropdown']) &&
						  !$cmsmasters_option['fmd' . '_woocommerce_cart_dropdown']
					 )
				) {
					alister_bank_woocommerce_header_cart_link(); 
				}
				
				
				echo '<!-- _________________________ Start Navigation _________________________ -->' . 
				'<div class="bot_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'bot_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		false
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!-- _________________________ Finish Navigation _________________________ -->';
				
				
				do_action('cmsmasters_after_header_bot', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
	'</div>';
}

