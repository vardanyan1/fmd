<?php 
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by Sevuni
 * 
 */


function alister_bank_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'fmd');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'fmd');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'fmd');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function alister_bank_options_single_sections() {
	$tab = alister_bank_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'fmd');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'fmd');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'fmd');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function alister_bank_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = alister_bank_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = alister_bank_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'fmd'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'fmd') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_nav_box'] 
		);

		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_nav_order_cat'] 
		);

		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'fmd' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'fmd'), 
				'desc' => esc_html__('show', 'fmd'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['fmd' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'fmd') . '|related', 
				esc_html__('Show Popular Posts', 'fmd') . '|popular', 
				esc_html__('Show Recent Posts', 'fmd') . '|recent', 
				esc_html__('Hide More Posts Box', 'fmd') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'fmd'), 
			'desc' => esc_html__('posts', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'fmd' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'fmd'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'fmd'), 
			'desc' => esc_html__('Enter a project details block title', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_nav_box'] 
		);

		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'fmd'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'fmd') . '|related', 
				esc_html__('Show Popular Projects', 'fmd') . '|popular', 
				esc_html__('Show Recent Projects', 'fmd') . '|recent', 
				esc_html__('Hide More Projects Box', 'fmd') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'fmd'), 
			'desc' => esc_html__('projects', 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'fmd'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'fmd'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'fmd'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'fmd'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'fmd' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'fmd'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'fmd'), 
			'desc' => esc_html__('Enter a profile details block title', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'fmd'), 
			'desc' => esc_html__('enable', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'fmd'), 
			'desc' => esc_html__('show', 'fmd'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'fmd'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'fmd' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'fmd'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'fmd'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['fmd' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

