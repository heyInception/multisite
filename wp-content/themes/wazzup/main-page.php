<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template name: Main page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wazzup
 */

get_header();
?>

<main class="main">
	<?php $current_language = get_locale(); ?>
	<?php if ($current_language == 'ru_RU') { ?>
		<?php get_template_part('template-parts/main-page/first-screen'); ?>
		<?php get_template_part('template-parts/main-page/companiens'); ?>
		<?php get_template_part('template-parts/main-page/messendger'); ?>
		<?php get_template_part('template-parts/main-page/no-problems'); ?>
		<?php get_template_part('template-parts/main-page/thanks'); ?>
		<?php get_template_part('template-parts/main-page/reviews'); ?>
		<?php get_template_part('template-parts/main-page/integration'); ?>
		<?php get_template_part('template-parts/main-page/app'); ?>
		<?php get_template_part('template-parts/main-page/faq'); ?>
		<?php get_template_part('template-parts/main-page/tariff'); ?>
		<?php get_template_part('template-parts/main-page/case'); ?>
		<?php get_template_part('template-parts/main-page/call'); ?>
	<?php } ?>
	<?php if ($current_language == 'en_US') { ?>
		<?php get_template_part('template-parts/main-page/first-screen'); ?>
		<?php get_template_part('template-parts/main-page/messendger'); ?>
		<?php get_template_part('template-parts/main-page/no-problems'); ?>
		<?php get_template_part('template-parts/main-page/thanks'); ?>
		<?php get_template_part('template-parts/main-page/integration'); ?>
		<?php get_template_part('template-parts/main-page/app'); ?>
		<?php get_template_part('template-parts/main-page/faq'); ?>
		<?php get_template_part('template-parts/main-page/tariff'); ?>
		<?php get_template_part('template-parts/main-page/call'); ?>
	<?php } ?>
	

</main><!-- #main -->

<?php
get_footer();
