<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wazzup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#" class="page">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="c5e23f5a65cb34a2" />
	<meta name="google-site-verification" content="pMDpJAr2m2VbOEQuwjuIpxua9ArNvICPjMIox2-AUYg" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			for (var j = 0; j < document.scripts.length; j++) {
				if (document.scripts[j].src === r) {
					return;
				}
			}
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(94579545, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/94579545" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class('page__body'); ?>>

	<div id="page" class="<?php if (get_locale() == 'en_US') : ?>wz-english<?php endif; ?> site">
		<header class="header">
			<div class="container">
				<div class="header__row header__row_padding">
					<div class="header__column">
						<div class="header__logo">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="header__burger">
						<button class="burger" aria-label="<?php _e('Открыть меню', 'wazzup'); ?>" aria-expanded="false" data-burger>
							<span class="burger__line"></span>
						</button>
					</div>
					<div class="header__row header__row_menu" data-menu>
						<div class="header__column header__column_mobile">
							<nav class="header__menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav>
						</div>
						<div class="header__column header__column_mobile">
							<div class="header__buttons">
								<?php echo do_shortcode('[wz-translate language="ru_RU"]<a href="ru"><button class="btn-reset header__btn">' . __('Вход', 'wazzup') . '</button></a>[/wz-translate]') ?>
								<?php echo do_shortcode('[wz-translate language="ru_RU"]<a href="ru"><button class="btn-reset header__btn">' . __('Регистрация', 'wazzup') . '</button></a>[/wz-translate]') ?>
								<?php echo do_shortcode('[wz-translate language="en_US"]<a href="sadas"><button class="btn-reset header__btn">' . __('Вход', 'wazzup') . '</button></a>[/wz-translate]') ?>
								<?php echo do_shortcode('[wz-translate language="en_US"]<a href="sadas"><button class="btn-reset header__btn">' . __('Регистрация', 'wazzup') . '</button></a>[/wz-translate]') ?>
							</div>
						</div>
						<div class="header__column header__column_mobile">
							<div class="header__lang">
								<div class="wz-lang-switcher ">
									<div class="wz-lang-list ">
										<div class="wz-lang-list__item"><a href="https://wz-multisite-en.ru/">USA (EN)</a></div>
										<div class="wz-lang-list__item"><a href="https://wz-multisait-ru.ru/">Россия (RU)</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>