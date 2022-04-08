<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jtc
 */

// get_header();
// get_header("back-w-header")


if (is_home()) {
	get_header();
} else {
	get_header("top01");
}

?>

<section class="mv-sec">
	<div class="common-mv-gp">
		<div class="common-mv-bg">
			<h1 class="common-mv-txt">お問い合わせ</h1>
		</div>
	</div>
	<?php echo the_breadcrumb(); ?>
</section>

<?php
while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<div class="footer-b">
	<?php get_footer(); ?>
</div>