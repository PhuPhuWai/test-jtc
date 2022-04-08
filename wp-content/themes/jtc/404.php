<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jtc
 */

get_header("top01");
?>

<div class="notfound-page">
		<div class="bnr-pd">
			<p class="fz-33 fz-24-sp txt-center w-color">404</p>
		</div>
	<div class="notfound-content">
		<div class="m-w800">
			<h2 class="headline mb10">
				<?php esc_html_e('お探しのページは見つかりませんでした。', ''); ?>
			</h2>
			<div>
				<p class="fz-18 fz-16-sp mt30">申し訳ございません。お探しのページが見つかりませんでした。<br>削除または名前が変更された、もしくは一時的に使用できなくなっている可能性がございます。<br>お手数ですが、トップからお求めのページをお探しください。</p>
				<div class="common-btn arr-img3 btn-wd5 mt75 mt45-sp">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="btn bgskew bor-btn-blue">
						<span>トップページへ</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-b">
  <?php get_footer(); ?>
</div>