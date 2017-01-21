<?php
/**
 * Storefront Class
 *
 * @author   phpner
 * @since    1.0.0
 * @package  phpner
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Phpner{

public function __construct(){

	add_action( 'wp_enqueue_scripts', array($this,'add_all_script'), 10);
}

public function add_all_script(){
      wp_enqueue_script( 'jquery', get_template_directory_uri().'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
        wp_enqueue_script( 'my-slick', get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'));

        wp_enqueue_script( 'my_magnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'));

        wp_enqueue_script( 'my_bo-js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'));

        wp_enqueue_script( 'my-script', get_template_directory_uri().'/js/myscript.js',array('jquery'));

        /*Css*/

        wp_enqueue_style( 'my-magnific', get_stylesheet_directory_uri().'/css/magnific-popup.css');

        wp_enqueue_style( 'my-bootstrapt', get_stylesheet_directory_uri().'/css/bootstrap.min.css');

        wp_enqueue_style( 'my-mystyle', get_stylesheet_directory_uri().'/css/style.css');
}


}
return new Phpner();
