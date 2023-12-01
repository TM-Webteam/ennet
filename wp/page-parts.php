<?php get_header(); ?>

<main>
  <div class="ttl-primary" style="padding: 15px; background: #ddd;">共通パーツ一覧</div>

  <section>
    <div class="containers">

      <!-- h1タイトル -->
      <h1 class="ttl-primary">h1タイトルfz40</h1>

      <!-- h2タイトル -->
      <h2 class="ttl-secondary">h2タイトルfz36</h2>

      <!-- h3タイトル -->
      <h3 class="ttl-tertiary">h3タイトルfz20</h3>

      <!-- リード文（h2の下） -->
      <div class="lead">リード文が入ります。リード文が入ります。リード文が入ります。</div>

      <!-- 注釈文 -->
      <div class="note">※注釈文文が入ります。注釈文文が入ります。</div>

      <hr style="margin: 30px 0; display: block;">

      <!-- ボタン -->
      <a href="#" class="btn01">タイプ01</a>

      <hr style="margin: 30px 0; display: block;">

      <!-- 呼びかけボタン -->
      <div class="speech"><span>吹き出しコメント</span></div>
      <a href="#" class="btn01">タイプ01</a>

      <hr style="margin: 30px 0; display: block;">

      <!-- 吹き出し付きボタン -->
      <div class="ctabtn">
        <div class="balloon"><span class="balloon__txt">差別化をサポートする森下仁丹のサービス資料</span></div>
        <a href="#" class="btn01">サービス資料ダウンロード</a>
        <summary class="tooltip">お申込み後、リアルタイムでお送りいたします！</summary>
      </div>

      <hr style="margin: 30px 0; display: block;">

      <!-- サムネ付きボタン -->
      <a href="#" class="btn01 thumb">タイプ01</a>

      <hr style="margin: 30px 0; display: block;">

      <!-- カテゴリ -->
      <span class="cat">カテゴリ</span>

      <hr style="margin: 30px 0; display: block;">

      <!-- 日付 -->
      <time class="time">2021.03.16</time>

      <hr style="margin: 30px 0; display: block;">

      <!-- マーカーライン -->
      <span class="marker">マーカーテキストが入ります</span>

      <hr style="margin: 30px 0; display: block;">

      <!-- 強調打点 -->
      <ruby>強<rt>・</rt>調<rt>・</rt>打<rt>・</rt>点<rt>・</rt></ruby>

      <hr style="margin: 30px 0; display: block;">

      <!-- 検索 -->
      <div class="search">
        <form action="" class="search__form">
          <input class="search__input" type="search" placeholder="キーワードから探す">
          <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
        </form>
      </div>

      <hr style="margin: 30px 0; display: block;">

      <!-- 吹き出し（ボタン等） -->
      <div class="speech"><span>吹き出しコメント</span></div>

      <hr style="margin: 30px 0; display: block;">

      <!-- 企業ロゴループスライダー 　※containers-fullで画面いっぱい-->
      <ul id="loop-slick">
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
        <li><img src="<?php echo assets_path() ?>img/common/img-loop01.png" alt=""></li>
      </ul>

      <hr style="margin: 30px 0; display: block;">

      <!-- 記事詳細カードリンク -->
      <a href="#" class="flex cardLink">
        <figure class="cardLink__img"><img src=<?php echo assets_path() ?>img/common/img-cardlink.jpg" alt=""></figure>
        <summary class="cardLink__box">
          <div class="cardLink__box--ttl">コラムタイトルが入ります。コラムタイトルが入ります。コラムタイトルが入ります。コラムタイトルが入り</div>
          <div class="cardLink__box--txt">リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</div>
        </summary>
      </a>

      <hr style="margin: 30px 0; display: block;">

      <!-- SNSシェアボタン -->
      <ul class="flex gap20 fS aiC sns-share">
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/fb.svg" alt="Facebook"></a></li>
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/tw.svg" alt="Twitter"></a></li>
        <li><a href="#"><img src="<?php echo assets_path() ?>img/common/in.svg" alt="LinkedIn"></a></li>
      </ul>

      <hr style="margin: 30px 0; display: block;">

      <!-- ページネーション -->
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

      <hr style="margin: 30px 0; display: block;">


      <!-- 記事監修者 -->
      <div class="writer">
        <h2 class="writer__ttl">このコラムを書いたライター</h2>
        <div class="flex aiC card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img01.jpg" alt=""></figure>
          <summary class="card__box">
            <div class="card__box--ttl">〇〇〇〇運営事務局</div>
            <div class="card__box--txt">ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。ライター紹介文が入ります。</div>
          </summary>
        </div>
      </div>

      <hr style="margin: 30px 0; display: block;">

      <hr style="margin: 30px 0; display: block;">

      <hr style="margin: 30px 0; display: block;">

    </div>
  </section>

</main>

<?php get_footer(); ?>