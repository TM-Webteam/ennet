<?php
global $body_class;
$body_class = "top";
$args = array(
  'taxonomy' => 'news_category',
);
$news_taxonomy = get_terms($args, array('hide_empty' => false));
?>
<?php get_header(); ?>


<main class="top__main">
  <!-- メインビュー -->
  <div class="mv top__mv">
    <div class="mv__containers containers">
      <div class="mv__content">
        <div class="mv__body">
          <!-- ロゴ -->
          <h1 class="mv__logo" data-aos="fade-right" data-aos-duration="900" data-aos-delay="600">
            <img src="<?php echo assets_path() ?>img/common/logo.png" alt="EV Start Biz">
          </h1>
          <!-- リード -->
          <p class="mv__lead" data-aos="fade-right" data-aos-duration="900" data-aos-delay="1000">
            日本企業にとって<br class="sp-only">ベストなEVシフトを提案するメディア
          </p>
        </div>
        <!-- 画像 -->
        <div class="mv__img skew-img" data-aos="fade-left" data-aos-duration="900" data-aos-delay="1800">
          <div class="skew-img__front">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo assets_path() ?>img/top/img-mv-sp.png">
              <img src="<?php echo assets_path() ?>img/top/img-mv.png" alt="">
            </picture>
          </div>
          <img src="<?php echo assets_path() ?>img/top/img-mv.png" alt="" class="skew-img__back">
        </div>
      </div>
      <!-- 車 -->
      <div class="mv__car" data-aos="fade-in" data-aos-duration="2000">
        <img src="<?php echo assets_path() ?>img/top/img-car.png" alt="">
      </div>
    </div>
    <!-- 背景 -->
    <picture class="mv__bg" data-aos="fade-in" data-aos-duration="2000">
      <source media="(max-width: 768px)" srcset="<?php echo assets_path() ?>img/top/bg-mv-sp.png">
      <img src="<?php echo assets_path() ?>img/top/bg-mv.png" alt="">
    </picture>
  </div>

  <!-- 導入実績 -->
  <div class="result top__result">
    <div class="containers result__containers">
      <div class="result__wrapper" data-aos="fade-up">
        <div class="result__head">
          <p class="result__ttl">NTTグループ <br class="sp-only">EV充電制御 導入実績<br class="sp-only">
            <span class="result__note">※2023年10月末時点</span>
          </p>
        </div>
        <div class="result__content flex jcC">
          <div class="result__item">
            <p class="result__sub-ttl">導入施設数</p>
            <div class="result__num js-count"><span class="large js-num" data-num="180">0</span>ヵ所</div>
            <div class="result__img">
              <img src="<?php echo assets_path() ?>img/common/img-result01.png" alt="">
            </div>
          </div>
          <div class="result__item">
            <p class="result__sub-ttl">導入台数</p>
            <p class="result__num js-count"><span class="large js-num" data-num="640">0</span>台</p>
            <div class="result__img">
              <img src="<?php echo assets_path() ?>img/common/img-result02.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about -->
  <section class="top-about top__about">
    <div class="containers">
      <div class="top-about__wrapper flex nowrap">
        <div class="top-about__img skew-img02" data-aos="fade-right">
          <img src="<?php echo assets_path() ?>img/top/img-about.png" alt="" class="skew-img02__front">
          <img src="<?php echo assets_path() ?>img/top/img-about.png" alt="" class="skew-img02__back">
        </div>
        <div class="top-about__body">
          <h2 class="top-about__ttl ttl-primary--img">
            <img src="<?php echo assets_path() ?>/img/common/ttl-about.png" alt="about ev start biz">
          </h2>
          <p class="top-about__text">
            『EV Start Biz』とは、NTTグループのEVシフトへの取り組みをご紹介するとともに、企業のEVシフトをサポートする情報をお届けするサイトです。
          </p>
          <div class="top-about__btn">
            <a href="<?php echo esc_url(home_url('/')); ?>about/" class="btn01 --large">さらに見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- column -->
  <section class="top__column common-column ">
    <div class="containers--sm">
      <div class="common-column__wrapper flex">
        <div class="common-column__content01">
          <div class="common-column__ttl ttl-primary">
            <div class="img">
              <img src="<?php echo assets_path() ?>img/common/ttl-column.png" alt="column">
            </div>
            <h2 class="ttl">お役立ちコラム</h2>
          </div>
          <div class="common-column__form">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-form">
              <input type="text" name="s" size="25" class="search-form__text" placeholder="キーワードから検索する">
              <button class="search-form--btn"><img src="<?php echo assets_path() ?>img/common/icon-search-green.svg" alt="検索"></button>
              <input type="hidden" name="post_type" value="column">
            </form>
          </div>
          <?php
          $args = array(
            'taxonomy' => 'column_category',
          );
          $taxonomy = get_categories($args);
          ?>
          <ul class="common-column__categories">
            <!-- loop start -->
            <?php if ($taxonomy) : ?>
              <?php foreach ($taxonomy as $category) : ?>
                <li class="common-column__cat">
                  <a href="<?php echo get_category_link($category->term_id); ?>" class="cat --large --link"><?php echo $category->name; ?></a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
            <!-- loop end -->
          </ul>
        </div>

        <div class="common-column__content02">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'column',
            'posts_per_page' => 5,
            'order' => 'DESC',
            'orderby' => 'post_date',
            // 'post__not_in' => $p_id,
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) :
          ?>
            <ul class="common-column__list">
              <?php
              while ($my_query->have_posts()) : $my_query->the_post();
                $post_id = get_the_ID();
                $lead = get_post_meta($post_id, "lead", true);
                $post_terms = get_the_terms($post_id, 'column_category');
              ?>
                <li class="common-column__item" data-aos="fade-up">
                  <a href="<?php the_permalink(); ?>" class="card01">
                    <div class="card01__img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card01__body">
                      <div class="card01__wrapper">
                        <div class="card01__categories">
                          <?php if ($post_terms) : ?>
                            <?php foreach ($post_terms as $post_term) : ?>
                              <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                        <h3 class="card01__ttl"><?php the_title(); ?></h3>
                      </div>
                      <time class="card01__meta" datetime="<?php the_date(); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <div class="common-column__btn">
            <a href="<?php echo esc_url(home_url('/')); ?>column/" class="btn01 --large">コラム一覧へ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- recommend -->
  <section class="top-recommend top__recommend">
    <div class="containers--sm">
      <div class="top-column__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-recommend.png" alt="recommend">
        </div>
        <h2 class="ttl">EV導入を考え始めた方向け<br class="sp-only">おすすめコンテンツ</h2>
      </div>
      <ul class="top-recommend__list">
        <li class="top-recommend__item" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/" class="card02">
            <div class="card02__img">
              <img src="<?php echo assets_path() ?>img/top/img-recommend01.jpg" alt="">
            </div>
            <div class="card2__body">
              <div class="card2__ttl">EV車導入を<br class="sp-only">お考えの企業さまへ</div>
              <div class="card2__btn">
                <p class="btn01">おすすめコンテンツを見る</p>
              </div>
            </div>
          </a>
        </li>
        <li class="top-recommend__item" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/" class="card02">
            <div class="card02__img">
              <img src="<?php echo assets_path() ?>img/top/img-recommend02.jpg" alt="">
            </div>
            <div class="card2__body">
              <div class="card2__ttl">スマート充電サービス <br class="sp-only">EnneEV®</div>
              <div class="card2__btn">
                <p class="btn01">サービスについて知る</p>
              </div>
            </div>
          </a>
        </li>
        <li class="top-recommend__item" data-aos="fade-up">
          <a href="<?php echo esc_url(home_url('/')); ?>qa/" class="card02">
            <div class="card02__img">
              <img src="<?php echo assets_path() ?>img/top/img-recommend03.jpg" alt="">
            </div>
            <div class="card2__body">
              <div class="card2__ttl">「よくあるギモン」</div>
              <div class="card2__btn">
                <p class="btn01">Q&Aを見る</p>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'useful',
    'posts_per_page' => 2,
    'order' => 'DESC',
    'orderby' => 'post_date',
    // 'post__not_in' => $p_id,
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>

    <!-- document -->
    <section class="top__document common-document" id="introduction-document">
      <div class="common-document__container containers">
        <div class="common-document__wrapper">
          <div class="common-document__ttl ttl-primary --center --white --document">
            <div class="img">
              <img src="<?php echo assets_path() ?>img/common/ttl-document-white.png" alt="document">
            </div>
            <h2 class="ttl">お役立ち資料</h2>
          </div>
          <div class="common-document__content">
            <?php
            while ($my_query->have_posts()) : $my_query->the_post();
              $post_id = get_the_ID();
              $lead = get_post_meta($post_id, "lead", true);
              $post_terms = get_the_terms($post_id, 'column_category');
            ?>
              <div class="common-document__item" data-aos="fade-up">
                <div class="img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="body">
                  <div class="wrapper">
                    <div class="ttl">
                      <?php the_title(); ?>
                    </div>
                    <div class="text">
                      <?php echo wp_trim_words(wp_kses(CFS()->get('lead'), $allowed_html), 40, '…'); ?>
                    </div>
                  </div>
                  <div class="btn">
                    <a href="<?php the_permalink(); ?>" class="btn btn01 --yellow">詳細・ダウンロードはこちら</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="common-document__btn">
            <a href="<?php echo esc_url(home_url('/')); ?>useful/" class="btn01 --large">資料一覧へ</a>
          </div>
        </div>
      </div>
    </section>

  <?php endif; ?>



  <!-- news -->
  <section class="top-news top__news">
    <div class="containers--sm">
      <div class="top-news__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-news.png" alt="news">
        </div>
        <h2 class="ttl">ニュース・最新情報</h2>
      </div>

      <div class="top-news__tab news-tab" data-aos="fade-up">
        <ul class="news-tab__list js-tab-menu">
          <li class="news-tab__menu js-tab">すべて</li>
          <?php if ($news_taxonomy) : ?>
            <?php foreach ($news_taxonomy as $category) : ?>
              <a href="<?php echo get_category_link($category->term_id); ?>">
                <li class="news-tab__menu js-tab"><?php echo $category->name; ?></li>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/')); ?>news/category/column/">
            <li class="news-tab__menu js-tab">コラム</li>
          </a>
        </ul>
      </div>

      <div class="top-news__content news-list">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => array('news', 'column'),
          'posts_per_page' => 5,
          'order' => 'DESC',
          'orderby' => 'post_date',
          // 'post__not_in' => $p_id,
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        ?>
          <ul class="top-news__list news-list__items" data-aos="fade-up">
            <!-- loop start -->
            <?php
            while ($my_query->have_posts()) : $my_query->the_post();
              $post_id = get_the_ID();
              $post_type = get_post_type($post_id);
              $lead = get_post_meta($post_id, "lead", true);
              $post_terms = get_the_terms($post_id, 'news_category');

              $term_idsp = "news_category_" . $term_id;
            ?>
              <li class="news-list__item">
                <a href="<?php the_permalink(); ?>" class="news-list__link">
                  <div class="news-list__item-meta">
                    <time class="news-list__item-time" datetime="<?php the_date(); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php if ($post_terms) : ?>
                      <?php foreach ($post_terms as $post_term) :
                        $term_idsp = "news_category_" . $post_term->term_id;
                        $bg_color = get_field('bg_color', $term_idsp);
                        $style = "";
                        if (!empty($bg_color)) {
                          $style = 'style="background-color:' . $bg_color . ';"';
                        }
                      ?>
                        <span class="news-list__item-cat cat --small --blue" <?php echo $style; ?>><?php echo esc_html($post_term->name); ?></span>
                      <?php break;
                      endforeach; ?>
                    <?php endif; ?>
                    <?php if ($post_type == "column") : ?>
                      <span class="news-list__item-cat cat --small --blue" style="background-color:#7acc88;">コラム</span>
                    <?php endif; ?>
                  </div>
                  <div class="news-list__item-body">
                    <h2 class="news-list__item-ttl"><?php the_title(); ?></h2>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>

            <!-- loop end -->
          </ul>
        <?php endif; ?>
        <div class="news-list__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>news/" class="btn01  --large">ニュース一覧へ</a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>