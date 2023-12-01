<?php get_header(); ?>

<main class="utility-thanks__main">

  <!-- thanks -->
  <section class="utility-thanks__sec thanks">
    <div class="containers">
      <h1 class="thanks__ttl">
        資料をダウンロードいただき<br class="sp-only">ありがとうございました。
      </h1>
      <p class="thanks__lead">
        ご入力いただきましたメールアドレス宛に<br>
        資料のダウンロード用URLを送信させていただきました。
      </p>
      <div class="thanks__back">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn01 --large">トップページに戻る</a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>