<?php
/*
 Template Name: school
 */

get_header("top01");
?>

<main>
  <section class="mv-sec">
    <div class="common-mv-gp mlm-mv">
      <h1 class="common-mv-txt">学校概要・運営会社</h1>
    </div>
   <?php echo the_breadcrumb(); ?>
  </section>
  <section class="school-sec bg-w">
    <div class="new-block">
      <hr class="main-tl-line" />
      <p class="main-ttl fz-33">
        <span>学校概要・運営会社</span>
      </p>
      <div class="inner-container">
        <div class="school-block">
          <div class="school-block-img pb20-sp">
            <picture>
              <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/schools/school01.webp" type="image/webp" />
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/schools/school01.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/schools/school01.png" alt="社長">
            </picture>
          </div>
          <div class="school-block-txt">
            <p>JTC日本語学校が拠点を置くミャンマーはアジアの「ラストフロンティア」として諸外国から注目されておりました。将来に希望を抱く若者が多く、活気に溢れていました。</p>
            <p>
              しかし、新型コロナウイルスの感染拡大や国内の政治問題によりGDP成長率はマイナス成長となり、外資企業の撤退や国内企業の倒産により元々少なかった働き口が一層少なくなりました。大勢の方が働く機会を得られていないのが現状です。
            </p>
          </div>
        </div>
        <p>
          そういった現状から、日本での就労を希望している方々に、「より実践的な日本語教育を受ける場」と「日本で就労する機会」を作り、日本で経験を得た方々が将来はこの地でビジネスを興して、その問題が解決するようなサイクルを作りたく日々活動しております。ご賛同いただき、ミャンマーの方々に就業の機会をいただける提携先の会社様を募集しております。ご興味がありましたら、お気軽にお申し付けください。
        </p>
      </div>
    </div>
  </section>
  <section class="school-sec bg-w">
    <div class="new-block01">
      <hr class="main-tl-line" />
      <p class="main-ttl fz-33">
        <span>学校概要</span>
      </p>
      <div class="inner-container">
        <div class="about-table">
          <table>
            <tbody>
              <tr>
                <th>屋号</th>
                <td>Japan Training Center</td>
              </tr>
              <tr>
                <th>住所</th>
                <td>ヤンゴン事務所 <br>
                  No.(42), 5th Floor(R), 41st Street, (7) Quarter,<br>
                  Botahtaung T/S, Yangon.
                  <br><br>
                  モーラミャイン校<br>
                  No.727, Lower Main Rd, Maungngan Qt,<br>
                  Mawlamyine T/S, Mon State, Myanmar
                  <br><br>
                  マンダレー校 <br>
                  準備中（オンラインにて開校）
                </td>
              </tr>
              <tr>
                <th>代表</th>
                <td>竹之下一也, Aung Pyae</td>
              </tr>
              <tr>
                <th>設立</th>
                <td>2017年2月14日</td>
              </tr>
              <tr>
                <th>許可</th>
                <td>ミャンマー政府教育部門<br>
                  教育機関許可番号【181020329】</td>
              </tr>
              <tr>
                <th>従業員</th>
                <td>5人</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="school-sec bg-w">
    <span id="overview" class="anchorH"></span>
    <div class="new-block02">
      <hr class="main-tl-line">
      <p class="main-ttl fz-33">
        <span>学校のご紹介</span>
      </p>
      <div class="sec-container1">
        <div class="busi-list pt70">
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
  <section class="news-sec bg-w">
    <div class="new-block02">
      <hr class="main-tl-line" />
      <p class="main-ttl fz-33">
        <span>運営会社</span>
      </p>
      <div class="inner-container">
        <div class="school-block pt45">
          <div class="school-block-img pb20-sp">
            <picture>
              <source srcset="<?php bloginfo('template_directory'); ?>/assets/img/schools/qualy-logo.webp" type="image/webp" />
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/schools/qualy-logo.png" srcset="<?php bloginfo('template_directory'); ?>/assets/img/schools/qualy-logo.png" alt="Qualy Myanmar">
            </picture>

          </div>
          <div class="school-block-txt">
            <p>JTC日本語学校は埼玉県に本社を持つ日本企業「クオリー株式会社」のミャンマー子会社「Qualy Myanmar Co., Ltd.（クオリーミャンマー）」が運営しております。</p>
          </div>
        </div>
        <p class="pb30">
          クオリーミャンマー自体もITオフショア企業として53名のミャンマー人従業員を抱え、日本の企業のホームページ制作やアプリ開発の一部工程の対応などを行なっております。
        </p>
        <p>実際に自社のミャンマー人従業員に対し、日本の仕事の対応ができるように語学面（日本語やビジネスマナーの教育、日本の文化の浸透などを行なっており、その知見を基に学校を運営しています。</p>
      </div>
    </div>
  </section>
  <section class="news-sec bg-w">
    <span id="overview" class="anchorH"></span>
    <div class="new-block">
      <hr class="main-tl-line">
      <p class="main-ttl fz-33">
        <span>関連会社</span>
      </p>
      <div class="sec-container1">
        <div class="company-list">
          <ul class="col-gp ali-center">
            <li class="col3 col1-sp mb30-sp">
              <a href="" target="_blank">
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
              <a href="" target="_blank">
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
              <a href="" target="_blank">
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
</main>
<div class="footer-b">
  <?php get_footer(); ?>
</div>