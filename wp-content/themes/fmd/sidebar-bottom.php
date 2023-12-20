<?php
/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.0.0
 * 
 * Sidebar Template
 * Created by Sevuni
 * 
 */


$cmsmasters_option = alister_bank_get_global_options();

if (is_singular()) {
	$cmsmasters_page_id = get_the_ID();
} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
	$cmsmasters_page_id = wc_get_page_id('shop');
}


if ( 
	is_singular() || 
	(CMSMASTERS_WOOCOMMERCE && is_shop())
) {
	$cmsmasters_bottom_sidebar = get_post_meta($cmsmasters_page_id, 'cmsmasters_bottom_sidebar', true) !== '' ? get_post_meta($cmsmasters_page_id, 'cmsmasters_bottom_sidebar', true) : ($cmsmasters_option['fmd' . '_bottom_sidebar'] == 1 ? 'true' : 'false');
	
	$cmsmasters_bottom_sidebar_layout = get_post_meta($cmsmasters_page_id, 'cmsmasters_bottom_sidebar_layout', true) !== '' ? get_post_meta($cmsmasters_page_id, 'cmsmasters_bottom_sidebar_layout', true) : $cmsmasters_option['fmd' . '_bottom_sidebar_layout'];
} else {
	$cmsmasters_bottom_sidebar = $cmsmasters_option['fmd' . '_bottom_sidebar'] == 1 ? 'true' : 'false';
	
	$cmsmasters_bottom_sidebar_layout = $cmsmasters_option['fmd' . '_bottom_sidebar_layout'];
}


if ( 
	!is_home() && 
	!is_404() && 
	$cmsmasters_bottom_sidebar && 
	$cmsmasters_bottom_sidebar == 'true' 
) { ?>
	<!-- _________________________ Start Bottom _________________________ -->
	<div id="bottom" class="cmsmasters_color_scheme_<?php echo esc_html($cmsmasters_option['fmd' . '_bottom_scheme']) ?>">
	    
		<div class="bottom_bg" style="padding-top: 20px;border-bottom: solid 1px #afbbfe;">
			<div class="bottom_outer">
			    <div class="footer_top">
        	    <div class="slog">
            	    <h1><?php echo pll__('slogan_footer') ?></h1>
        		</div>
        	    <div class="social">
                    <div class="social_wrap">
                    	<div class="social_wrap_inner">
                    		<ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg id="Facebook" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.826 51.511">
                                        <path id="Path_174" data-name="Path 174" d="M112.175,164.361a25.913,25.913,0,1,0-29.962,25.6V171.852h-6.58v-7.491h6.58v-5.709c0-6.494,3.869-10.082,9.788-10.082a39.848,39.848,0,0,1,5.8.506v6.377H94.534c-3.219,0-4.223,2-4.223,4.047v4.861H97.5l-1.149,7.491H90.311v18.108A25.919,25.919,0,0,0,112.175,164.361Z" transform="translate(-60.349 -138.448)" fill="#4f77e9"/>
                                        </svg>
                                    </a>
                                </li>                                    
                                <li>                                    
                                    <a href="#" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 52.329 52.329">
                                          <defs>
                                            <radialGradient id="radial-gradient" cx="0.196" cy="0.967" r="1.087" gradientUnits="objectBoundingBox">
                                              <stop offset="0.03" stop-color="#fedd76"/>
                                              <stop offset="0.29" stop-color="#fb741e"/>
                                              <stop offset="0.5" stop-color="#de286f"/>
                                              <stop offset="0.74" stop-color="#a030b6"/>
                                              <stop offset="0.96" stop-color="#436def"/>
                                            </radialGradient>
                                          </defs>
                                          <g id="Instagram" transform="translate(-67.05 -67.03)">
                                            <circle id="Ellipse_10" data-name="Ellipse 10" cx="26.164" cy="26.164" r="26.164" transform="translate(67.05 67.03)" fill="url(#radial-gradient)"/>
                                            <path id="Path_469" data-name="Path 469" d="M114.581,131.052c-2.1-.015-3.758-.015-5.417-.043-.922,0-1.825-.061-2.737-.123a10.92,10.92,0,0,1-3.635-.851,8.5,8.5,0,0,1-4.682-4.876,11.06,11.06,0,0,1-.648-2.667c-.077-.636-.117-1.272-.135-1.911-.031-1.229-.068-2.458-.077-3.705v-5.447c0-.79,0-1.582.028-2.369s.049-1.536.1-2.286a11.582,11.582,0,0,1,.9-3.994,8.474,8.474,0,0,1,4.639-4.55,10.845,10.845,0,0,1,3.278-.777c1.481-.132,2.971-.163,4.458-.163h8.01c1.057,0,2.117.058,3.171.129a10.836,10.836,0,0,1,3.653.848,8.483,8.483,0,0,1,4.7,4.916,11.22,11.22,0,0,1,.661,2.83c.08.713.1,1.426.132,2.151.061,1.419.058,2.836.058,4.255v5.77c0,1.057-.052,2.114-.1,3.171a12.566,12.566,0,0,1-.547,3.186,8.752,8.752,0,0,1-1.536,2.937,8.627,8.627,0,0,1-3.89,2.765,11.109,11.109,0,0,1-2.857.614c-.811.065-1.628.114-2.443.129C117.82,131.025,115.982,131.037,114.581,131.052Zm-14.283-16.9v1.579c0,1.536,0,3.051.065,4.578.028.633.049,1.266.132,1.893a7.951,7.951,0,0,0,.584,2.172,5.45,5.45,0,0,0,2.584,2.722,7.429,7.429,0,0,0,2.765.74c.716.061,1.435.1,2.151.12.968.031,1.936.043,2.9.043q3.635,0,7.269-.021c1.029,0,2.062-.04,3.072-.138a8.345,8.345,0,0,0,2.271-.516,5.487,5.487,0,0,0,2.993-2.741,7.512,7.512,0,0,0,.722-2.79c.061-.759.1-1.521.12-2.283.028-.971.037-1.945.04-2.916v-5.4c0-.891-.021-1.785-.046-2.676-.018-.75-.043-1.5-.129-2.249a8.083,8.083,0,0,0-.547-2.2,5.453,5.453,0,0,0-2.7-2.885,7.346,7.346,0,0,0-2.694-.71c-.793-.068-1.585-.108-2.381-.129-1.026-.031-2.052-.04-3.072-.037-3.02,0-6.04-.052-9.057.092a12.078,12.078,0,0,0-2.123.261,6.32,6.32,0,0,0-2.009.8,5.586,5.586,0,0,0-2.341,2.98,9.561,9.561,0,0,0-.47,2.575c-.049.922-.086,1.843-.1,2.784-.006,1.438,0,4.338,0,4.338Z" transform="translate(-20.921 -20.963)" fill="#fff"/>
                                            <path id="Path_470" data-name="Path 470" d="M132.637,141.273a8.673,8.673,0,1,1,6.142-2.537A8.676,8.676,0,0,1,132.637,141.273Zm-5.616-8.695a5.632,5.632,0,1,0,1.667-3.978A5.632,5.632,0,0,0,127.021,132.578Z" transform="translate(-39.432 -39.411)" fill="#fff"/>
                                            <path id="Path_471" data-name="Path 471" d="M177.013,116.21a2.028,2.028,0,1,1-2.043,2,2.028,2.028,0,0,1,2.043-2Z" transform="translate(-74.762 -34.07)" fill="#fff"/>
                                          </g>
                                        </svg>
                                    </a>                                    
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg id="YouTube" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 51.826 51.826">
                                          <g id="Group_90" data-name="Group 90" transform="translate(0 0)">
                                            <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="25.913" cy="25.913" rx="25.913" ry="25.913" fill="#de3323"/>
                                            <path id="Path_176" data-name="Path 176" d="M449.02,211.387a6.223,6.223,0,0,0-6.222-6.223H426.887a6.223,6.223,0,0,0-6.223,6.223v7.4a6.223,6.223,0,0,0,6.223,6.223H442.8a6.222,6.222,0,0,0,6.222-6.223v-7.4Zm-9.357,4.257-7.135,3.53c-.28.151-1.23-.051-1.23-.369v-7.246c0-.322.958-.524,1.238-.365l6.83,3.716C439.652,215.073,439.953,215.487,439.663,215.644Z" transform="translate(-409.234 -189.242)" fill="#fff"/>
                                          </g>
                                        </svg>
                                    </a>
                                </li>                                   
                    		</ul>
                    	</div>
                    </div>
        		</div>
        		</div>
            </div>
        </div>	
        
		<div class="bottom_bg">
			<div class="bottom_outer">
				<div class="bottom_inner sidebar_layout_<?php echo esc_html($cmsmasters_bottom_sidebar_layout) ?>">
	<?php 
	if (isset($cmsmasters_page_id)) {
		$bottom_sidebar_id = get_post_meta($cmsmasters_page_id, 'cmsmasters_bottom_sidebar_id', true);
	}
	
	
	if (isset($bottom_sidebar_id) && is_dynamic_sidebar($bottom_sidebar_id) && is_active_sidebar($bottom_sidebar_id)) {
		dynamic_sidebar($bottom_sidebar_id);
	} else if (is_active_sidebar('sidebar_bottom')) {
		dynamic_sidebar('sidebar_bottom');
	}
	
	?>
				</div>
			</div>
		</div>
	</div>
	<!-- _________________________ Finish Bottom _________________________ -->
	<?php 
}

