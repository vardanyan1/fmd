<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.0.0
 * 
 * Footer Template
 * Created by Sevuni
 * 
 */


$cmsmasters_option = alister_bank_get_global_options();
?>
<div class="footer <?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['fmd' . '_footer_scheme'] . ($cmsmasters_option['fmd' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
		<?php 
		if (
			$cmsmasters_option['fmd' . '_footer_type'] == 'default' && 
			$cmsmasters_option['fmd' . '_footer_logo']
		) {
			alister_bank_footer_logo($cmsmasters_option);
		}
		
		
		if (
			has_nav_menu('footer') && 
			(
				(
					$cmsmasters_option['fmd' . '_footer_type'] == 'default' && 
					$cmsmasters_option['fmd' . '_footer_nav']
				) || (
					$cmsmasters_option['fmd' . '_footer_type'] == 'small' && 
					$cmsmasters_option['fmd' . '_footer_additional_content'] == 'nav'
				)
			)
		) {
			echo '<div class="footer_nav_wrap">' . 
				'<nav>';
				
				
				wp_nav_menu(array( 
					'theme_location' => 'footer', 
					'menu_id' => 'footer_nav', 
					'menu_class' => 'footer_nav' 
				));
				
				
				echo '</nav>' . 
			'</div>';
		}
		
		
		if (
			(
				$cmsmasters_option['fmd' . '_footer_type'] == 'default' && 
				$cmsmasters_option['fmd' . '_footer_html'] !== ''
			) || (
				$cmsmasters_option['fmd' . '_footer_type'] == 'small' && 
				$cmsmasters_option['fmd' . '_footer_additional_content'] == 'text' && 
				$cmsmasters_option['fmd' . '_footer_html'] !== ''
			)
		) {
			echo '<div class="footer_custom_html_wrap">' . 
				'<div class="footer_custom_html">' . 
					do_shortcode(wp_kses(stripslashes($cmsmasters_option['fmd' . '_footer_html']), 'post')) . 
				'</div>' . 
			'</div>';
		}
		
		
		if (
			isset($cmsmasters_option['fmd' . '_social_icons']) && 
			(
				(
					$cmsmasters_option['fmd' . '_footer_type'] == 'default' && 
					$cmsmasters_option['fmd' . '_footer_social']
				) || (
					$cmsmasters_option['fmd' . '_footer_type'] == 'small' && 
					$cmsmasters_option['fmd' . '_footer_additional_content'] == 'social'
				)
			)
		) {
			alister_bank_social_icons();
		}
		?>
<center><p style="padding: 0px"><img src="http://fmd.sevuni.su/wp-content/uploads/2023/09/pay_logos@2x.png" /></p><br />
<span style="color: #000;font-size: 14px"><a href="http://fmd.sevuni.su/terms/"><?php echo pll__('terms') ?></a> / <a href="http://fmd.sevuni.su/policy/"><?php echo pll__('policy') ?></a> / <a href="http://fmd.sevuni.su/payment/"><?php echo pll__('payment') ?></a> <br />
</span>
<p style="padding: 20px 0 0px"><?php echo pll__('company_name') ?></p></center>		
		<span class="footer_copyright copyright">
			<?php 
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('', ' / ');
			}
			
			echo esc_html(stripslashes($cmsmasters_option['fmd' . '_footer_copyright']));
			?>
		</span>
	</div>
</div>