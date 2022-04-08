<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jtc
 */

get_header();
?>

<main>
  <section class="mv-vd">
    <div class="video-box">
      <video class="video" preload playsinline autoplay muted loop>
        <source src="<?php bloginfo('template_directory'); ?>/assets/video/top_01.mp4" type="video/mp4">
        </video>
      </div>
      <div class="text-box">
        <h1 class="mv-txt"><span>ミャンマーにある日本語学校</span><br>Japan Training Center Mawlamyine</h1>
      </div>
      <div class="scroll_dw">
        <a href="#overview" class="anchor">
          <picture>
            <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/scroll_down.webp" type="image/webp" />
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/scroll_down.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/scroll_down.png" alt="Scroll Down" />
            </picture>
          </a>
        </div>
      </section>

      <section class="news-sec bg-w">
        <span id="overview" class="anchorH"></span>
        <div class="new-div">
          <hr class="main-tl-line">
          <p class="main-ttl fz-33">
            <span>お知らせ</span>
          </p>
          <div class="sec-container">
            <div class="new-list">
              <ul class="col-gp cFix">
                <?php query_posts('posts_per_page=3&paged=' . $paged); ?>
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                    <li class="col3 col1-sp mb40-sp">
                      <a href="<?php the_permalink(); ?>">
                        <div class="new-bl">
                          <?php the_post_thumbnail('thumbnail,'); ?>
                        </div>
                        <p class="new-tlt">
                          <?php echo wp_trim_words(get_the_title(), 30, "..."); ?>
                        </p>
                        <div class="date-gp ali-center">
                          <p class="date-txt"><?php the_time('Y.m.d'); ?></p>
                          <p class="cat-txt">
                            <?php
                            $categories = get_the_category();

                            foreach ($categories as $category) {
                              echo $category->name;
                            }
                            ?>
                          </p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; ?>
                  <?php wp_reset_query();
                endif; ?>
              </ul>
              <div class="common-btn arr-img btn-wd1 mt75 mt25-sp mb5-sp arr-img-eff">
                <a href="<?php echo home_url() . '/news/'; ?>" class="btn bgskew bor-btn-g">
                  <span>お知らせ一覧</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="news-sec bg-w">
        <span id="overview" class="anchorH"></span>
        <div class="new-div01">
          <hr class="main-tl-line">
          <p class="main-ttl fz-33">
            <span>JTCとは</span>
          </p>
          <div class="sec-container1">
            <div class="jtc-content pt60 pb70 pt45-sp pb45-sp">
              <p class="fz-jp-m fz-18 fz-16-sp">
                埼玉県に本社を持つITオフショア企業<b>「クオリー株式会社</b>」が<br>
                ミャンマーで運営するミャンマー人向けの日本語学校です。<br>
                ミャンマー人で日本や日本語に興味を持っていただいた方に対して<br>
                日本語や日本の文化を教えております。<br>
                モーラミャイン校とマンダレー校の2つの学校があります。<br>
              </p>
            </div>
            <div class="common-btn arr-img btn-wd1 mb75 mb5-sp arr-img-eff">
              <a href="<?php echo home_url() . '/school/'; ?>" class="btn bgskew bor-btn-g">
                <span>お知らせ一覧</span>
              </a>
            </div>
            <div class="busi-list">
              <ul class="col-gp ali-center">
                <li class="col2 col1-sp mb30-sp">
                  <div class="busi-lf">
                    <div class="busi-gp">
                      <div class="busi-cen mb60 mb45-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/JTC-g.png" alt="モーラミャイン校" class="img-padd">
                        <p class="busi-ttl busi-ttl-before">モーラミャイン校</p>
                      </div>
                      <div class="jtc-btn-detail ">
                        <a href="<?php echo home_url() . '/school/mawlamyine/'; ?>">
                          <span>詳しく見る<i class="arrow right"></i> </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col2 col1-sp">
                  <div class="busi-rg">
                    <div class="busi-gp">
                      <div class="busi-cen mb60 mb45-sp">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/JTC-y.png" alt="マンダレー校" class="img-padd">
                        <p class="busi-ttl ">マンダレー校</p>
                      </div>
                      <div class="jtc-btn-detail ">
                        <a href="<?php echo home_url() . '/school/mandalay/'; ?>">
                          <span>詳しく見る<i class="arrow right"></i> </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="jtc-section">
        <div class="jtc-sec bg-w">
          <div class="new-div01 pb0">
            <hr class="main-tl-line">
            <p class="main-ttl fz-33">
              <span>人材紹介・送り出しについて</span>
            </p>
            <div class="sec-container1">
              <div class="jtc-content pt60 pb25 pt45-sp">
                <p class="fz-jp-m fz-18 fz-16-sp">
                  JTC日本語学校ではミャンマー送り出し機関や人材紹介会社と提携し、<br>
                  日本での就労を希望する学生の日本への渡航のサポート事業を行っております。
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="jct-btn-sec pt65 pb65 pt30-sp pb30-sp bg-main">
          <div class="jtc-btn jtc-btn1">
            <a href="#" class="btn bgskew bor-btn-blue">
              <span>企業の採用担当者さまへ</span>
            </a>
          </div>
          <div class="jtc-btn jtc-btn2 pb45 pt45 pb30-sp pt30-sp">
            <a href="#">
              <span>送り出し機関・監理団体の方へ</span>
            </a>
          </div>
          <div class="jtc-btn jtc-btn3">
            <a href="#">
              <span>人材紹介会社の方へ</span>
            </a>
          </div>
        </div> -->
      </section>
      <section class="news-sec bg-w">
        <span id="overview" class="anchorH"></span>
        <div class="new-div02">
          <hr class="main-tl-line">
          <p class="main-ttl fz-33">
            <span>関連会社</span>
          </p>
          <div class="sec-container1">
            <div class="company-list">
              <ul class="col-gp ali-center">
                <li class="col3 col1-sp mb30-sp">
                  <a href="https://qualy.co.jp/" target="_blank">
                    <div class="site-img">
                      <picture>
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site06.webp" type="image/webp" />
                          <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/site06.jpg" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site06.jpg" alt="クオリー株式会社" />
                        </picture>
                      </div>
                      <p class="site-ttl">
                        クオリー株式会社
                      </p>
                    </a>
                  </li>
                  <li class="col3 col1-sp mb30-sp">
                    <a href="https://qualymm.com/" target="_blank">
                      <div class="site-img">
                        <picture>
                          <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site07.webp" type="image/webp" />
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/site07.jpg" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site07.jpg" alt="Qualy Myanmar Co., Ltd." />
                          </picture>
                        </div>
                        <p class="site-ttl">Qualy Myanmar Co., Ltd.</p>
                      </a>
                    </li>
                    <li class="col3 col1-sp mb30-sp">
                      <a href="https://tagritmm.com/" target="_blank">
                        <div class="site-img">
                          <picture>
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site08.webp" type="image/webp" />
                              <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/site08.jpg" srcset="<?php bloginfo('template_directory'); ?>/assets/img/common/site08.jpg" alt="TAGRIT Co., Ltd." />
                            </picture>
                          </div>
                          <p class="site-ttl">TAGRIT Co., Ltd.</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>

          </main><!-- #main -->

          <div class="footer-b">
            <?php get_footer(); ?>
          </div>