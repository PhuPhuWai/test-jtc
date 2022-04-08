<?php
/*
 Template Name: news
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
<section class="news-sec bg-w">
  <div class="new-block pt75 pb80 pt70-sp pb0-sp">
    <div class="sec-container">
      <div class="mw-w800 pb80 pb50-sp">
        <p class="jtc-txt">本ページでは日本の企業の採用担当者さま、送り出し機関・監理団体の方、人材紹介会社の方へ、JTC日本語学校の活動を応援してくださっている方向けのお知らせを掲載しています。</p>
      </div>
      <div class="new-blk pb80-sp">
        <ul class="col-gp cFix">
          <?php query_posts('posts_per_page=12&paged='.$paged); ?>
          <?php if (have_posts()) : ?>
            <?php while ( have_posts() ): the_post(); ?>
              <li class="col3 col1-sp mb75 mb40-sp">
                <a href="<?php the_permalink(); ?>">
                  <div class="new-bl">
                    <?php the_post_thumbnail( 'thumbnail,' ); ?>
                  </div>
                  <p class="new-tlt">
                    <?php echo wp_trim_words( get_the_title(), 30,"..." );?>  
                  </p>
                  <div class="date-gp ali-center">
                    <p class="date-txt"><?php the_time('Y.m.d'); ?></p>
                    <p class="cat-txt">
                      <?php
                      $categories = get_the_category();

                      foreach($categories as $category){
                        echo $category->name;
                      }
                      ?>
                    </p>
                  </div>
                </a>
              </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          
          <div class="pagination">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="footer-b">
    <?php get_footer(); ?>
  </div>