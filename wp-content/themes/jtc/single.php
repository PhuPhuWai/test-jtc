<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jtc
 */

get_header("top01");
?>

<section class="mv-sec">
	<div class="common-mv-gp">
		<div class="common-mv-bg">
			<h1 class="common-mv-txt">お知らせ</h1>
		</div>
	</div>
	<?php echo the_breadcrumb(); ?>
</section>
<section class="m-w800 cFix">
	<div class="main cFix">				
		<div class="sin-post post-main bor-tblr">
			<h1><?php echo the_title(); ?></h1>
			<div class="po-date-sns cFix col-spac">
				<div class="po-date-txt fl-lt"><?php the_time('Y.m.d'); ?>
				<span>
					<?php
					$categories = get_the_category();

					foreach($categories as $category){
						echo $category->name;
					}
					?>
				</span>
			</div>
			<div class="col-gp ali-center col-end col-start-sp pt30-sp">
				<span class="sns-txt">share</span>
				<div class="fk-icon">
					<a href="https://www.facebook.com/JapanTrainingCentre" target="_blank">
						<picture>
							<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/news/FT-g.webp" type="image/webp">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/news/FT-g.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/news/FT-g.png" alt="Facebook">
							</picture>
						</a>
					</div>
					<div class="twi-icon">
						<a href="https://twitter.com/JTCMawlamyine" target="_blank">
							<picture>
								<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/news/twitter-g.webp" type="image/webp">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/news/twitter-g.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/news/twitter-g.png" alt="twitter">
								</picture>
							</a>
						</div>
					</div>
				</div>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					the_content();
              endwhile; // End of the loop.
              ?>
          </div>
          <div class="front-page">
          	<?php previous_post('%', '<img class="imgalign" src="' . get_bloginfo('template_directory') . '/assets/img/news/frt_arr_on.png" alt="Previous" />  ', 'no');?>
          	<p class="m-color pl10">一覧に戻る</p>
          </div>
      </div>
  </section>

  <div class="footer-b">
  	<?php get_footer(); ?>
  </div>