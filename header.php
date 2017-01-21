<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>
<body>
<div class="container-fluid ">
<div class="row top text-center">
<div class="col-md-2"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></div>
<div class="col-md-7">
<?php
		$args = array( // Выводим верхнее меню
			'theme_location'=>'top',
			'container'=>'',
			'menu_class'      => 'topmenu',
			'menu_id' => 'verh',
			'depth'=> 0);
		wp_nav_menu($args);

?>
</div>
<div class="col-md-3">
<?php get_search_form(); ?>
</div>
</div>
<div class="clearfix"></div>

<div class="row">
<div class="col-md-8 cont_top">
	<ul>
		<li><span> <i class="glyphicon glyphicon-phone-alt" ></i> +38-067-600-10-66</span></li>
		<li><span> <i class="glyphicon glyphicon-phone-alt"></i> +38-099-759-93-94</span></li>
		<li><span> <i class="glyphicon glyphicon-envelope"></i> phpner@gmail.com</span></li>
	</ul>
</div>
<?php 
global $woocommerce;
$url = $woocommerce->cart->get_cart_url();
?>
	<div class="col-md-4 pull-right cart_top">
	<span>
	<?php $cart_got =  woocommerce_header_add_to_cart_fragment(); echo $cart_got['a.cart-customlocation'];?>
	</span>
			<a href="<?php echo $url?>">
		<img src="<?php echo get_template_directory_uri()?>/img/cart.png" alt="">
		</a>
	</div>
</div>

</div>
