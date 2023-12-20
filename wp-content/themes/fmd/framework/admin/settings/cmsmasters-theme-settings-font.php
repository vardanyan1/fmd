<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by Sevuni
 * 
 */


function alister_bank_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'fmd');
	$tabs['link'] = esc_attr__('Links', 'fmd');
	$tabs['nav'] = esc_attr__('Navigation', 'fmd');
	$tabs['heading'] = esc_attr__('Heading', 'fmd');
	$tabs['other'] = esc_attr__('Other', 'fmd');
	$tabs['google'] = esc_attr__('Google Fonts', 'fmd');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function alister_bank_options_font_sections() {
	$tab = alister_bank_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'fmd');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'fmd');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'fmd');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'fmd');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'fmd');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'fmd');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function alister_bank_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = alister_bank_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = alister_bank_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'fmd' . '_link_font', 
			'title' => esc_html__('Links Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'fmd' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'fmd'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['fmd' . '_link_hover_decoration'], 
			'choices' => alister_bank_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'fmd' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'fmd' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'fmd' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'fmd' . '_button_font', 
			'title' => esc_html__('Button Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'fmd' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'fmd' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'fmd' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'fmd'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['fmd' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;

	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'fmd' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'fmd'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['fmd' . '_google_web_fonts']
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'fmd' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'fmd'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'fmd') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'fmd') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'fmd') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'fmd') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'fmd') . '|' . 'greek', 
				esc_html__('Greek Extended', 'fmd') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'fmd') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'fmd') . '|' . 'japanese', 
				esc_html__('Korean', 'fmd') . '|' . 'korean', 
				esc_html__('Thai', 'fmd') . '|' . 'thai', 
				esc_html__('Bengali', 'fmd') . '|' . 'bengali', 
				esc_html__('Devanagari', 'fmd') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'fmd') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'fmd') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'fmd') . '|' . 'hebrew', 
				esc_html__('Kannada', 'fmd') . '|' . 'kannada', 
				esc_html__('Khmer', 'fmd') . '|' . 'khmer', 
				esc_html__('Malayalam', 'fmd') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'fmd') . '|' . 'myanmar', 
				esc_html__('Oriya', 'fmd') . '|' . 'oriya', 
				esc_html__('Sinhala', 'fmd') . '|' . 'sinhala', 
				esc_html__('Tamil', 'fmd') . '|' . 'tamil', 
				esc_html__('Telugu', 'fmd') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

