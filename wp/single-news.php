<?php
$args = array(
  'taxonomy' => 'news_category',
);
$taxonomy = get_categories($args);
$post_id = $post->ID;
$post_terms = get_the_terms($post_id, 'news_category');
$right_material = CFS()->get('right_material');
?>
<?php get_header(); ?>

<main class="news-single__main sidesize">
  <div class="news-single__containers containers--md">
    <div class="news-single__wrapper">
      <div class="news-single__body">
        <div class="news-single__entry news-entry">
          <div class="news-entry__head">
            <h1 class="news-entry__head-ttl"><?php the_title(); ?></h1>
            <div class="news-entry__head-meta">
              <time class="news-entry__head-time"><?php echo get_the_date('Y.m.d'); ?></time>
              <div class="news-entry__categories">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) :
                    $relation[] = $post_term->term_id;
                    $term_idsp = "news_category_" . $post_term->term_id;
                    $bg_color = get_field('bg_color', $term_idsp);
                    $style = "";
                    if (!empty($bg_color)) {
                      $style = 'style="background-color:' . $bg_color . ';"';
                    }
                  ?>
                    <span class="cat" <?php echo $style; ?>><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>

              </div>
            </div>
            <p class="news-entry__head-lead">
              <?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>
            </p>
          </div>
          <div class="news-entry__body entry-body">
            <?php echo wp_kses(CFS()->get('comment'), $allowed_html); ?>
          </div>
        </div>
      </div>

      <!-- sideber -->
      <?php get_sidebar(); ?>
      <!-- <aside class="news-single__sidebar sidebar --col2">
        <div class="sidebar__content">
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
                <h2 class="sidebar01__category-ttl ttl-secondary --large" data-aos="fade-up">
                  カテゴリで探す
                </h2>
                <ul class="sidebar__category-list" data-aos="fade-up">
                  <li class="sidebar__category-cat">
                    <a href="/news/" class="cat --large --link --black">すべて</a>
                  </li>
                  <?php if ($taxonomy) : ?>
                    <?php foreach ($taxonomy as $category) :
                      $term_idsp = "news_category_" . $category->term_id;
                      $bg_color = get_field('bg_color', $term_idsp);
                      $style = "";
                      if (!empty($bg_color)) {
                        $style = 'style="background-color:' . $bg_color . ';"';
                      }
                    ?>
                      <li class="sidebar01__category-cat">
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="cat --large --link --blue" <?php echo $style; ?>><?php echo $category->name; ?></a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  
                </ul>
              </div>
            </div>
            <div class="sidebar__wrapper02">
              <div class="sidebar__btn01" data-aos="fade-up">
                <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn02 --large">
                  <span class="small">EV導入・運用に関する</span><br>
                  ご相談<br class="pc-only"><span class="dot">・</span>お問合せ
                </a>
              </div>
              
              <div class="sidebar__document" data-aos="fade-up">
                <div class="sidebar__document-img">
                  <img src="<?php echo assets_path() ?>img/common/img-document01.png" alt="資料">
                </div>
                <div class="sidebar__document-btn">
                  <a href="<?php echo esc_url(home_url('/')); ?>useful/ev-shift_guidebook/" class="btn01 --yellow --small">お役立ち資料をもらう</a>
                </div>
              </div>
              
              <div class="sidebar__btn02-area" data-aos="fade-up">
                <div class="fukidashi --lightblue">
                  EV(電気自動車)の<br class="pc-only">導入までの流れなどを<br class="pc-only">ご紹介
                </div>
                <div class="sidebar__btn02">
                  <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/" class="btn01 --blue-line">おすすめの<br class="pc-only">コンテンツを見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside> -->
    </div>
  </div>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>