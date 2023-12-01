<?php
global $body_class;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="">
  <meta name="description" content="ディスクリプション">
  <meta name="author" content="">

  <title>EV Start Biz | </title>

  <meta name="format-detection" content="telephone=no">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="image" content="">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="EV Start Biz | サイトタイトル">
  <meta name="twitter:image:src" content="">

  <!-- Open Graph data -->
  <meta property="og:title" content="EV Start Biz | サイトタイトル">
  <meta property="og:description" content="ディスクリプション">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
  <meta property="og:site_name" content="">

  <!-- Web font -->

  <!-- 前から入っていたリンク -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ncf8fus.css"> -->

  <!-- 新しく入れたリンク -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">


  <!-- Style sheet -->
  <!-- <link rel="stylesheet" href="/assets/css/main.css"> -->
  <!-- <link rel="stylesheet" href="/assets/css/slick/slick-theme.css?1">
<link rel="stylesheet" href="/assets/css/slick/slick.css?1"> -->
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css?1">
  <?php wp_head(); ?>
</head>

<body class="<?php echo $body_class; ?>">
  <header class="header" id="header">
    <div class="header__containers containers">
      <div class="header__logo">
        <img src="<?php echo assets_path() ?>img/common/logo.png" alt="EV Start Biz">
      </div>
      <div class="header__body js-drawer">
        <div class="header__body-inner">
          <nav class="header__nav">
            <ul class="header__nav-list">

              <li class="header__nav-item<?php if (is_front_page()) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
              </li>
              <li class="header__nav-item<?php if (is_page("about")) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>about/">『EV Start Biz』とは</a>
              </li>
              <li class="header__nav-item<?php if (is_page("ev_introduction")) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/">EV車導入をお考えの企業さまへ</a>
              </li>
              <li class="header__nav-item<?php if (is_page("qa")) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>qa/">よくあるギモン</a>
              </li>
              <li class="header__nav-item<?php if (is_post_type_archive("column") or is_singular('column') or is_tax('column_category') or is_search('column')) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>column/">コラム</a>
              </li>
              <li class="header__nav-item<?php if (is_page("solution-enneev")) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/">ソリューション</a>
              </li>
              <li class="header__nav-item<?php if (is_page("operating_company")) : ?> active<?php endif; ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>operating_company/">運営会社</a>
              </li>
            </ul>
          </nav>
          <div class="header__cta">
            <a href="<?php echo esc_url(home_url('/')); ?>useful/" class="header__btn">お役立ち資料</a>
            <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="header__btn">ご相談・お問合せ</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <button class="hamburger-btn js-hamburger-btn">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="overlay js-overlay"></div>

  <div class="header-sub" id="header-sub">
    <div class="header__containers containers">
      <div class="header__body">
        <div class="header__body-inner">
          <nav class="header__nav">
            <ul class="header__nav-list">
              <li class="header__nav-item active">
                <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>about/">『EV Start Biz』とは</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>ev_introduction/">EV車導入をお考えの企業さまへ</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>qa/">よくあるギモン</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>column/">コラム</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/">ソリューション</a>
              </li>
              <li class="header__nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>operating_company/">運営会社</a>
              </li>
            </ul>
          </nav>
          <div class="header__cta">
            <a href="<?php echo esc_url(home_url('/')); ?>useful/" class="header__btn">お役立ち資料</a>
            <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="header__btn">ご相談・お問合せ</a>
          </div>
        </div>
      </div>
    </div>
  </div>