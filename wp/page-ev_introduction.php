<?php get_header(); ?>

<main class="introduction__main">

  <!--introduction__head -->
  <div class="introduction__head introduction-head">
    <div class="introduction-head__containers containers--md">
      <div class="introduction-head__content flex nowrap">
        <div class="introduction-head__body">
          <div class="introduction-head__ttl ttl-primary">
            <div class="img">
              <img src="<?php echo assets_path() ?>img/common/ttl-introduction.png" alt="introduction">
            </div>
            <h1 class="ttl">EV導入をお考えの企業さまへ</h1>
          </div>
          <div class="introduction-head__lead">
            EV導入までの流れや、導入検討中の<span>企業さまへおすすめの</span><br>
            コンテンツについてご紹介します。
          </div>
        </div>
        <div class="introduction-head__img-area flex nowrap" data-aos="fade-in" data-aos-duration="2000">
          <div class="img1">
            <img src="<?php echo assets_path() ?>img/ev_introduction/img-introduction01.jpg" alt="">
          </div>
          <div class="img2">
            <img src="<?php echo assets_path() ?>img/ev_introduction/img-introduction02.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ページ内リンク -->
  <div class="introduction__page-link page-link">
    <div class="containers--md">
      <ul class="page-link__list --col3">
        <li class="page-link__item" data-aos="fade-up">
          <a href="#introduction-flow">導入までの流れ</a>
        </li>
        <li class="page-link__item" data-aos="fade-up">
          <a href="#introduction-document">おすすめ資料</a>
        </li>
        <li class="page-link__item" data-aos="fade-up">
          <a href="#introduction-column">おすすめコラム</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- introduction-flow -->
  <div class="introduction__flow introduction-flow" id="introduction-flow">
    <div class="introduction-flow__containers containers--md">
      <div class="introduction-flow__head">
        <h2 class="introduction-flow__ttl ttl-secondary" data-aos="fade-up">
          EV導入までの流れ
        </h2>
        <p class="introduction-flow__text text" data-aos="fade-up">
          NTTグループの新電力会社、株式会社エネットによるEVスマート充電サービス「EnneEV (エネーブ)」のご案内になります。
        </p>
      </div>
      <div class="introduction-flow__content flow01">
        <div class="flow01__wrapper flex">
          <div class="flow01__flow-line" data-aos="fade-up">
            <div class="circle1">
              <img src="<?php echo assets_path() ?>img/common/icon-circle-blue.svg" alt="">
            </div>
            <p class="period">約3ヶ月</p>
            <div class="circle2">
              <img src="<?php echo assets_path() ?>img/common/icon-circle-yellow.svg" alt="">
            </div>
          </div>
          <div class="flow01__content1">
            <div class="flow01__wrapper01 flex">
              <div class="flow01__flow-line flow01__flow-line--02" data-aos="fade-up">
                <div class="circle1">
                  <img src="<?php echo assets_path() ?>img/common/icon-circle-blue.svg" alt="">
                </div>
                <p class="period">約1ヵ月<br class="sp-only">～<br class="sp-only">1ヶ月半</p>
                <div class="circle2">
                  <img src="<?php echo assets_path() ?>img/common/icon-circle-blue.svg" alt="">
                </div>
              </div>
              <ol class="flow01__list">
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step1.svg" alt="step1">
                    </div>
                    <div class="ttl">
                      お問い合わせ
                    </div>
                  </div>
                  <div class="text">
                    お問い合わせフォーム、もしくはお電話でお気軽にお問い合わせください。
                  </div>
                </li>
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step2.svg" alt="step2">
                    </div>
                    <div class="ttl">
                      ご説明・<br>
                      コンサルティング
                    </div>
                  </div>
                  <div class="text">
                    社用車のEV導入に向けた最適な運用のご提案、費用シミュレーションを行います。お客様の電気使用パターンを分析し、どの時間帯でどの程度の出力で充電することが最適か、電力会社のノウハウを最大限に活かした最適な導入プラン・充電計画をご提案します。
                  </div>
                </li>
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step3.svg" alt="step3">
                    </div>
                    <div class="ttl">
                      導入準備・<br class="sp-only"><span>お見積り</span>
                    </div>
                  </div>
                  <div class="text">
                    充電器設置工事のための現地調査を行い、お見積りを提出いたします。お客さまが個別に充電器手配・設置工事・制御システムの手配をしていただく必要はありません。EV充電設備の導入準備をトータルサポートいたします。
                  </div>
                </li>
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step4.svg" alt="step4">
                    </div>
                    <div class="ttl">
                      ご契約
                    </div>
                  </div>
                  <div class="text">
                    契約書案をご提示しますので、内容をご検討いただき、双方合意の上、契約締結をいたします。
                  </div>
                </li>
              </ol>
            </div>
            <div class="flow01__wrapper02 flex">
              <div class="flow01__flow-line flow01__flow-line--03" data-aos="fade-up">
                <div class="circle1">
                  <img src="<?php echo assets_path() ?>img/common/icon-circle-green.svg" alt="">
                </div>
                <p class="period">約1ヵ月<br class="sp-only">～<br class="sp-only">1ヶ月半</p>
                <div class="circle2">
                  <img src="<?php echo assets_path() ?>img/common/icon-circle-yellow.svg" alt="">
                </div>
              </div>
              <ol class="flow01__list flow01__list--02">
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step5.svg" alt="step5">
                    </div>
                    <div class="ttl">
                      工事
                    </div>
                  </div>
                  <div class="text">
                    充電器の設置工事を実施します。<br>
                    ※充電器はリース提供を標準パターンとしておりますが、ご購入もご相談可能です。
                  </div>
                </li>
                <li class="flow01__list-item flex aiC" data-aos="fade-up">
                  <div class="wrapper">
                    <div class="step">
                      <img src="<?php echo assets_path() ?>img/common/icon-step6.svg" alt="step6">
                    </div>
                    <div class="ttl">
                      運用開始
                    </div>
                  </div>
                  <div class="text">
                    充電器の利用状況はエネットで一元管理します。<br>
                    お客様の方で面倒な設定や管理・監視等をしていただく必要はありません。
                  </div>
                </li>
              </ol>
            </div>
          </div>
          <p class="flow01__note note" data-aos="fade-up">
            ※上記は最短の事例であり、すべてのケースにおいて確約できるものではありません。契約手続きや工事手配等、その他諸事情により時間がかかる場合もあります。
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- document -->
  <section class="introduction__document common-document" id="introduction-document">
    <div class="common-document__container containers">
      <div class="common-document__wrapper">
        <div class="common-document__ttl ttl-primary --center --white --document">
          <div class="img">
            <img src="<?php echo assets_path() ?>img/common/ttl-document-white.png" alt="document">
          </div>
          <h2 class="ttl">お役立ち資料</h2>
        </div>
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
        <?php endif; ?>
        <div class="common-document__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/" class="btn01 --large">資料一覧へ</a>
        </div>
      </div>
    </div>
  </section>

  <!-- column -->
  <section class="introduction__column common-column" id="introduction-column">
    <div class="containers--sm">
      <div class="common-column__wrapper flex">
        <div class="common-column__content01">
          <div class="common-column__ttl ttl-primary">
            <div class="img">
              <img src="<?php echo assets_path() ?>img/common/ttl-column.png" alt="column">
            </div>
            <h2 class="ttl">おすすめコラム</h2>
          </div>
        </div>
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
          <div class="common-column__content02">
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
            <div class="common-column__btn">
              <a href="<?php echo esc_url(home_url('/')); ?>column/" class="btn01 --large2">コラム一覧へ</a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>