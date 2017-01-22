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

	add_action( 'wp_enqueue_scripts',         array($this,'add_all_script'), 10);
    add_action( 'widgets_init',               array( $this, 'widgets_init' ) );
    add_action( 'after_setup_theme',          array( $this, 'setup' ) );

}

public function setup(){
    add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
    set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре
    add_theme_support( 'woocommerce' );
        register_nav_menus( array( // Регистрируем 2 меню
        'top' => 'Верхнее меню',
        'right' => 'Правое'
    ) );

}
// add widgets 
public function widgets_init(){

              $sidebar_args['sider-3'] = array(
                 'name'        => __( 'sidebar-1', 'phpner' ),
                 'id'          => 'sidebar-1',
                 'description' => 'Виджеты, добавленные в эту область, будут отображаться в правом боку'
             );
            $sidebar_args['footer-1'] = array(
                'name'          => __( 'footer-1', 'phpner' ),
                'id'            => 'footer-1',
                'description'   => 'Виджеты, добавленные в эту область, будут отображаться в подвале сайта'
            );

            $sidebar_args['footer-2'] = array(
                'name'        => __( 'footer-2', 'phpner' ),
                'id'          => 'footer-2',
                'description' => 'Виджеты, добавленные в эту область, будут отображаться в подвале сайта'
            );
             $sidebar_args['footer-3'] = array(
                'name'        => __( 'footer-3', 'phpner' ),
                'id'          => 'footer-3',
                'description' => 'Виджеты, добавленные в эту область, будут отображаться в подвале сайта'
            );

            foreach ($sidebar_args as $key => $value) {

            register_sidebar($value);     

            }

}
//add JS
public function add_all_script(){
        //JS
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
