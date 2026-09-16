<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php $transcargo_transportation_icon1 = get_theme_mod( 'transcargo_transportation_dashicons_setting_1', 'dashicons dashicons-phone' ); ?>
<?php $transcargo_transportation_icon2 = get_theme_mod( 'transcargo_transportation_dashicons_setting_2', 'dashicons dashicons-email' ); ?>
<?php $transcargo_transportation_icon3 = get_theme_mod( 'transcargo_transportation_dashicons_setting_3', 'dashicons dashicons-clock' ); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'transcargo-transportation' ); ?></a>

<?php if(get_theme_mod('transcargo_transportation_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'transcargo_transportation_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'transcargo-transportation' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'transcargo_transportation_preloader_type') == 'cube-loader') {?>
		<div class="cssloader">
    		<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<header id="site-navigation" class="header text-center text-md-start wow fadeInDown">
	<div class="container">
		<div class="row mb-md-3 mb-lg-0">
		    <div class="col-lg-3 col-md-12 align-self-center">
		    	<div class="logo text-center text-md-center text-lg-start">
			    	<div class="logo-image me-3">
				    	<?php echo the_custom_logo(); ?>
				    </div>
				    <div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('transcargo_transportation_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('transcargo_transportation_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
				</div>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transcargo_transportation_header_phone_number') ) : ?>
			    	<p class="mb-0"><span class="dashicons dashicons-<?php echo esc_attr( $transcargo_transportation_icon1 ); ?>"></span><?php esc_html_e('Call Us : ','transcargo-transportation'); ?><?php echo esc_html( get_theme_mod('transcargo_transportation_header_phone_number' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transcargo_transportation_header_email_address') ) : ?>
			    	<p class="mb-0"><span class="dashicons dashicons-<?php echo esc_attr( $transcargo_transportation_icon2 ); ?>"></span><?php esc_html_e('Send Us Email : ','transcargo-transportation'); ?><?php echo esc_html( get_theme_mod('transcargo_transportation_header_email_address' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		    <div class="col-lg-3 col-md-4 align-self-center">
		    	<?php if ( get_theme_mod('transcargo_transportation_header_open_timings') ) : ?>
			    	<p class="mb-0"><span class="dashicons dashicons-<?php echo esc_attr( $transcargo_transportation_icon3 ); ?>"></span><?php esc_html_e('Timings : ','transcargo-transportation'); ?><?php echo esc_html( get_theme_mod('transcargo_transportation_header_open_timings' ) ); ?></p>
			  	<?php endif; ?>
		    </div>
		</div>
	</div>

	<div class="<?php if( get_theme_mod( 'transcargo_transportation_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<div class="menu-block">
		<div class="container">
			<div class="row menu-bg-box">
				<div class="col-lg-8 col-md-4 col-3 align-self-center">
							<div class="top-menu-wrapper">
							    <div class="navigation_header">
							        <div class="toggle-nav mobile-menu">
							            <button onclick="transcargo_transportation_openNav()">
							                <span class="dashicons dashicons-menu"></span>
							            </button>
							        </div>
							        <div id="mySidenav" class="nav sidenav">
							            <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'transcargo-transportation' ); ?>">
							                <?php {
							                    wp_nav_menu(
							                        array(
							                            'theme_location' => 'main-menu',
							                            'container_class' => 'navi clearfix navbar-nav',
							                            'menu_class'     => 'menu clearfix',
							                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							                            'fallback_cb'    => 'wp_page_menu',
							                        )
							                    );
							                } ?>
							            </nav>
							            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="transcargo_transportation_closeNav()">
							                <span class="dashicons dashicons-no"></span>
							            </a>
							        </div>
							    </div>
							</div>
				</div>
				<div class="col-lg-1 col-md-3 col-3 align-self-center">
					<?php if ( get_theme_mod('transcargo_transportation_search_box_enable', true) == true ) : ?>
	                    <div class="header-search my-4 text-center">
	                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        <div class="search-form"><?php get_search_form();?></div>
	                    </div>
	                <?php endif; ?>
				</div>
				<?php if ( get_theme_mod('transcargo_transportation_button_box_enable', true) == true ) : ?>
					<div class="col-lg-3 col-md-5 col-6 button-box text-center align-self-center">
						<?php if ( get_theme_mod('transcargo_transportation_header_button_url') || get_theme_mod('transcargo_transportation_header_button_text') ) : ?>
				    		<a href="<?php echo esc_url( get_theme_mod('transcargo_transportation_header_button_url' ) ); ?>" class="button-header py-4 px-1 p-md-4 d-block"><?php echo esc_html( get_theme_mod('transcargo_transportation_header_button_text' ) ); ?></a>
					  	<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
	    </div>
	</div>
	</div>
</header>

