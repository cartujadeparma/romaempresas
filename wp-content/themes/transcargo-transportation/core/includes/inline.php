<?php

$transcargo_transportation_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$transcargo_transportation_text_transform = get_theme_mod( 'menu_text_transform_transcargo_transportation','UPPERCASE');
    if($transcargo_transportation_text_transform == 'CAPITALISE'){

		$transcargo_transportation_custom_css .='.main-navigation ul li a{';

			$transcargo_transportation_custom_css .='text-transform: capitalize ; font-size: 15px !important;';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_text_transform == 'UPPERCASE'){

		$transcargo_transportation_custom_css .='.main-navigation ul li a{';

			$transcargo_transportation_custom_css .='text-transform: uppercase ; font-size: 15px !important';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_text_transform == 'LOWERCASE'){

		$transcargo_transportation_custom_css .='.main-navigation ul li a{';

			$transcargo_transportation_custom_css .='text-transform: lowercase ; font-size: 15px !important';

		$transcargo_transportation_custom_css .='}';
	}

	/*---------------------------menu-zoom-------------------*/

		$transcargo_transportation_menu_zoom = get_theme_mod( 'transcargo_transportation_menu_zoom','None');

    if($transcargo_transportation_menu_zoom == 'None'){

		$transcargo_transportation_custom_css .='.main-navigation ul li a{';

			$transcargo_transportation_custom_css .='';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_menu_zoom == 'Zoominn'){

		$transcargo_transportation_custom_css .='.main-navigation ul li a:hover{';

			$transcargo_transportation_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #59b96d;';

		$transcargo_transportation_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$transcargo_transportation_container_width = get_theme_mod('transcargo_transportation_container_width');

		$transcargo_transportation_custom_css .='body{';

			$transcargo_transportation_custom_css .='width: '.esc_attr($transcargo_transportation_container_width).'%; margin: auto';

		$transcargo_transportation_custom_css .='}';

		/*---------------------------related Product Settings-------------------*/

	$transcargo_transportation_related_product_setting = get_theme_mod('transcargo_transportation_related_product_setting',true);

		if($transcargo_transportation_related_product_setting == false){

			$transcargo_transportation_custom_css .='.related.products, .related h2{';

				$transcargo_transportation_custom_css .='display: none;';

			$transcargo_transportation_custom_css .='}';
		}

/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$transcargo_transportation_scroll_top_position = get_theme_mod( 'transcargo_transportation_scroll_top_position','Right');

	if($transcargo_transportation_scroll_top_position == 'Right'){

		$transcargo_transportation_custom_css .='.scroll-up{';

			$transcargo_transportation_custom_css .='right: 20px;';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_scroll_top_position == 'Left'){

		$transcargo_transportation_custom_css .='.scroll-up{';

			$transcargo_transportation_custom_css .='left: 20px;';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_scroll_top_position == 'Center'){

		$transcargo_transportation_custom_css .='.scroll-up{';

			$transcargo_transportation_custom_css .='right: 50%;left: 50%;';

		$transcargo_transportation_custom_css .='}';
	}

	/*---------------------------Slider-content-alignment-------------------*/

	$transcargo_transportation_slider_content_alignment = get_theme_mod( 'transcargo_transportation_slider_content_alignment','LEFT-ALIGN');

	 if($transcargo_transportation_slider_content_alignment == 'LEFT-ALIGN'){

			$transcargo_transportation_custom_css .='.blog_box{';

				$transcargo_transportation_custom_css .='text-align:left;';

			$transcargo_transportation_custom_css .='}';


		}else if($transcargo_transportation_slider_content_alignment == 'CENTER-ALIGN'){

			$transcargo_transportation_custom_css .='.blog_box{';

				$transcargo_transportation_custom_css .='text-align:center; right:30%; left:30%';

			$transcargo_transportation_custom_css .='}';


		}else if($transcargo_transportation_slider_content_alignment == 'RIGHT-ALIGN'){

			$transcargo_transportation_custom_css .='.blog_box{';

				$transcargo_transportation_custom_css .='text-align:right; right:15%; left:55%';

			$transcargo_transportation_custom_css .='}';

		}


		/*--------------------------- Slider Opacity -------------------*/

	$transcargo_transportation_slider_opacity_color = get_theme_mod( 'transcargo_transportation_slider_opacity_color','0.6');

	if($transcargo_transportation_slider_opacity_color == '0'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.1'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.1';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.2'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.2';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.3'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.3';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.4'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.4';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.5'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.5';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.6'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.6';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.7'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.7';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.8'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.8';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == '0.9'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:0.9';

		$transcargo_transportation_custom_css .='}';

		}else if($transcargo_transportation_slider_opacity_color == 'unset'){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:unset';

		$transcargo_transportation_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$transcargo_transportation_overlay_option = get_theme_mod('transcargo_transportation_overlay_option', true);

	if($transcargo_transportation_overlay_option == false){

		$transcargo_transportation_custom_css .='.blog_box img{';

			$transcargo_transportation_custom_css .='opacity:1;';

		$transcargo_transportation_custom_css .='}';
	}

	$transcargo_transportation_slider_image_overlay_color = get_theme_mod('transcargo_transportation_slider_image_overlay_color', true);

	if($transcargo_transportation_slider_image_overlay_color != false){

		$transcargo_transportation_custom_css .='.blog_box{';

			$transcargo_transportation_custom_css .='background-color: '.esc_attr($transcargo_transportation_slider_image_overlay_color).';';

		$transcargo_transportation_custom_css .='}';
	}

/*---------------------------woocommerce pagination alignment settings-------------------*/

	$transcargo_transportation_woocommerce_pagination_position = get_theme_mod( 'transcargo_transportation_woocommerce_pagination_position','Center');

	if($transcargo_transportation_woocommerce_pagination_position == 'Left'){

		$transcargo_transportation_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$transcargo_transportation_custom_css .='text-align: left;';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_woocommerce_pagination_position == 'Center'){

		$transcargo_transportation_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$transcargo_transportation_custom_css .='text-align: center;';

		$transcargo_transportation_custom_css .='}';

	}else if($transcargo_transportation_woocommerce_pagination_position == 'Right'){

		$transcargo_transportation_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$transcargo_transportation_custom_css .='text-align: right;';

		$transcargo_transportation_custom_css .='}';
	}


/*---------------------------Global Color-------------------*/

$transcargo_transportation_first_color = get_theme_mod('transcargo_transportation_first_color');
$transcargo_transportation_second_color = get_theme_mod('transcargo_transportation_second_color');

/*--- First Global Color ---*/

if ($transcargo_transportation_first_color) {
  $transcargo_transportation_custom_css .= ':root {';
  $transcargo_transportation_custom_css .= '--first-color: ' . esc_attr($transcargo_transportation_first_color) . ' !important;';
  $transcargo_transportation_custom_css .= '} ';
}

/*--- Second Global Color ---*/

if ($transcargo_transportation_second_color) {
  $transcargo_transportation_custom_css .= ':root {';
  $transcargo_transportation_custom_css .= '--second-color: ' . esc_attr($transcargo_transportation_second_color) . ' !important;';
  $transcargo_transportation_custom_css .= '} ';
}