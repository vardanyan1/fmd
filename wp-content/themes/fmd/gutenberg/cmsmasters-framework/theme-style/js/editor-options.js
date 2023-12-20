/**
 * @package 	WordPress
 * @subpackage 	FMD
 * @version 	1.0.7
 * 
 * Editor Styles Wrapper Options Toggles Scripts
 * Created by Sevuni
 * 
 */


(function ($) { 
	"use strict";
	
	$(document).ready(function () { 
		/* Page Layout Change */
		$('input[name="cmsmasters_layout"]').on('change', function () { 
			if ($(this).val() !== 'fullwidth') {
				$('body').addClass('enable_sidebar');
			} else {
				$('body').removeClass('enable_sidebar');
			}
		} );
	} );
} )(jQuery);

