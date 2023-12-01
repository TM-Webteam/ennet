<?php
$args = array(
  'taxonomy' => 'column_category',
);
$taxonomy = get_categories($args);
?>

<aside class="column-archive__sidebar sidebar">

  <div class="sidebar01__search" data-aos="fade-up">
    <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-form">
      <input type="text" name="s" size="25" class="search-form__text" placeholder="キーワードから検索する">
      <button class="search-form--btn"><img src="<?php echo assets_path() ?>img/common/icon-search-green.svg" alt="検索"></button>
      <input type="hidden" name="post_type" value="column">
    </form>
  </div>

  <div class="sidebar01__category">
    <p class="sidebar01__category-ttl ttl-secondary --large" data-aos="fade-up">
      カテゴリで探す
    </p>
    <ul class="sidebar__category-list" data-aos="fade-up">
      <?php if (is_singular('news')) :
        $args = array(
          'taxonomy' => 'news_category',
        );
        $taxonomy = get_categories($args);
      ?>
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
      <?php else : ?>
        <?php if ($taxonomy) : ?>
          <?php foreach ($taxonomy as $category) : ?>
            <li class="sidebar__category-cat">
              <a href="<?php echo get_category_link($category->term_id); ?>" class="cat --large --link"><?php echo $category->name; ?></a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>
    </ul>
  </div>
  <?php if (!is_singular('news')) : ?>
    <div class="sidebar__popular" data-aos="fade-up">
      <h2 class="sidebar__popular-ttl">
        <img src="<?php echo assets_path() ?>img/common/text-popular.svg" alt="人気コラムTOP5">
      </h2>
      <ul class="sidebar__popular-list">
        <?php
        if (is_singular('column')) {
          // views post metaで記事のPV情報を取得する
          setPostViews(get_the_ID());
        }

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
  <?php endif; ?>

  <div class="sticky">
    <div class="sidebar__btn01" data-aos="fade-up">
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn02 --large"><span>EV導入・運用に関する</span><br>ご相談・お問合せ</a>
    </div>

    <?php if (!empty($rec_wp)) : ?>
      <?php foreach ($rec_wp as $val) : ?>
        <div class="sidebar__document" data-aos="fade-up">
          <div class="sidebar__document-img">
            <?php echo get_the_post_thumbnail($val, 'medium') ?>
          </div>
          <div class="sidebar__document-btn">
            <a href="<?php echo get_permalink($val); ?>" class="btn01 --yellow --small">お役立ち資料をもらう</a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>

      <div class="sidebar__document" data-aos="fade-up">
        <div class="sidebar__document-img">
          <img src="<?php echo assets_path() ?>img/common/img-document01.png" alt="資料">
        </div>
        <div class="sidebar__document-btn">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/ev-shift_guidebook/" class="btn01 --yellow --small">お役立ち資料をもらう</a>
        </div>
      </div>
    <?php endif; ?>

    <div class="sidebar__btn02-area" data-aos="fade-up">
      <div class="fukidashi --lightblue">
        \ EV(電気自動車)の導入までの<span>流れなどをご紹介 /</span>
      </div>
      <div class="sidebar__btn02">
        <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/" class="btn01 --blue-line">おすすめのコンテンツを見る</a>
      </div>
    </div>
  </div>

</aside>