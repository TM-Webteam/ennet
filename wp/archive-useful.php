<?php
$args = array(
  'taxonomy' => 'useful_category',
);
$taxonomy = get_categories($args);
?>
<?php get_header(); ?>

<main class="useful__main">

  <!-- news-head -->
  <div class="useful__head useful-head page-head --blue">
    <div class="useful-head__containers containers--md">
      <div class="useful-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-document.png" alt="introduction">
        </div>
        <h1 class="ttl">お役立ち資料</h1>
      </div>
    </div>
  </div>

  <!-- useful-cat -->
  <div class="useful__cat useful-cat">
    <div class="containers--md">
      <h2 class="useful-cat__ttl ttl-secondary">
        カテゴリから探す
      </h2>
      <ul class="useful-cat__list js-tab-menu" data-aos="fade-up">
        <?php if ($taxonomy) : ?>
          <?php foreach ($taxonomy as $category) : ?>
            <li>
              <a href="<?php echo get_category_link($category->term_id); ?>" class="cat --large --tab js-tab"><?php echo $category->name; ?></a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
        <!-- <li class="cat --large --tab js-tab active">ホワイトペーパー</li>
        <li class="cat --large --tab js-tab">サービス資料</li> -->
      </ul>
    </div>
  </div>
  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'post_type' => 'useful',
    'posts_per_page' => 9,
    'paged' => $paged,
    'order' => 'DESC',
    'orderby' => 'post_date',
    // 'post__not_in' => $p_id,
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()) :
  ?>
    <div class="useful__body">
      <div class="containers--sm">
        <ul class="useful__list useful-list">
          <!-- loop start -->
          <?php
          while ($my_query->have_posts()) : $my_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'useful_category');
          ?>
            <li class="useful-list__item" data-aos="fade-up">
              <a href="<?php the_permalink(); ?>" class="useful-list__item-link card04">
                <div class="card04__img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="card04__body">
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat --large"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <h2 class="card04__ttl">
                    <?php the_title(); ?>
                  </h2>
                </div>
                <div class="card04__btn">
                  <span class="btn01 --yellow-b --small">詳細・ダウンロードはこちら</span>
                </div>
              </a>
            </li>
          <?php endwhile; ?>

          <!-- loop end -->
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>