<?php

class Transcargo_Transportation_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $transcargo_transportation_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $transcargo_transportation_recommended_actions_title;
	
	private $transcargo_transportation_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $transcargo_transportation_install_button_label;
	
	private $transcargo_transportation_activate_button_label;
	
	private $transcargo_transportation_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Transcargo_Transportation_Customizer_Notify ) ) {
			self::$instance = new Transcargo_Transportation_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $transcargo_transportation_customizer_notify_recommended_plugins;
		global $transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions;

		global $transcargo_transportation_install_button_label;
		global $transcargo_transportation_activate_button_label;
		global $transcargo_transportation_deactivate_button_label;

		$this->transcargo_transportation_recommended_actions = isset( $this->config['transcargo_transportation_recommended_actions'] ) ? $this->config['transcargo_transportation_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->transcargo_transportation_recommended_actions_title = isset( $this->config['transcargo_transportation_recommended_actions_title'] ) ? $this->config['transcargo_transportation_recommended_actions_title'] : '';
		$this->transcargo_transportation_recommended_plugins_title = isset( $this->config['transcargo_transportation_recommended_plugins_title'] ) ? $this->config['transcargo_transportation_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$transcargo_transportation_customizer_notify_recommended_plugins = array();
		$transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$transcargo_transportation_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->transcargo_transportation_recommended_actions ) ) {
			$transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions = $this->transcargo_transportation_recommended_actions;
		}

		$transcargo_transportation_install_button_label    = isset( $this->config['transcargo_transportation_install_button_label'] ) ? $this->config['transcargo_transportation_install_button_label'] : '';
		$transcargo_transportation_activate_button_label   = isset( $this->config['transcargo_transportation_activate_button_label'] ) ? $this->config['transcargo_transportation_activate_button_label'] : '';
		$transcargo_transportation_deactivate_button_label = isset( $this->config['transcargo_transportation_deactivate_button_label'] ) ? $this->config['transcargo_transportation_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'transcargo_transportation_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'transcargo_transportation_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'transcargo_transportation_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'transcargo_transportation_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function transcargo_transportation_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'transcargo-transportation-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/transcargo-transportation-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'transcargo-transportation-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/transcargo-transportation-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'transcargo-transportation-customizer-notify-js', 'transcargotransportationCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'transcargo-transportation' ),
			)
		);

	}

	
	public function transcargo_transportation_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/transcargo-transportation-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Transcargo_Transportation_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Transcargo_Transportation_Customizer_Notify_Section(
				$wp_customize,
				'transcargo-transportation-customizer-notify-section',
				array(
					'title'          => $this->transcargo_transportation_recommended_actions_title,
					'plugin_text'    => $this->transcargo_transportation_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function transcargo_transportation_customizer_notify_dismiss_recommended_action_callback() {

		global $transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'transcargo_transportation_customizer_notify_show' ) ) {

				$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions = get_option( 'transcargo_transportation_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'transcargo_transportation_customizer_notify_show', $transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions );

				
			} else {
				$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions = array();
				if ( ! empty( $transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions ) ) {
					foreach ( $transcargo_transportation_customizer_notify_transcargo_transportation_recommended_actions as $transcargo_transportation_lite_customizer_notify_recommended_action ) {
						if ( $transcargo_transportation_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions[ $transcargo_transportation_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions[ $transcargo_transportation_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'transcargo_transportation_customizer_notify_show', $transcargo_transportation_customizer_notify_show_transcargo_transportation_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function transcargo_transportation_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$transcargo_transportation_lite_customizer_notify_show_recommended_plugins = get_option( 'transcargo_transportation_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$transcargo_transportation_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$transcargo_transportation_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'transcargo_transportation_customizer_notify_show_recommended_plugins', $transcargo_transportation_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
