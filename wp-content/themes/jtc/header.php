<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jtc
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1" />

		<?php wp_head(); ?>
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/jtc-favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/jtc-favicon.ico" type="image/x-icon">
		<!-- For Noto Sans JP , Gothic -->
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<!-- For Noto Sans JP , Gothic --> 
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
	</head>

	<body id="top">
		<div id="root">
			<header id="header" class="header">
				<div class="head-m">
					<div class="container">
						<div class="header-div col-gp ali-center col-spac">
							<div class="head-logo-div">
								<a href="<?php echo home_url(); ?>">
									<div class="h-logo">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/jtc-logo.png" alt="JTC logo" class="h-logo-w">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/h-logo-header.png" alt="JTC logo" class="h-logo-g" />
									</div>
								</a>
							</div>
							<div class="nav-div down-arr">
								<ul class="col-gp nav-list col-end ali-center">
									<li>
										<a href="<?php echo home_url() ?>">トップ</a>
									</li>
									<li class="navi-arr w-color ">
										<a href="<?php echo home_url() . '/school/'; ?>">
											<div class="col-gp ali-center">
												<span>学校紹介</span>
												<div class="arr-down pl5">
													<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/down.png" alt="dropdown" class="down-icon-w">
													<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/down-arr-b.png" alt="dropdown" class="down-icon-b">
												</div>
											</div>
										</a>
										<div class="menu-hovergpall">
											<div class="submenugp">
												<ul class="submenuli">
													<li class="sub-li">
														<a href="<?php echo home_url() . '/school/'; ?>">
															学校概要・運営会社
														</a>
													</li>
													<li class="sub-li">
														<a href="<?php echo home_url() . '/school/mawlamyine/'; ?>">
															モーラミャイン校
														</a>
													</li>
													<li class="sub-li">
														<a href="<?php echo home_url() . '/school/mandalay/'; ?>">
															マンダレー校
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<a href="<?php echo home_url() . '/news/'; ?>">お知らせ</a>
									</li>
									<li>
										<a href="<?php echo home_url() . '/youtube/'; ?>">Youtube動画一覧</a>
									</li>
									<!-- <li>
										<a href="#">
											<div class="col-gp ali-center">
												<span>人材紹介・送り出しについて</span>
												<div class="arr-down pl5">
													<img src="<?php //bloginfo('template_directory'); ?>/assets/img/common/down.png" alt="dropdown" class="down-icon-w">
													<img src="<?php //bloginfo('template_directory'); ?>/assets/img/common/down-arr-b.png" alt="dropdown" class="down-icon-b">
												</div>
											</div>
										</a>
										<div class="menu-hovergpall">
											<div class="submenugp">
												<ul class="submenuli">
													<li class="sub-li">
														<a href="#">
															企業の採用担当者さまへ
														</a>
													</li>
													<li class="sub-li">
														<a href="#">
															送り出し機関・監理団体の方へ
														</a>
													</li>
													<li class="sub-li">
														<a href="#">
															人材紹介会社の方へ
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li> -->
									<li>
										<a href="<?php echo home_url() . '/contact' ?>">お問い合わせ</a>
									</li>
								</ul>
							</div>
							<div class="sns-block">
								<ul class="sns-link">
									<li>
										<a href="https://www.facebook.com/JapanTrainingCentre" target="_blank">
											<div class="">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/ft_icon.png" alt="facebook" class="facebook-w">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/facebook-black.png" alt="facebook" class="facebook-b">
											</div>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/JTCMawlamyine" target="_blank">
											<div class="">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/twitter_icon.png" alt="twitter" class="twitter-w">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/twitter-black.png" alt="twitter" class="twitter-b">
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UCfp5EYjnl9fFLaSjaXLnMhQ" target="_blank">
											<div class="">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/youtube_icon.png" alt="youtube" class="youtube-w">
												<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/youtube-black.png" alt="youtube" class="youtube-b">
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="sp-gmenu">
					<nav class="gmenu-sp">
						<div class="menu-sp">
							<span class="line line_01"></span>
							<span class="line line_02"></span>
							<span class="line line_03"></span>
						</div>
					</nav>
					<div class="nav-sp">
						<div class="gnav-sp">
							<div class="nav-logo">
								<a href="<?php echo home_url(); ?>">
									<picture>
										<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/h-logo-header.webp" type="image/webp">
											<img src="<?php bloginfo('template_directory'); ?>/assets/img/common/h-logo-header.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/h-logo-header.png" alt="JTC">
										</picture>
									</a>
								</div>
								<ul class="nav-menu">
									<li>
										<a href="<?php echo home_url(); ?>">
											<p class="w-color fz-16-sp">トップ</p>
										</a>
									</li>
									<li class="tog-click">
										<div class="tog-click-pd">
											<p class="w-color fz-16-sp">学校紹介</p>
											<span class="tog-icn"></span>
										</div>
										<div class="detail detail-bg">
											<ul>
												<li>
													<a href="<?php echo home_url() . '/school/'; ?>">学校概要・運営会社</a>
												</li>
												<li>
													<a href="<?php echo home_url() . '/school/mawlamyine'; ?>">モーラミャイン校</a>
												</li>
												<li>
													<a href="<?php echo home_url() . '/school/mandalay'; ?>">マンダレー校</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a href="<?php echo home_url() . '/news/'; ?>">
											<p class="w-color fz-16-sp">お知らせ</p>
										</a>
									</li>
									<li>
										<a href="<?php echo home_url() . '/youtube/'; ?>">
											<p class="w-color fz-16-sp">Youtube動画一覧</p>
										</a>
									</li>
									<!-- <li class="tog-click01">
										<div class="tog-click-pd">
											<p class="w-color fz-16-sp">人材紹介・送り出しについて </p>
											<span class="tog-icn"></span>
										</div>
										<div class="detail01 detail-bg">
											<ul>
												<li>
													<a href="#">企業の採用担当者さまへ</a>
												</li>
												<li>
													<a href="#">送り出し機関・監理団体の方へ</a>
												</li>
												<li>
													<a href="#">人材紹介会社の方へ</a>
												</li>
											</ul>
										</div>
									</li> -->
									<li>
										<a href="<?php echo home_url() . '/contact/'; ?>">
											<p class="w-color fz-16-sp">お問い合わせ</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</header>