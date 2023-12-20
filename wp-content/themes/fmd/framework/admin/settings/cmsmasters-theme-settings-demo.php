<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by Sevuni
 * 
 */


function alister_bank_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'fmd');
	$tabs['export'] = esc_attr__('Export', 'fmd');
	
	
	return $tabs;
}


function alister_bank_options_demo_sections() {
	$tab = alister_bank_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'fmd');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'fmd');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function alister_bank_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = alister_bank_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'fmd' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'fmd'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'fmd') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'fmd') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'fmd') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'fmd') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'fmd' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'fmd'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'fmd') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'fmd') . '<br />' . esc_html__("Theme Style can be set", 'fmd') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'fmd') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'fmd'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

