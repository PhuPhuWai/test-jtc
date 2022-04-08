<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jtc
 */

get_header("top01");

$title = get_field('video-title');
$video= get_field('video-num');

?>

<section class="mv-sec">
  <div class="common-mv-gp">
    <div class="youtube-mv-bg">
      <h1 class="common-mv-txt">Youtube一覧</h1>
  </div>
</div>
<?php echo the_breadcrumb(); ?>
</section>
<section class="news-sec bg-w">
  <div class="new-block pt75 pb80 pt70-sp pb80-sp">
    <div class="sec-container">
        <div class="mw-w800 pb80 pb50-sp">
            <p class="jtc-txt">コロナ渦でオンラインでの学習者が増えたこともありYouTubeチャンネルを開設しました。<br>ミャンマー人向けの日本語の授業動画や日本の文化紹介はもちろん、ミャンマーで会社を経営する社長の語り場やミャンマー在住日本語教師の雑談、オンライン観光動画、ミャンマー料理動画やミャンマー語クイズなど楽しみながら「日本 / ミャンマー」両国の文化や言語を学べる動画を作成しています。</p>
        </div>
        <div class="new-blk">
            <ul class="col-gp cFix">
              <?php if (have_posts()) : while (have_posts()) : the_post();
                $ytvno = get_field('youtubevideonum');
                ?>
                <li class="col3 col1-sp mb75 mb40-sp">
                  <div class="new-bl">
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/<?php echo $ytvno; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="new-tlt">
                    <a href="https://www.youtube.com/watch?v=<?php echo $ytvno; ?>" target="_blank"><?php the_field('videotitle'); ?></a>
                </p>
            </li>
        <?php  endwhile;endif;wp_reset_postdata();?>
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