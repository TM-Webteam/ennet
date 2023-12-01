<?php
$key = esc_html($s); // 検索文字列をエスケープ
if (empty($key)) {
  header("Location:/");
  exit;
}
$args = array(
  'post_type' => get_query_var('post_type', 'column'),
  'posts_per_page' => 5, //表示数
  'paged' => get_query_var('paged', 1), //ページングする場合には記載
  'order' => 'DESC', //降順
  'orderby' => 'date', //日付でソート
  's' => get_search_query() //name=”s”のです
);
$my_query = new WP_Query($args);
$args = array(
  'taxonomy' => 'column_category',
);
$taxonomy = get_categories($args);
?>
<?php get_header(); ?>

<main class="column__main">

  <!-- column-head -->
  <div class="column__head column-head page-head --green">
    <div class="useful-head__containers containers--md">
      <div class="column-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-column.png" alt="introduction">
        </div>
        <p class="ttl">お役立ちコラム</p>
        <p class="lead" data-aos="fade-up">
          環境対策のトレンドをはじめ、<br class="sp-only">EVの基礎知識やEVシフトの<br class="pc-only">ノウハウに関する<br class="sp-only">お役立ち情報をお届けいたします。
        </p>
      </div>
    </div>
  </div>

  <!-- column-archive -->
  <div class="column__archive column-archive --taxonomy">
    <div class="column-archive__containers containers--sm">
      <div class="column-archive__wrapper">
        <div class="column-archive__content">
          <h1 class="column-archive__ttl" data-aos="fade-up">
            「<span><?php echo $key; ?></span>」で検索した結果：<?php echo $my_query->found_posts; ?> 件
          </h1>
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          if ($my_query->have_posts()) :
          ?>
            <ul class="column-archive__list">
              <!-- loop start -->
              <?php
              while ($my_query->have_posts()) : $my_query->the_post();
                $post_id = get_the_ID();
                $lead = get_post_meta($post_id, "lead", true);
                $post_terms = get_the_terms($post_id, 'column_category');
              ?>
                <li class="column-archive__item" data-aos="fade-up">
                  <a href="<?php the_permalink(); ?>" class="card05">
                    <div class="card05__img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card05__body">
                      <div class="card05__meta">
                        <time class="card05__time" datetime="<?php the_date(); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <div class="card05__categories">
                          <?php if ($post_terms) : ?>
                            <?php foreach ($post_terms as $post_term) : ?>
                              <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                      <h2 class="card05__ttl"><?php the_title(); ?></h2>
                      <h3 class="card05__text">
                        <?php echo wp_trim_words(wp_kses(CFS()->get('lead'), $allowed_html), 40, '…'); ?>
                      </h3>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>



              <!-- loop end -->
            </ul>
          <?php endif; ?>
          <!-- pagination -->
          <div class="column-archive__pagination pagination" data-aos="fade-up">
            <?php
            $GLOBALS['wp_query']->max_num_pages = $my_query->max_num_pages;
            the_posts_pagination(array(
              'mid_size' => 1,
              'prev_text' => '<span></span>',
              'next_text' => '<span></span>'
            ));
            wp_reset_postdata();
            ?>
          </div>
        </div>

        <!-- sidebar -->
        <aside class="column-archive__sidebar sidebar --taxonomy">
          <div class="sidebar01__search" data-aos="fade-up">
            <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-form">
              <input type="text" name="s" size="25" class="search-form__text" placeholder="キーワードから検索する">
              <button class="search-form--btn"><img src="<?php echo assets_path() ?>img/common/icon-search-green.svg" alt="検索"></button>
              <input type="hidden" name="post_type" value="column">
            </form>
          </div>
          <div class="sidebar__body">
            <div class="sidebar__wrapper01">
              <div class="sidebar01__category">
                <p class="sidebar01__category-ttl ttl-secondary --large" data-aos="fade-up">
                  カテゴリで探す
                </p>
                <ul class="sidebar__category-list" data-aos="fade-up">
                  <?php if ($taxonomy) : ?>
                    <?php foreach ($taxonomy as $post_term) :
                    ?>
                      <li class="sidebar__category-cat">
                        <a href="<?php echo esc_url(get_category_link($post_term->term_id)); ?>" class="cat --large --link"><?php echo esc_html($post_term->name); ?></a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>

                </ul>
              </div>

              <!-- 人気コラム -->
              <div class="sidebar__popular" data-aos="fade-up">
                <p class="sidebar__popular-ttl">
                  <img src="<?php echo assets_path() ?>img/common/text-popular.svg" alt="人気コラムTOP5">
                </p>
                <ul class="sidebar__popular-list">
                  <?php


                  $args = array(
                    'post_type' => 'column',
                    'post_status' => 'publish',
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => 5 // ← 5件取得
                  );

                  // WP_Queryによるループ
                  $query = new WP_Query($args);
                  if ($query->have_posts()) :
                    while ($query->have_posts()) :
                      $query->the_post();
                  ?>
                      <li class="sidebar__popular-item">
                        <a href="<?php the_permalink(); ?>" class="sidebar__popular-link">
                          <div class="img">
                            <?php the_post_thumbnail(); ?>
                          </div>
                          <h3 class="ttl">
                            <?php the_title(); ?>
                          </h3>
                        </a>
                      </li>

                  <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
                </ul>
              </div>

              <div class="sidebar__btn01" data-aos="fade-up">
                <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn02 --large">
                  <span>EV導入・運用に関する</span><br>
                  ご相談・お問合せ
                </a>
              </div>

              <div class="sidebar__document" data-aos="fade-up">
                <div class="sidebar__document-img">
                  <img src="<?php echo assets_path() ?>img/common/img-document01.png" alt="資料">
                </div>
                <div class="sidebar__document-btn">
                  <a href="#" class="btn01 --yellow --small">お役立ち資料をもらう</a>
                </div>
              </div>

              <div class="sidebar__btn02-area" data-aos="fade-up">
                <div class="fukidashi --lightblue">
                  \ EV(電気自動車)の導入までの流れなどをご紹介 /
                </div>
                <div class="sidebar__btn02">
                  <a href="" class="btn01 --blue-line">おすすめのコンテンツを見る</a>
                </div>
              </div>

            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>