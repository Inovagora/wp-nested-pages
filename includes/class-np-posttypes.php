<?php
/**
* Post Types required by Nested Pages
*/
class NP_PostTypes {

	public function __construct()
	{
		add_action( 'init', array( $this, 'registerRedirects') );
	}

	/**
	* Redirects Post Type
	*/
	public function registerRedirects()
	{
		$labels = array(
			'name' => __('Redirects'),  
			'singular_name' => __('Redirect'),
			'add_new_item'=> 'Add Redirect',
			'edit_item' => 'Edit Redirect',
			'view_item' => 'View Redirect'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,  
			'show_ui' => true,
			'menu_position' => 5,
			'capability_type' => 'post',  
			'hierarchical' => true,  
			'has_archive' => true,
			'supports' => array('title','editor'),
			'rewrite' => array('slug' => 'np-redirect', 'with_front' => false)
		);
		register_post_type( 'np-redirect' , $args );
	}

}