<?php
/**
 * CPT Functions
 *
 * @package emma
 */

/* ==========================================================================
 *  Register Custom Post Type
 * ========================================================================== */
add_action( 'init', 'register_post_types' );

function register_post_types() {

	register_post_type( 'services', array(
		'labels'        => array(
			'name'      => 'Service',
			'menu_name' => 'Services',
		),
		'public'        => true,
		'has_archive'   => false,
		'show_in_menu'  => true,
		'query_var'  => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-clipboard',

		'supports' => array( 'title')
	) );

    register_post_type( 'vacancies', array(
      'labels'        => array(
        'name'      => 'Vacancy',
        'menu_name' => 'Vacancies',
      ),
      'public'        => true,
      'has_archive'   => false,
      'show_in_menu'  => true,
      'query_var'  => true,
      'menu_position' => 6,
      'menu_icon'     => 'dashicons-clipboard',

      'supports' => array( 'title', 'editor', 'excerpt')
    ) );
}

add_action('init', 'register_post_types');
