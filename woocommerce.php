<?php
/**
 * Шаблон made phpner
  * https://github.com/phpner
 * @package phpner
 * @subpackage phpner
 */
get_header(); // Подключаем хедер?> 
	<div class="container-fluid">
	
		<div class="row owl-carousel">

				<div class="one"><img src="<?php echo get_template_directory_uri()?>/img/slider/1.jpg" alt="">
				<div class="textbox firstChild">
				<p >Ферма маркет это</p>
				</div>
				</div>
				<div class="one"><img src="<?php echo get_template_directory_uri()?>/img/slider/2.jpg" alt="">
				<div class="textbox">
				<p>Натуральные ягоды</p>
				</div>
				</div>
				<div class="one"><img src="<?php echo get_template_directory_uri()?>/img/slider/3.jpg" alt="">
				<div class="textbox">
				<p>Натуральные овощи</p>
				</div>
				</div>
				<div class="one"><img src="<?php echo get_template_directory_uri()?>/img/slider/4.jpg" alt="">
				<div class="textbox">
				<p>Натуральная молочная продукция</p>
				</div>
				</div>
				<div class="one"><img src="<?php echo get_template_directory_uri()?>/img/slider/5.jpg" alt="">
				<div class="textbox">
				<p>Здоровая жизнь</p>
				</div>
				</div>
	
		</div>

	<div class="row">
		<div class="col-md-9 col-xs-9">
<?php woocommerce_content(); ?> 
		</div> 
		<div class="col-md-3 col-xs-3 ">	
				<div id="menuRight">
				<p class="catP">Категории</p>
						<?php
						$args = array( // Выводим верхнее меню
							'theme_location'=>'right',
							'container'=>'',
							'depth'=> 0,
							'menu_class' => "menuRight",
							'fallback_cb' => '__return_empty_string',
						);

						wp_nav_menu($args)
						?>
				</div>
				<div class="col-md-12 col-xs-12 productRight">
				<?php dynamic_sidebar("sidebar-1"); ?>
				</div>
		</div>
	</div> 
</div>
</div>
</div> 
<?php get_footer(); // Подключаем футер ?>