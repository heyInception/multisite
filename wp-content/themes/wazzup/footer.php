<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wazzup
 */

?>

<footer class="footer">
	<div class="container">
		<div class="footer__row">
			<div class="footer__column">
				<div class="footer__wrap">
					<div class="footer__logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="footer__bottom footer__bottom_date">Wazzup 2017-2023</div>
				</div>
			</div>
			<div class="footer__column">
				<div class="footer__head"><?php _e('Интеграции', 'wazzup'); ?></div>
				<div class="footer__wrap">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-1',
							'menu_id'        => 'footer-1',
							'menu_class'      => 'footer__menu'
						)
					);
					?>
				</div>
				<div class="footer__bottom"><a href="/privacy-policy/"><?php _e('Политика конфиденциальности', 'wazzup'); ?></a></div>
			</div>
			<div class="footer__column">
				<div class="footer__head"><?php _e('Информация', 'wazzup'); ?></div>
				<div class="footer__wrap">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-2',
							'menu_id'        => 'footer-2',
							'menu_class'      => 'footer__menu'
						)
					);
					?>
				</div>
				<div class="footer__bottom">
					<a href="/user-agreement/"><?php _e('Пользовательское соглашение', 'wazzup'); ?></a>
				</div>
			</div>
			<div class="footer__column">
				<div class="footer__head"><?php _e('О компании', 'wazzup'); ?></div>
				<div class="footer__wrap">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-3',
							'menu_id'        => 'footer-3',
							'menu_class'      => 'footer__menu'
						)
					);
					?>
				</div>
				<div class="footer__bottom"><a href="/user-agreement-with-partner/"><?php _e('Партнерское соглашение', 'wazzup'); ?></a></div>
			</div>
			<?php if (get_locale() == 'ru_RU') : ?>
			<div class="footer__column footer__column_last">
				<div class="footer__img">
					<a href=""><img src="https://wazzup24.ru/wp-content/uploads/2021/12/sk-logo-ru-137x40-1.png" alt=""></a>
				</div>
			</div>
			<?php else: ?>
			<?php endif; ?>
		</div>
		<div class="footer__items footer__items_mobile">
			<span>Wazzup 2017-2023</span>
			<a href="/privacy-policy/"><?php _e('Политика конфиденциальности', 'wazzup'); ?></a>
			<a href="/user-agreement/"><?php _e('Пользовательское соглашение', 'wazzup'); ?></a>
			<a href="/user-agreement-with-partner/"><?php _e('Партнерское соглашение', 'wazzup'); ?></a>
		</div>
	</div>
</footer>
<div id="wz-to-top" class="wz-to-top--visible"><img src="<?php echo get_template_directory_uri(); ?>/img/wz24-arrow-to-top.svg" width="24" height="24"></div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>