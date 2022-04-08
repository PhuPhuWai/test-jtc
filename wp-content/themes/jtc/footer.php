<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jtc
 */

?>

<footer id="footer" class="footer">
	<div class="sec-container">
		<div class="pc">
			<div class="footer-list sec-container1 pt80 pb50 pt30-sp pb20-sp">
				<div class="foot-item">
					<a href="<?php echo home_url() ?>">
						<picture>
							<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/jtc-logo.webp" type="image/webp">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/jtc-logo.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/jtc-logo.png" alt="JTC" class="foot-logo">
							</picture>
						</a>
					</div>
					<div class="foot-item">
						<ul>
							<li><a href="<?php echo home_url() ?>">トップ</a></li>
							<li>
								<a href="<?php echo home_url() . '/school/'; ?>">学校紹介</a>
								<a href="<?php echo home_url() . '/school/'; ?>" class="foot-item-list">学校概要・運営会社</a>
								<a href="<?php echo home_url() . '/school/mawlamyine/'; ?>" class="foot-item-list">モーラミャイン校</a>
								<a href="<?php echo home_url() . '/school/mandalay/'; ?>" class="foot-item-list">マンダレー校</a>
							</li>
							<li><a href="<?php echo home_url() . '/news/'; ?>">お知らせ</a></li>
							<li><a href="<?php echo home_url() . '/youtube/'; ?>">Youtube動画一覧</a></li>
						</ul>
					</div>
					<div class="foot-item">
						<ul>
							<!-- <li>
								<a href="#">人材紹介・送り出しについて</a>
								<a href="#" class="foot-item-list">企業採用担当者さまへ</a>
								<a href="#" class="foot-item-list">送り出し機関・監理団体の方へ</a>
								<a href="#" class="foot-item-list">人材紹介会社の方へ</a>
							</li> -->
							<li><a href="<?php echo home_url() . '/contact/'; ?>">お問い合わせ</a></li>
						</ul>
					</div>
					<div class="foot-item">
						<ul class="foot-icon">
							<li>
								<a href="https://www.facebook.com/JapanTrainingCentre" target="_blank" class="icon-01">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/ft_icon.png" alt="facebook">               
								</a>
							</li>
							<li>
								<a href="https://twitter.com/JTCMawlamyine" target="_blank" class="icon-02">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/twitter_icon.png" alt="twitter">
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCfp5EYjnl9fFLaSjaXLnMhQ" target="_blank" class="icon-03">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/youtube_icon.png" alt="youtube">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="sp">
				<div class="ft-copy">
					<p class="copy-right col-gp ali-center col-center">
						<a href="#">©</a><span>JTC Website</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<div class="scrolltop">
		<a href="#top" class="pagetop"><span>TO TOP</span></a>
	</div>
	<!-- /footer -->
</div><!-- /root -->
<?php wp_footer(); ?>

</body>
</html>