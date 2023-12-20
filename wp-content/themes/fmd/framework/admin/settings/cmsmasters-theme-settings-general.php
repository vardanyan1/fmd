<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.0.7
 * 
 * Admin Panel General Options
 * Created by Sevuni
 * 
 */


function alister_bank_options_general_tabs() {
	$cmsmasters_option = alister_bank_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'fmd');
	
	if ($cmsmasters_option['fmd' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'fmd');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'fmd');
	}
	
	$tabs['header'] = esc_attr__('Header', 'fmd');
	$tabs['content'] = esc_attr__('Content', 'fmd');
	$tabs['footer'] = esc_attr__('Footer', 'fmd');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function alister_bank_options_general_sections() {
	$tab = alister_bank_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'fmd');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'fmd');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'fmd');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'fmd');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'fmd');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'fmd');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function alister_bank_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = alister_bank_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = alister_bank_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'fmd') . '|liquid', 
				esc_html__('Boxed', 'fmd') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'fmd') . '|image', 
				esc_html__('Text', 'fmd') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'fmd'), 
			'desc' => esc_html__('Choose your website logo image.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'fmd'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'fmd'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['fmd' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'fmd' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'fmd'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['fmd' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_col', 
			'title' => esc_html__('Background Color', 'fmd'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['fmd' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_img', 
			'title' => esc_html__('Background Image', 'fmd'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'fmd') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'fmd') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'fmd') . '|repeat-y', 
				esc_html__('Repeat', 'fmd') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'fmd') . '|scroll', 
				esc_html__('Fixed', 'fmd') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'fmd' . '_bg_size', 
			'title' => esc_html__('Background Size', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'fmd') . '|auto', 
				esc_html__('Cover', 'fmd') . '|cover', 
				esc_html__('Contain', 'fmd') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'fmd' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'fmd'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => alister_bank_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'fmd'), 
			'desc' => esc_html__('pixels', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'fmd'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'fmd') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['fmd' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'fmd') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'fmd') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'fmd') . '|nav' 
			) 
		);		
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'fmd') . '|default', 
				esc_html__('Compact Style Left Navigation', 'fmd') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'fmd') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'fmd') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'fmd'), 
			'desc' => esc_html__('pixels', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'fmd'), 
			'desc' => esc_html__('pixels', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_search', 
			'title' => esc_html__('Header Search', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'fmd') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'fmd') . '|social', 
				esc_html__('Header Custom HTML', 'fmd') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'fmd' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'fmd'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'fmd') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['fmd' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'fmd'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'fmd'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['fmd' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'fmd'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'fmd'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['fmd' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'fmd'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'fmd'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['fmd' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'fmd'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'fmd'),
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['fmd' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'fmd'), 
			'desc' => esc_html__('show', 'fmd') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'fmd'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'fmd') . '|left', 
				esc_html__('Right', 'fmd') . '|right', 
				esc_html__('Center', 'fmd') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'fmd'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['fmd' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'fmd'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'fmd') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'fmd') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'fmd') . '|repeat-y', 
				esc_html__('Repeat', 'fmd') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'fmd') . '|scroll', 
				esc_html__('Fixed', 'fmd') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'fmd') . '|auto', 
				esc_html__('Cover', 'fmd') . '|cover', 
				esc_html__('Contain', 'fmd') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'fmd'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['fmd' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'fmd'), 
			'desc' => esc_html__('pixels', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'fmd'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['fmd' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'fmd' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'fmd'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['fmd' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'fmd') . '|default', 
				esc_html__('Small', 'fmd') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'fmd'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['fmd' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'fmd') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'fmd') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'fmd') . '|social', 
				esc_html__('Custom HTML', 'fmd') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'fmd'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'fmd'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'fmd'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['fmd' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'fmd'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'fmd') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['fmd' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'fmd' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'fmd'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

