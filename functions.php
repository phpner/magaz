<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/phpner
 * @package phpner
 * @subpackage phpner
 */
$theme              = wp_get_theme( 'phpner' );
$phpner_version = $theme->get( 'Version' );

$phpner = (object) array(
  'version' => $phpner_version,
  /**
   * Initialize all the things.
   */
  'main'       => require 'inc/class-phpner.php'
);
var_dump($phpner);

register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'right' => 'Правое'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') ){
function reg_sidebar(){
	register_sidebars(1, array('name'=>'Foobar'));
}

add_action( 'widgets_init', 'reg_sidebar' );
}


add_theme_support( 'woocommerce' );

    add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
 
function woocommerce_header_add_to_cart_fragment(  ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="cart-customlocation" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo $woocommerce->cart->cart_contents_count ?></a>
	<?php
	
	$fragments['a.cart-customlocation'] = ob_get_clean();
	
	return $fragments;
	
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
         case 'UAH': $currency_symbol = 'грн'; break;
     }
     return $currency_symbol;

}
add_filter( 'woocommerce_checkout_fields' , 'custom_fields' );

// Наша перехваченная функция - $fields проходит через фильтр
function custom_fields( $address_fields ) {
     $address_fields['billing']['billing_email']['required'] = false;

      unset($address_fields['billing']['billing_company']);
      unset($address_fields['billing']['billing_city']);
      unset($address_fields['billing']['billing_postcode']);
      unset($address_fields['billing']['billing_country']);
      unset($address_fields['billing']['billing_postcode']);
      unset($address_fields['billing']['billing_address_2']);
      unset($address_fields['billing']['billing_state']);
      unset($address_fields['billing']['billing_postcode']);

     return $address_fields;
}

?>