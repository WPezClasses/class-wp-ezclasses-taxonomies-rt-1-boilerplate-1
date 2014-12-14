<?php
/** 
 * Wordpress register_taxonomy() The ezWay.
 *
 * Truth be told, the primary benefit here is automating the labels. That said, having the minimal TODOs laid out for you helps too.   
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WPezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.1
 * @license TODO
 */
 
/**
 * == Change Log == 
 *
 * -- 0.5.0 - Mon 8 Dec 2014
 * ---- Pop the champagne!
 */
 
/**
 * == TODO == 
 *
 *
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if ( ! class_exists('Class_WP_ezClasses_Taxonomies_RT_1_Boilerplate_1_TODO') ) {
  class Class_WP_ezClasses_Taxonomies_RT_1_Boilerplate_1_TODO extends Class_WP_ezClasses_Taxonomies_RT_1{
  
    
	/**
	 * This is where your magic happens. The idea here is to (re) define as little as possible. Of course you
	 * can add args[] to these various sub-arrays and they'll overide the defaults. The point is, this is all the 
	 * TODOs you need to get a taxonomy up and running (with as litte actual thinking as possible).
	 */
	protected function taxonomy_todo(){
	
	// $this->_str_action = 'init', 
	// $this->_int_priortiy = 10, 
	
	  /**  
	   * --
	   
	  $str_taxonomy = 'TODO';
	  
	  $arr_capabilities = $this->capabilities_defaults();
	
	  $arr_taxonomy_todo = array(
	  
	    'taxonomy'		=> $str_taxonomy,
		'object_type'	=> array(),							// TODO - aka array of post_type(s) to attach this to.
		'arguments'		=> array(
		  'hierarchical'	=> false,						// TODO. fyi: default is false
		  'query_var'		=> $str_taxonomy,				// default is the 'taxonomy', or if ya want, do your own here
		  'labels'			=> array(
		    'name'				=> 'TODO: name',			// name
		    'singular_name'		=> 'TODO: singular_name',	// labels: 'singular_name'
			'menu_name' 		=> 'TODO: name',			// labe
			),
		  'rewrite' => array(
		    'slug' => 'TODO-slug',
			),
		  'capabilities' => $arr_capabilities,
		  ),
	    );
	  
	  return $arr_taxonomy_todo;
	  
	  * --
	  */
	}

  }
} 

// TODO = update class name and then uncomment
// $obj_instantiate = Class_WP_ezClasses_Taxonomies_RT_1_Boilerplate_1_TODO::ez_new();
