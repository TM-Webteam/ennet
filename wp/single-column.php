<?php
global $rec_wp;
$post_id = $post->ID;
$post_terms = get_the_terms($post_id, 'column_category');
$taxonomy_tag = get_the_terms($post_id, "column_tag");
$rec_wp = CFS()->get('rec_wp');
$supervisor = CFS()->get('supervisor');
?>
<?php get_header(); ?>

<main class="column-single__main sidesize">
  <div class="column-single__containers containers--md">
    <div class="column-single__wrapper">
      <div class="column-single__body">
        <div class="column-single__entry column-entry">
          <div class="column-entry__head">
            <div class="column-entry__head-wrapper">
              <div class="column-entry__head-body">
                <h1 class="column-entry__head-ttl"><?php the_title(); ?></h1>
                <div class="column-entry__head-meta">
                  <time class="column-entry__head-time"><?php echo get_the_date('Y.m.d'); ?></time>
                  <div class="column-entry__categories">
                    <?php if ($post_terms) : ?>
                      <?php foreach ($post_terms as $post_term) :
                        $relation[] = $post_term->term_id;
                      ?>
                        <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="column-entry__head-img">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
            <div class="column-entry__head-lead">
              <?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?>
            </div>
          </div>

          <?php $paragraph_arr = CFS()->get('paragraph'); ?>
          <!-- 目次 -->
          <?php if (!empty($paragraph_arr)) :
            $i = 0;
          ?>
            <div id="toc_container" class="column-entry__table-contents">
              <p class="toc_title">目次</p>
              <ul class="toc_list">
                <?php foreach ($paragraph_arr as $paragraph) :
                  $i++;
                  $i2 = 0;
                ?>
                  <li><a href="#toc<?php echo $i ?>"><?php echo esc_html(strip_tags($paragraph['title'])) ?></a>
                    <?php if (!empty($paragraph['caption'])) : ?>
                      <ul>
                        <?php foreach ((array)$paragraph['caption'] as $caption) :
                          $i2++;
                        ?>
                          <li><a href="#toc<?php echo $i ?>-<?php echo $i2 ?>"><?php echo esc_html(strip_tags($caption['caption_title'])) ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php if (!empty($paragraph_arr)) :
            $i = 0;
          ?>
            <!-- entry-body -->
            <div class="column-entry__body entry-body">
              <?php foreach ($paragraph_arr as $paragraph) :
                $i++;
                $i2 = 0;
              ?>
                <h2 id="toc<?php echo $i; ?>">
                  <?php echo esc_html($paragraph['title']) ?>
                </h2>
                <?php echo wp_kses($paragraph['comment'], $allowed_html) ?>
                <?php if (!empty($paragraph['caption'])) : ?>
                  <?php foreach ((array)$paragraph['caption'] as $caption) :
                    $i2++;
                  ?>
                    <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>">
                      <?php echo esc_html($caption['caption_title']) ?>
                    </h3>
                    <?php echo wp_kses($caption['caption_comment'], $allowed_html) ?>
                  <?php endforeach; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($rec_wp)) : ?>
            <!-- entry-document -->
            <?php foreach ($rec_wp as $val) : ?>
              <div class="column-single__document entry-document" data-aos="fade-up">
                <div class="entry-document__img">
                  <?php echo get_the_post_thumbnail($val, 'medium') ?>
                </div>
                <div class="entry-document__body">
                  <p class="entry-document__ttl">
                    <?php echo esc_html(get_post($val)->post_title); ?>
                  </p>
                  <div class="entry-document__text">
                    <?php echo wp_kses(get_post_meta($val, 'lead', true), $allowed_html) ?>
                  </div>
                  <div class="entry-document__btn">
                    <a href="<?php echo get_permalink($val); ?>" class="btn01 --yellow --small">ダウンロードページへ</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>



          <!-- entry-author -->
          <?php if (!empty($supervisor)) : ?>
            <?php foreach ($supervisor as $val) :
              $occupation = wp_kses(get_post_meta($val, 'occupation', true), $allowed_html);
              $company_division = wp_kses(get_post_meta($val, 'company_division', true), $allowed_html);
            ?>
              <div class="column-single__author entry-author" data-aos="fade-up">
                <figure class="entry-author__img">
                  <?php echo get_the_post_thumbnail($val, 'medium') ?>
                  <figcaption>この記事の監修者</figcaption>
                </figure>
                <div class="entry-author__body">
                  <?php if (!empty($occupation)) : ?>
                    <p class="entry-author__occupation"><?php echo $occupation; ?></p>
                  <?php endif; ?>
                  <p class="entry-author__author"><?php echo esc_html(get_post($val)->post_title); ?></p>
                  <?php if (!empty($company_division)) : ?>
                    <p class="entry-author__division"><?php echo $company_division; ?></p>
                  <?php endif; ?>
                  <p class="entry-author__detail">
                    <?php echo wp_kses(get_post_meta($val, 'profile', true), $allowed_html) ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>


          <!-- entry-editor -->
          <!-- <div class="column-single__editor entry-editor" data-aos="fade-up">
            <div class="entry-editor__content">
              <div class="entry-editor__logo">
                <img src="<?php echo assets_path() ?>img/common/logo.png" alt="EV Start Biz">
              </div>
              <p class="text">編集部</p>
            </div>
            <div class="entry-editor__body">
              <p class="entry-editor__ttl">『EV Start Biz』編集部</p>
              <p class="entry-editor__text">環境対策のトレンドをはじめ、EVの基礎知識やEVシフトのノウハウに関するお役立ち情報をお届けいたします。
              </p>
            </div>
          </div> -->

        </div>

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 3,
          'post_type' => 'column',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          // 'post__not_in' => array($post->ID),
          'post_status' => 'publish',
          'tax_query'  => array(
            'relation'  => 'AND',
            array(
              'taxonomy' => 'column_category',
              'field' => 'term_id',
              'terms' => $relation,
              'operator' => 'IN',
            ),
          ),
        );
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
        ?>
          <!-- entry-relation -->
          <div class="column-single__relation entry-relation" data-aos="fade-up">
            <h2 class="entry-relation__ttl">この記事に関連する<span>コラムをご紹介</span></h2>
            <ul class="entry-relation__list">
              <?php
              while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                <li class="entry-relation__item">
                  <a href="<?php the_permalink(); ?>" class="entry-relation__link">
                    <div class="entry-relation__item-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <p class="entry-relation__item-ttl">
                      <?php the_title(); ?>
                    </p>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php if ($taxonomy_tag) : ?>
          <!-- entry-keyword -->
          <div class="column-single__keyword entry-keyword" data-aos="fade-up">
            <h2 class="entry-keyword__ttl">関連キーワードから探す</h2>
            <ul class="entry-keyword__list">

              <!-- loop start -->
              <?php foreach ($taxonomy_tag as $category) : ?>
                <li class="entry-keyword__item"><a href="<?php echo esc_url(get_term_link($category->slug, "column_tag")); ?>"><?php echo esc_html($category->name); ?></a></li>
              <?php endforeach; ?>
              <!-- loop end -->
            </ul>
          </div>
        <?php endif; ?>
      </div>

      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- <aside class="column-single__sidebar sidebar --col2">
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
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) :
                    ?>
                      <li class="sidebar__category-cat">
                        <a href="<?php echo esc_url(get_category_link($post_term->term_id)); ?>" class="cat --large --link"><?php echo esc_html($post_term->name); ?></a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>

              
              <div class="sidebar__popular" data-aos="fade-up">
                <h2 class="sidebar__popular-ttl">
                  <img src="<?php echo assets_path() ?>img/common/text-popular.svg" alt="人気コラムTOP5">
                </h2>
                <ul class="sidebar__popular-list">
                  <?php
                  
                  setPostViews(get_the_ID());


                  $args = array(
                    'post_type' => 'column',
                    'post_status' => 'publish',
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => 5
                  );

                  
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
            </div>

            
            <div class="sidebar__wrapper02">
              <div class="sidebar__btn01" data-aos="fade-up">
                <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn02 --large">
                  <span class="small">EV導入・運用に関する</span><br>
                  ご相談<br class="pc-only"><span class="dot">・</span>お問合せ
                </a>
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
              <?php endif; ?>
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