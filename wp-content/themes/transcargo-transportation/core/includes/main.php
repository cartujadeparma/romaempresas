<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_transcargo_transportation_dismissed_notice_handler', 'transcargo_transportation_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function transcargo_transportation_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $transcargo_transportation_type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $transcargo_transportation_type, TRUE );
    }
}

function transcargo_transportation_deprecated_hook_admin_notice() {
    if ( get_option( 'dismissed-get_started', false ) ) {
        return;
    }
    $transcargo_transportation_current_screen = get_current_screen();
    if (
        $transcargo_transportation_current_screen &&
        $transcargo_transportation_current_screen->id !== 'appearance_page_transcargo-transportation-guide-page' &&
        $transcargo_transportation_current_screen->id !== 'appearance_page_transcargotransportation-wizard'
    ) {
        $transcargo_transportation_comments_theme = wp_get_theme();
        ?>
        <div class="transcargo-transportation-notice-wrapper notice notice-success notice-get-started-class is-dismissible" data-notice="get_started">
            <div class="transcargo-transportation-notice">
                <div class="transcargo-transportation-notice-content">
                    <div class="transcargo-transportation-notice-heading">
                        <h2>
                            <?php esc_html_e( 'Thanks For Installing ', 'transcargo-transportation' ); ?>
                            <?php echo esc_html( $transcargo_transportation_comments_theme ); ?>
                            <?php esc_html_e( ' Theme', 'transcargo-transportation' ); ?>
                        </h2>
                        <p>
                        <?php
                        printf(
                            esc_html__( '%s is now installed and ready to use. We\'ve provided some links to get you started.', 'transcargo-transportation' ),
                            esc_html( $transcargo_transportation_comments_theme )
                        );
                        ?>
                        </p>
                    </div>
                    <div class="diplay-flex-btn">
                        <a class="button button-primary"
                           href="<?php echo esc_url( admin_url( 'themes.php?page=transcargo-transportation-guide-page' ) ); ?>">
                           <?php esc_html_e( 'GET STARTED', 'transcargo-transportation' ); ?>
                        </a>
                        <a class="button button-primary"
                           target="_blank"
                           href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ); ?>">
                           <?php esc_html_e( 'GO TO PREMIUM', 'transcargo-transportation' ); ?>
                        </a>
                        <a class="button button-primary import"
                           href="<?php echo esc_url( admin_url( 'themes.php?page=transcargotransportation-wizard' ) ); ?>">
                           <?php esc_html_e( 'ONE CLICK DEMO IMPORTER', 'transcargo-transportation' ); ?>
                        </a>
                    </div>
                </div>
                <div class="transcargo-transportation-notice-img">
                    <a href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_THEME_BUNDLE ); ?>" target="_blank">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/notification.png' ); ?>" alt="<?php esc_attr_e( 'logo', 'transcargo-transportation' ); ?>">
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'transcargo_transportation_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'transcargo_transportation_getting_started' );
function transcargo_transportation_getting_started() {
    add_theme_page(
        esc_html__( 'Get Started', 'transcargo-transportation' ),
        esc_html__( 'Get Started', 'transcargo-transportation' ),
        'edit_theme_options',
        'transcargo-transportation-guide-page',
        'transcargo_transportation_test_guide'
    );
}

// After switching theme, reset dismissed notice option
add_action('after_switch_theme', 'transcargo_transportation_after_switch_theme');
function transcargo_transportation_after_switch_theme() {
    update_option('dismissed-get_started', FALSE);
}

function transcargo_transportation_admin_enqueue_scripts() {
	wp_enqueue_style( 'transcargo-transportation-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'transcargo-transportation-admin-script', get_template_directory_uri() . '/js/transcargo-transportation-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'transcargo-transportation-admin-script', 'transcargo_transportation_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'transcargo_transportation_admin_enqueue_scripts' );

if ( ! defined( 'TRANSCARGO_TRANSPORTATION_DOCS_FREE' ) ) {
define('TRANSCARGO_TRANSPORTATION_DOCS_FREE',__('https://demo.misbahwp.com/docs/transcargo-transportation-free-docs/','transcargo-transportation'));
}
if ( ! defined( 'TRANSCARGO_TRANSPORTATION_DOCS_PRO' ) ) {
define('TRANSCARGO_TRANSPORTATION_DOCS_PRO',__('https://demo.misbahwp.com/docs/transcargo-transportation-pro-docs/','transcargo-transportation'));
}
if ( ! defined( 'TRANSCARGO_TRANSPORTATION_BUY_NOW' ) ) {
define('TRANSCARGO_TRANSPORTATION_BUY_NOW',__('https://www.misbahwp.com/products/transcargo-wordpress-theme','transcargo-transportation'));
}
if ( ! defined( 'TRANSCARGO_TRANSPORTATION_SUPPORT_FREE' ) ) {
define('TRANSCARGO_TRANSPORTATION_SUPPORT_FREE',__('https://wordpress.org/support/theme/transcargo-transportation/','transcargo-transportation'));
}
if ( ! defined( 'TRANSCARGO_TRANSPORTATION_REVIEW_FREE' ) ) {
define('TRANSCARGO_TRANSPORTATION_REVIEW_FREE',__('https://wordpress.org/support/theme/transcargo-transportation/reviews/#new-post/','transcargo-transportation'));
}
if ( ! defined( 'TRANSCARGO_TRANSPORTATION_DEMO_PRO' ) ) {
define('TRANSCARGO_TRANSPORTATION_DEMO_PRO',__('https://demo.misbahwp.com/transcargo-transportation/','transcargo-transportation'));
}
if( ! defined( 'TRANSCARGO_TRANSPORTATION_THEME_BUNDLE' ) ) {
define('TRANSCARGO_TRANSPORTATION_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle	','transcargo-transportation'));
}

function transcargo_transportation_test_guide() { 
	$theme = wp_get_theme();?>
	<div class="wrap" id="main-page">
		<div class="demo-import-box">
			<h4><?php echo esc_html__('Import homepage demo in just one click.','transcargo-transportation'); ?></h4>
			<p><?php echo esc_html__('Get started with the WordPress theme installation','transcargo-transportation'); ?></p>
			<a class="button button-primary import" href="themes.php?page=transcargotransportation-wizard"><?php echo esc_html__('ONE CLICK DEMO IMPORTER','transcargo-transportation'); ?></a>
		</div>
		<div id="lefty">
            <div id="lefty-up">
                <div id="description">
                    <h3><?php esc_html_e('Welcome! Thank you for choosing ','transcargo-transportation'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'transcargo-transportation'); ?><?php echo esc_html($theme['Version']);?></span></h3>
                    <div id="description-insidee">
                        <?php
                            $theme = wp_get_theme();
                            echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
                        ?>
                    </div>
                    <div id="admin_links">
                        <h3><?php esc_html_e('Unlock More Features With Premium Version','transcargo-transportation'); ?></h3>
                        <div id="admin_inside_links">
                            <a href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Get Premium', 'transcargo-transportation' ) ?></a>
                            <a href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_DEMO_PRO ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Live Demo', 'transcargo-transportation' ); ?> </a>
                            <a class="blue-button-1" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_DOCS_PRO ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Pro Documentation', 'transcargo-transportation' ) ?></a>
                            <a class="blue-button-2" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_THEME_BUNDLE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'View All Themes', 'transcargo-transportation' ) ?></a>
                        </div>
                    </div>
                </div>
                <div id="theme-img">
					
                    <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
                    <div id="img-btm-box">
                        <h3 class="bundle-box-title"><?php esc_html_e('Get This Premium Theme at Flat 20% OFF','transcargo-transportation'); ?></h3>
                        <div class="bundle-info">
                            <div class="bundle-left">
                                <p class="coupon-text"><?php esc_html_e('Use Coupon Code:','transcargo-transportation'); ?></p>
                                <p class="coupon-code"><?php esc_html_e('HEAT20','transcargo-transportation'); ?></p>
                            </div>
                            <div class="bundle-right">
                                <a class="white-button" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now $40', 'transcargo-transportation' ) ?><span><?php esc_html_e( '$60', 'transcargo-transportation' ) ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lefty-down">
                <div id="admin_links">
                    <h3><?php esc_html_e('Important Links','transcargo-transportation'); ?></h3>
                    <p id="description-insidee"><?php esc_html_e('Below are some Important Link, Customize your theme, Get Support, and If you are stuck somewhere get help with the documentation','transcargo-transportation'); ?></p>
                    <div id="admin_inside_links">
                        <a href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Transcargo Transportation Documentation', 'transcargo-transportation' ) ?></a>
                        <a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize Theme', 'transcargo-transportation' ); ?> </a>
                        <a class="blue-button-1" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Get Support', 'transcargo-transportation' ) ?></a>
                        <a class="blue-button-2" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review Theme', 'transcargo-transportation' ) ?></a>
                    </div>
                </div>
            </div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle bundle"><?php esc_html_e( 'Get All Themes', 'transcargo-transportation' ); ?></h3>
				<div class="insidee theme-bundle">
					<img width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle-image.png' ); ?>" alt="<?php esc_attr_e('logo', 'transcargo-transportation'); ?>">
					<p class="offer"><?php esc_html_e('Get 110+ Perfect WordPress Theme In A Single Package at just $89.','transcargo-transportation'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 110+ WordPress Themes At 20% Off ','transcargo-transportation'); ?><span><?php esc_html_e('"HEAT20"','transcargo-transportation'); ?></span></p>
				<div id="admin_pro_linkss">
					<a class="blue-button-1" href="<?php echo esc_url( TRANSCARGO_TRANSPORTATION_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy All Themes - $89', 'transcargo-transportation' ) ?></a>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','transcargo-transportation'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','transcargo-transportation'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','transcargo-transportation'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','transcargo-transportation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>
