<?php get_header(); ?>

<main class="sitemap__main">

  <!-- company-head -->
  <div class="sitemap__head sitemap-head page-head --none">
    <div class="sitemap-head__containers containers--md">
      <div class="sitemap-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-sitemap.png" alt="Site Map">
        </div>
        <h1 class="ttl">サイトマップ</h1>
      </div>
    </div>
  </div>

  <!-- operating-company__sec -->
  <section class="sitemap__sec">
    <div class="containers--sm">
      <div class="sitemap__items" data-aos="fade-up">
        <nav class="sitemap__nav sitemap-nav">
          <div class="sitemap-nav__content">
            <p class="parent">
              <a href="<?php echo esc_url(home_url('/')); ?>about/">『EV Start Biz』 とは</a>
            </p>
            <p class="parent">
              <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/">EV車導入をお考えの企業さまへ</a>
            </p>
            <p class="parent">
              <a href="<?php echo esc_url(home_url('/')); ?>qa/">よくあるギモン</a>
            </p>
            <p class="parent">
              <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/">ソリューション</a>
            </p>
            <ul class="sitemap-nav__list">
              <li class="sitemap-nav__item">
                <a href="">&nbsp;スマート充電サービス EnneEV®</a>
              </li>
            </ul>
          </div>
          <div class="sitemap-nav__content">
            <p class="parent">
              <a href="">お役立ち情報</a>
            </p>
            <ul class="sitemap-nav__list">
              <li class="sitemap-nav__item">
                <a href="<?php echo esc_url(home_url('/')); ?>column/">&nbsp;お役立ちコラム</a>
              </li>
              <li class="sitemap-nav__item">
                <a href="<?php echo esc_url(home_url('/')); ?>useful/">&nbsp;お役立ち資料</a>
              </li>
              <li class="sitemap-nav__item">
                <a href="<?php echo esc_url(home_url('/')); ?>news/">&nbsp;ニュースリリース</a>
              </li>
            </ul>
            <p class="parent">
              <a href="">お問合せ</a>
            </p>
            <ul class="sitemap-nav__list">
              <li class="sitemap-nav__item">
                <a href="">&nbsp;サービス資料</a>
              </li>
              <li class="sitemap-nav__item">
                <a href="<?php echo esc_url(home_url('/')); ?>contact/">&nbsp;ご相談・お問合せ</a>
              </li>
            </ul>
          </div>
          <div class="sitemap-nav__content">
            <p class="parent">
              <a href="#">プライバシーポリシー</a>
            </p>
            <p class="parent">
              <a href="">Cookieポリシー</a>
            </p>
            <p class="parent">
              <a href="<?php echo esc_url(home_url('/')); ?>operating_company/">運営会社</a>
            </p>
          </div>
        </nav>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>