<?php get_header(); ?>

<main class="operating-company__main">

  <!-- company-head -->
  <div class="operating-company__head operating-company-head page-head --none">
    <div class="operating-company-head__containers containers--md">
      <div class="operating-company-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-company.png" alt="Company">
        </div>
        <h1 class="ttl">運営会社</h1>
      </div>
    </div>
  </div>

  <!-- operating-company__sec -->
  <section class="operating-company__sec">
    <div class="containers--sm">
      <div class="operating-company__items" data-aos="fade-up">
        <dl class="operating-company__list operating-company-list">
          <dt class="operating-company-list__term">社名</dt>
          <dd class="operating-company-list__desc">
            <a href="https://www.ennet.co.jp/info/index.html" target="_blank">
              株式会社エネット（英文名：ENNET Corporation）
              <img src="<?php echo assets_path() ?>img/common/icon-link.png" alt="" width="26" height="26">
            </a>
          </dd>

          <dt class="operating-company-list__term">設立</dt>
          <dd class="operating-company-list__desc">2000（平成12）年7月7日</dd>

          <dt class="operating-company-list__term">本社所在地</dt>
          <dd class="operating-company-list__desc">〒105-0011 東京都港区芝公園二丁目6番3号 芝公園フロントタワー</dd>

          <dt class="operating-company-list__term">資本金</dt>
          <dd class="operating-company-list__desc">107億円</dd>

          <dt class="operating-company-list__term">代表取締役社長</dt>
          <dd class="operating-company-list__desc">谷口 直行</dd>

          <dt class="operating-company-list__term">事業内容</dt>
          <dd class="operating-company-list__desc">
            小売電気事業<br>
            省エネルギーに関するコンサルティング
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>