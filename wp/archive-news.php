<?php
$args = array(
  'taxonomy' => 'news_category',
);
$taxonomy = get_categories($args);
?>
<?php get_header(); ?>

<main class="news__main">

  <!-- news-head -->
  <div class="news__head news-head page-head">
    <div class="news-head__containers containers--md">
      <div class="news-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-news.png" alt="introduction">
        </div>
        <h1 class="ttl">ニュース・最新情報</h1>
        <p class="lead">
          『EV Start Biz』のニュースや<span>EVの導入・運用に関する最新情報を</span><span>お届けいたします。</span><br>
        </p>
      </div>
    </div>
  </div>

  <!-- news -->
  <div class="news__body">
    <div class="containers--sm">
      <div class="news__tab news-tab" data-aos="fade-up">
        <ul class="news-tab__list js-tab-menu">
          <!-- <a href="/news/"> -->
          <li class="news-tab__menu js-tab current active">すべて</li>
          <!-- </a> -->
          <?php if ($taxonomy) : ?>
            <?php foreach ($taxonomy as $category) : ?>
              <a href="<?php echo get_category_link($category->term_id); ?>">
                <li class="news-tab__menu js-tab"><?php echo $category->name; ?></li>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>

      <div class="news__list news-list">
        <ul class="news-list__items" data-aos="fade-up">
          <!-- loop start -->
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 10,
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'post_date',
            // 'post__not_in' => $p_id,
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) :
          ?>
            <?php
            while ($my_query->have_posts()) : $my_query->the_post();
              $post_id = get_the_ID();
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
                  </div>
                  <div class="news-list__item-body">
                    <h2 class="news-list__item-ttl"><?php the_title(); ?></h2>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- loop end -->
        </ul>
      </div>

      <!-- pagination -->
      <div class="news-list__pagination pagination">
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
  </div>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>