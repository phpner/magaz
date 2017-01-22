<?php
/**
 * Шаблон made fermerjeck
 * https://github.com/fermerjeck
 * @package WordPress
 * @subpackage fermerjeck
 */
	wp_footer(); // Необходимо для нормальной работы плагинов
?>
	<div class="container-fluid ">
		<div class="row text-center footer">
			<div class="col-md-4 col-xs-12">
				<?php dynamic_sidebar("footer-1"); ?>
			</div>
			<div class="col-md-4 col-xs-6">
				<?php dynamic_sidebar("footer-2"); ?>
			</div>
			<div class="col-md-4 col-xs-6">
				<?php dynamic_sidebar("footer-3"); ?>
			</div>
		</div>
	</div>
</body>
</html>