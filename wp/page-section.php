<?php get_header(); ?>

<main>

  <!-- アンカーリンク 3つ4つどちらも対応　-->
  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#">サービス概要</a></li>
        <li><a href="#">特長</a></li>
        <li><a href="#">他カプセルとの比較</a></li>
        <li><a href="#">用途例</a></li>
      </ul>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 左に説明文・右に画像　-->
  <section class="sec01">
    <div class="containers">
      <h2 class="ttl-secondary">h2タイトルfz36がそのまま入ります</h2>
      <div class="lead">リード文が入ります。リード文が入ります。リード文が入ります。</div>
      <div class="flex aiC sp-reverse">
        <dl class="sec01__box">
          <dt><h3>タイトルがそのまま入りますタイトルがそのまま入ります<br>タイトルがそのまま入ります</h3></dt>
          <dd>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</dd>
        </dl>
        <figure class="sec01__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 左に画像・右に説明文　-->
  <section class="sec02">
    <div class="containers">
      <h2 class="ttl-secondary">h2タイトルfz36がそのまま入ります</h2>
      <div class="lead">リード文が入ります。リード文が入ります。リード文が入ります。</div>
      <div class="flex aiC">
        <figure class="sec02__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        <dl class="sec02__box">
          <dt><h3>タイトルがそのまま入りますタイトルがそのまま入ります<br>タイトルがそのまま入ります</h3></dt>
          <dd>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</dd>
        </dl>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 交互に見せる　-->
  <section class="symmetry">
    <div class="containers">

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">01</div>
          <h2 class="item__box--ttl">タイトルがそのまま入ります<br>タイトルがそのまま入ります</h2>
          <div class="item__box--txt">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
          <a href="#" class="btn01">ボタン名が入ります</a>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        <summary class="item__box">
          <div class="item__box--num">02</div>
          <h2 class="item__box--ttl">タイトルがそのまま入ります<br>タイトルがそのまま入ります</h2>
          <div class="item__box--txt">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
          <a href="#" class="btn01">ボタン名が入ります</a>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">03</div>
          <h2 class="item__box--ttl">タイトルがそのまま入ります<br>タイトルがそのまま入ります</h2>
          <div class="item__box--txt">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
      </div>
      
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 何かの要素 -->
  <section class="element">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>選ばれる理由</small>独自の原料素材、シームレスカプセル技術、<br class="pc-only">機能性表示食品における当社ならではのサポート力が選ばれる理由です。</h2>
      <ul class="flex gap30 item">
        <li class="item__box">
          <div class="item__box--num core">1</div>
          <div class="item__box--ttl">1893年創業の確かな鑑定眼と<br>豊富な知識・ノウハウ</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        </li>
        <li class="item__box">
          <div class="item__box--num core">2</div>
          <div class="item__box--ttl">差別化できる<br>商品開発のサポート</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        </li>
        <li class="item__box">
          <div class="item__box--num core">3</div>
          <div class="item__box--ttl">機能性表示食品制度づくりの<br>中心メンバーならではの知識</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        </li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>strength/" class="more">詳しくはこちら</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 企業ロゴ・スライダーなしの場合　-->
  <section class="praise">
    <div class="containers">
      <h2 class="ttl-secondary">h2タイトルfz36がそのまま入ります</h2>
      <ul class="flex praise__box">
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/logo.svg" alt=""></li>
      </ul>
      <a href="#" class="btn01">ボタン名が入ります</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- お客様の声 -->
  <section class="voice">
    <div class="containers">
      <h2 class="ttl-secondary">お客様の声</h2>

      <div class="flex aiE voice__box">
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/common/img-voice.jpg" alt="" class="avatar">
          <figcaption class="position">〇〇業　〇〇部門担当者</figcaption>
          <span class="tag">導入事例 01</span>
        </figure>
        <dl class="voice__box--cmt">
          <dt>他社には無い機能性表示食品の商品開発が実現できました</dt>
          <dd>お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</dd>
        </dl>
      </div>

      <div class="flex aiE sp-reverse voice__box">
        <dl class="voice__box--cmt v2">
          <dt>他社には無い機能性表示食品の商品開発が実現できました</dt>
          <dd>お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</dd>
        </dl>
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/common/img-voice.jpg" alt="" class="avatar">
          <figcaption class="position">〇〇業　〇〇部門担当者</figcaption>
          <span class="tag">導入事例 01</span>
        </figure>
      </div>
      
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <section class="info bg-B">
    <div class="containers">
      <h2 class="ttl-secondary">会社情報</h2>
      <div class="flex gap30 card">
        <a href="https://arocca-test.tmedia.jp/company/" class="flex aiC card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info01.svg" alt="企業情報"></figure>
          <dl class="card__box--txt">
            <dt><h3>企業情報</h3></dt>
          </dl>
        </a>
        <a href="https://arocca-test.tmedia.jp/strength/" class="flex aiC card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info02.svg" alt="ア・ロッカが選ばれる理由"></figure>
          <dl class="card__box--txt">
            <dt><h3>ア・ロッカが選ばれる理由</h3></dt>
          </dl>
        </a>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- お問合わせ　-->
  <section class="inquiry">
    <div class="containers">
      <h2 class="ttl-secondary cW">タイトルがそのまま入ります</h2>
      <h3 class="lead">リード文が入ります。リード文が入ります。リード文が入ります。</h3>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="btn01">お問合せ・ご相談はこちら</a>
      <summary class="flex aiC inquiry__box">
        <div class="inquiry__box--txt">テキストが入りますテキストが入ります</div>
        <div class="flex inquiry__box--btn">
          <a href="#" class="btn01">ボタン名</a>
          <a href="#" class="btn01">ボタン名</a>
        </div>
      </summary>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- お問合わせ　type02-->
  <section class="inquiry02">
    <div class="containers">
      <div class="inquiry02__box">
        <h2 class="inquiry02__box--ttl">ご相談・お問い合わせ</h2>
        <div class="inquiry02__box--lead">セキュリティ担当者様の業務課題に関する<br>ご相談・お問い合わせはお気軽に<br class="sp-only">ご連絡下さい。</div>
        <a href="#" class="btn01">ご相談・お問い合わせ</a>
        <a href="tel:0332668128" class="tel">03-3266-8128</a>
        <div class="inquiry02__box--txt">（平日09:00〜17:00）</div>
        <h3 class="inquiry02__box--subttl"><span>カタログやお役立ち資料を<br class="sp-only">ご希望の方はこちら</span></h3>
        <div class="flex">
          <a href="#" class="btn01 small">カタログ</a>
          <a href="#" class="btn01 small">ホワイトペーパ</a>
          <a href="#" class="btn01 small">事例資料</a>
        </div>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- お問合わせ　type03-->
  <section class="inquiry03">
    <div class="containers-full">
      <div class="flex">
        <a href="#" class="item">
          <div class="item__box left">
            <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/common/icon-dl.png" alt=""></figure>
            <div class="item__box--txt"><span>サービス資料ダウンロード</span></div>
          </div>
        </a>
        <a href="#" class="item">
          <div class="item__box right">
            <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/common/icon-mail.png" alt=""></figure>
            <div class="item__box--txt"><span>ご相談・お見積り</span></div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- ホワイトペーパー　※CMS対応 -->
  <section class="material">
    <div class="containers">
      <div class="flex aiC jcC gap30 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.png" alt=""></figure>
        <summary class="desc__box">
          <div class="desc__box--ttl">差別化をサポートする<br>森下仁丹のサービス資料</div>
          <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="btn01">サービス資料をダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- ニュース　※CMS対応 -->
  <section class="sec-news">
    <div class="containers">
      <h2 class="ttl-secondary">お知らせ</h2>

        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
      
      <a href="<?php echo esc_url(home_url('/')); ?>news/" class="btn01">お知らせ一覧を見る</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード型 type1 ※aタグに変更も可能-->
  <section class="card-type1">
    <div class="containers">
      <h2 class="ttl-secondary">タイトルがそのまま入ります</h2>
      <ul class="flex gap30 card">
        <li class="card__box">
          <h3 class="card__box--ttl">タイトル</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl">タイトル</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl">タイトル</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
        </li>
      </ul>
      <a href="#" class="btn01">ボタン名が入ります</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード型 type2 ※aタグに変更も可能-->
  <section class="card-type2">
    <div class="containers">
      <h2 class="ttl-secondary">タイトルがそのまま入ります</h2>
      <ul class="flex gap30 card">
        <li class="card__wrap">
          <h3 class="card__wrap--ttl">タイトル</h3>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </li>
        <li class="card__wrap">
          <h3 class="card__wrap--ttl">タイトル</h3>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </li>
        <li class="card__wrap">
          <h3 class="card__wrap--ttl">タイトル</h3>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </li>
      </ul>
      <a href="#" class="btn01">ボタン名が入ります</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード型 type3 ※ulタグに変更も可能-->
  <section class="card-type3">
    <div class="containers">
      <h2 class="ttl-secondary">タイトルがそのまま入ります</h2>
      <div class="flex gap30 card">
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <h3 class="card__box--ttl">タイトル</h3>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </a>
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <h3 class="card__box--ttl">タイトル</h3>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </a>
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <h3 class="card__box--ttl">タイトル</h3>
            <div class="card__box--txt">活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。活用シーンの補足説明文が入ります。</div>
          </summary>
        </a>
      </div>
      <a href="#" class="btn01">ボタン名が入ります</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード型 type4 -->
  <section class="card-type4">
    <div class="containers">

      <div class="card">
        <h2 class="card__ttl">「<span>差別化のネタが見つからない</span>」<br class="sp-only">という企業様へ</h2>
        <div class="flex gap30 sp-reverse card__box">
          <dl class="card__box--txt">
            <dt><h3>独自の原料素材とシームレスカプセル技術で<br>差別化できる商品開発をサポート</h3></dt>
            <dd>多くの自社商品を開発・製造してきた森下仁丹ならではのノウハウを活用し、商品設計や機能性原料の供給、シームレスカプセルでの製造、充填、包装まで一気通貫でサポート。商品に付加価値をつけ、競合他社との差別化ができるネタをご提供します。</dd>
          </dl>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
        </div>
      </div>
      
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード型 type5 -->
  <section class="card-type5">
    <div class="containers">
      <h2 class="ttl-secondary">以下のようなニーズ・課題を持つ企業様に活用されています。</h2>
      <ul class="flex gap30 card">
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <h3 class="card__box--ttl">応募が集まらない</h3>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <h3 class="card__box--ttl">内定辞退が多い</h3>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <h3 class="card__box--ttl">採用業務を効率化したい</h3>
        </li>
      </ul>
      <a href="#" class="btn01">ボタン名が入ります</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- お役立ち資料 -->
  <section class="useful-wp">
    <div class="containers">
      <h2 class="ttl-secondary cW">お役立ち資料</h2>
      <div class="lead">差別化できる商品開発におけるトレンドや開発段階の課題解決につながるノウハウなどを<br>ご紹介しています。是非ご覧ください。</div>
      <div class="flex gap30">
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <div class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイト</div>
            <div class="card__box--txt">資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。</div>
            <div class="more bgY small">お役立ち資料をダウンロード</div>
          </summary>
        </a>
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <div class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイト</div>
            <div class="card__box--txt">資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。</div>
            <div class="more bgY small">お役立ち資料をダウンロード</div>
          </summary>
        </a>
      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="more">お役立ち資料一覧を見る</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- hero01 右側にwp-->
  <section class="hero01">
    <div class="containers flex gap30 aiC">
      <div class="hero01__box">
        <div class="hero01__box--sub">サブタイトルが入ります</div>
        <h1 class="ttl-primary">h1タイトルがそのまま入ります<br>h1タイトルがそのまま入ります</h1>
        <a href="#" class="btn01">ボタン名が入ります</a>
      </div>
      <a href="#" class="hero01__wp">
        <div class="hero01__wp--ttl">お役立ち資料</div>
        <div class="hero01__wp--txt">テキストが入ります</div>
        <figure class="hero01__wp--img"><img src="<?php echo assets_path() ?>img/common/img-wp.png" alt=""></figure>
        <div class="btn01">資料ダウンロード</div>
      </a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- hero02 左寄せ-->
  <section class="hero02">
    <div class="containers">
      <div class="hero02__box">
        <div class="hero02__box--sub">サブタイトルが入ります</div>
        <h1 class="ttl-primary">h1タイトルがそのまま入ります<br>h1タイトルがそのまま入ります</h1>
        <a href="#" class="btn01">ボタン名が入ります</a>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- hero03 中央寄せ-->
  <section class="hero03">
    <div class="containers core">
      <div class="hero03__box">
        <div class="hero03__box--sub">サブタイトルが入ります</div>
        <h1 class="ttl-primary">h1タイトルがそのまま入ります<br>h1タイトルがそのまま入ります</h1>
        <a href="#" class="btn01">ボタン名が入ります</a>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- hero04 スライダー-->
  <section class="hero04">
    <div class="containers-full flex sp-reverse">
      <div class="hero04__box">
        <div class="hero04__wrap">
          <div class="hero04__box--sub"><span class="marker cG">医療機器・化粧品事業者様向け</span></div>
          <h1 class="ttl-primary">東神倉庫の<br>医療機器物流・化粧品物流</h1>
          <div class="hero04__box--lead">医療機器・化粧品に関し、高い品質での最適な物流を提案します。</div>
          <div class="ctabtn">
            <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more core">
              <div class="balloon"><span class="balloon__txt">特長・概要が3分でわかる！</span></div>
              サービス資料をダウンロード
            </a>
          </div>
          <a href="<?php echo esc_url(home_url('/')); ?>solutions/" class="more bgW">医療機器・化粧品の物流にお困りの企業様へ</a>
        </div>
      </div>
      <div class="hero04__slider">
        <ul id="top-slide">
          <li class="slider01"></li>
          <li class="slider02"></li>
          <li class="slider03"></li>
        </ul>
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- サービス資料 -->
  <section class="catalog-menu">
    <div class="containers">

      <a href="#" class="flex card">
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/whitepaper/img-card01.jpg" alt=""></figure>
        <summary class="card__box">
          <h2 class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入り資料タイトルが入り</h2>
          <h3 class="card__box--txt">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</h3>
          <div class="more">資料をダウンロード</div>
        </summary>
      </a>

      <a href="#" class="flex card">
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/whitepaper/img-card01.jpg" alt=""></figure>
        <summary class="card__box">
          <h2 class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入り資料タイトルが入り</h2>
          <h3 class="card__box--txt">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</h3>
          <div class="more">資料をダウンロード</div>
        </summary>
      </a>
      
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 多くの企業様に選ばれています。 -->
  <section class="reason02">
    <div class="containers">
      <h2 class="ttl-secondary">アイティ人事は多くの企業様に<br class="sp-only">選ばれています。</h2>
      <ul class="flex jcC item">
        <li class="item__box">
          <h3 class="item__box--ttl">RPO導入企業数</h3>
          <div class="item__box--txt"><span>12</span>　社</div>
        </li>
        <li class="item__box">
          <h3 class="item__box--ttl">エンジニア採用成功人数</h3>
          <div class="item__box--txt"><span>14</span>　名</div>
        </li>
        <li class="item__box">
          <h3 class="item__box--ttl">エンジニアに強い媒体の取扱数</h3>
          <div class="item__box--txt"><span>5</span>　媒体</div>
        </li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>case/" class="more">実績・事例を見る</a>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 検索バー -->
  <section>
		<div class="containers">
      <div class="search">
        <form method="get" action="" class="search__form">
          <input name="s" class="search__input" type="search" placeholder="キーワードから探す">
          <input type="hidden" name="post_type" value="column">
          <button accesskey="f" class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
        </form>
      </div>
			<div class="flex gap20 fS inherit">
        <a href="" class="cat">カテゴリ名</a>
        <a href="" class="cat">カテゴリ名</a>
        <a href="" class="cat">カテゴリ名</a>
        <a href="" class="cat">カテゴリ名</a>
      </div>
		</div>
	</section>

  <hr style="margin: 30px 0; display: block;">

  <!-- 最新の2件のみ表示 -->
  <section class="latest">
    <div class="containers">
      <h2 class="ttl-secondary non">おすすめ資料</h2>
      <div class="flex gap30">

        <a href="#" class="flex item">
          <h3 class="item__ttl">資料タイトルが入ります資料タイトルが入ります資料タイトルが入ります資料タイトルが入ります資</h3>
          <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="item__box">
            <div class="item__box--cat"><span class="cat">カテゴリ名</span></div>
            <div class="item__box--txt">資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。</div>
          </div>
        </a>

        <a href="#" class="flex item">
          <h3 class="item__ttl">資料タイトルが入ります資料タイトルが入ります資料タイトルが入ります資料タイトルが入ります資</h3>
          <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="item__box">
            <div class="item__box--cat"><span class="cat">カテゴリ名</span></div>
            <div class="item__box--txt">資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。資料リード文が入ります。</div>
          </div>
        </a>
        
      </div>
    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- カード一覧 -->
  <section class="grid">
    <div class="containers">

      <div class="flex gap30 grid">

        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="grid__card">
          <div class="grid__card--img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></div>
          <div class="flex fS grid__card--cat">
            <span class="cat">カテゴリ名</span>
            <span class="cat">カテゴ</span>
          </div>
          <h3 class="grid__card--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="grid__card--time"><time class="time">2021.03.16</time></div>
        </a>

      </div>

      <nav class="pagination">
        <div class="nav-links">
          <a class="prev page-numbers" href="#"><span></span></a>
          <a class="page-numbers" href="#">1</a>
          <span class="page-numbers current">2</span>
          <a class="page-numbers" href="#">3</a>
          <a class="page-numbers" href="#">4</a>
          <a class="page-numbers" href="#">5</a>
          <a class="next page-numbers" href="#"><span></span></a>
        </div>
      </nav>

    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <section class="arc-news">
    <div class="containers">
      <h1 class="ttl-secondary non">お知らせ</h1>
      <div class="item">

        <a href="#" class="item__box">
          <div class="flex gap20 fS aiC inherit item__box--date">
            <time class="time">2021.3.8</time>
            <span class="cat">お知らせ/ニュース</span>
          </div>
          <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
        </a>

        <a href="#" class="item__box">
          <div class="flex gap20 fS aiC inherit item__box--date">
            <time class="time">2021.3.8</time>
            <span class="cat">お知らせ/ニュース</span>
          </div>
          <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
        </a>

        <a href="#" class="item__box">
          <div class="flex gap20 fS aiC inherit item__box--date">
            <time class="time">2021.3.8</time>
            <span class="cat">お知らせ/ニュース</span>
          </div>
          <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
        </a>

        <a href="#" class="item__box">
          <div class="flex gap20 fS aiC inherit item__box--date">
            <time class="time">2021.3.8</time>
            <span class="cat">お知らせ/ニュース</span>
          </div>
          <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
        </a>

        <a href="#" class="item__box">
          <div class="flex gap20 fS aiC inherit item__box--date">
            <time class="time">2021.3.8</time>
            <span class="cat">お知らせ/ニュース</span>
          </div>
          <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
        </a>
				
			</div>

    </div>
  </section>

  <hr style="margin: 30px 0; display: block;">

  <!-- ニュース詳細 -->
  <section class="news-single">
    <div class="containers">

      <div class="flex gap20 fS aiC inherit news-single__date">
        <time class="time">2021.3.8</time>
        <span class="cat">カテゴリ名</span>
      </div>

      <h1 class="news-single__h1">お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。〈h1〉</h1>

      <ul class="flex gap20 fS aiC sns">
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/fb.svg" alt="Facebook"></a></li>
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/tw.svg" alt="Twitter"></a></li>
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/in.svg" alt="LinkedIn"></a></li>
      </ul>

      <div class=" news-single__lead">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</div>

      <div class=" news-single__conts">
        <p>お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。</p>
        <p>お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。お知らせ本文が入ります。</p>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>