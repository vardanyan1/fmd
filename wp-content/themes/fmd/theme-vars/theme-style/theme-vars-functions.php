<?php
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by Sevuni
 * 
 */


/* Register CSS Styles */
function alister_bank_vars_register_css_styles() {
	wp_enqueue_style('fmd-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('fmd-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'alister_bank_vars_register_css_styles');

