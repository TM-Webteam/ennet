<?php get_header(); ?>

<main class="qa__main">

  <!--introduction__head -->
  <div class="qa__head qa-head">
    <div class="qa-head__containers containers--md">
      <div class="qa-head__content flex nowrap">
        <div class="qa-head__body">
          <div class="qa-head__ttl ttl-primary">
            <div class="img">
              <img src="<?php echo assets_path() ?>img/common/ttl-qa.png" alt="introduction">
            </div>
            <h1 class="ttl">よくあるギモン</h1>
          </div>
          <div class="qa-head__lead">
            EVの導入についてよくあるギモンを<span>Q&A方式でご紹介します。</span>
          </div>
        </div>
        <div class="qa-head__img flex nowrap" data-aos="fade-in" data-aos-duration="2000">
          <img src="<?php echo assets_path() ?>img/qa/img-qa01.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- ページ内リンク -->
  <div class="qa__page-link qa-page-link page-link">
    <div class="containers--md">
      <h2 class="qa-page-link__ttl ttl-secondary">
        カテゴリから選ぶ
      </h2>
      <ul class="qa-page-link__list page-link__list --col4">
        <li class="page-link__item" data-aos="fade-up">
          <a href="#qa-sec1">コストについて</a>
        </li>
        <li class="page-link__item" data-aos="fade-up">
          <a href="#qa-sec2">実用性について</a>
        </li>
        <li class="page-link__item" data-aos="fade-up">
          <a href="#qa-sec3">充電について</a>
        </li>
        <li class="page-link__item" data-aos="fade-up">
          <a href="#qa-sec4">環境貢献について</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- qa-sec1 -->
  <div class="qa__sec1 qa-sec" id="qa-sec1">
    <div class="qa-sec__containers containers--md">
      <h2 class="qa-sec__ttl ttl-secondary">
        コストについて
      </h2>
      <div class="qa-sec__accordion accordion">
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            EV（電気自動車）は初期コストがかなりかかるのでは？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                <span>
                  車両費だけ見ると、まだガソリン車よりも高い傾向にありますが、実は燃料代はガソリン燃料費の3分の1程度に抑えることができます。さらに車検や消耗品もガソリン車と比較して安価な
                  ことに加え、EVは節税対策になるという魅力もあります。
                </span>
                <span>
                  ライフタイムコストで比較したところ、実は充電器導入費用を入れてもガソリン車と比べて数%程度しか変わらない、という試算もあります。
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            電気代は抑えられるの？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                EV充電の制御ができるスマート充電サービスを導入すれば、電気料金の上昇を抑制できます。<br>
                社用車の台数が多い企業であっても、昼間の電力ピーク時を避けて充電したり、充電器の出力を計画的にコントロールすることで、契約電力（基本料金）を変更せずに社用車のEVシフトが実現できます。
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            EV導入による電力供給不足のリスクは？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                <span>発電量不足・設備容量不足により停電などのリスクが高まる可能性はないとはいえません。</span>
                <span>そのためエネットでは国内初となる、充電器の「時間制御」と「出力制御」を可能にするソリューションをご提供しております。</span>
              </div>
              <div class="btn-wrapper" data-aos="fade-up">
                <div class="fukidashi">
                  \ 充電制御ソリューション EnneEV®について /
                </div>
                <div class="about-sec1__btn">
                  <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/" class="btn01 --border">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- qa-sec2 -->
  <div class="qa__sec2 qa-sec" id="qa-sec2">
    <div class="qa-sec__containers containers--md">
      <h2 class="qa-sec__ttl ttl-secondary">
        実用性について
      </h2>
      <div class="qa-sec__accordion accordion">
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            EV（電気自動車）の航続距離はどれくらい？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                メーカーや車種にもよりますが、EVは満充電で200km以上、軽タイプなら120kmくらい走ります。<br>
                1回の充電で、社用車や公用車としては十分な距離を走行することができます。
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            充電スポットが少ないのでは？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                <span>ガソリン車の給油所の数は年々減少の一途をたどっており*、給油機は車数百台に1台の割合です。一方で、現在国内で設置されている公共用充電設備はEV約4.7台に対し1台の割合です。このことから決して少ない数ではないということがわかります。</span>
                <span>また、ガソリン車は必ず給油所まで運転する必要があるのに対して、EVは自社で充電することができます。</span>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            車両性能は高いの？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                電池とモーターで構成されるEVは動作反応が早いため、トルク（蹴り出す力）は、EVはガソリン車の約2倍あります。車種によっては、路面状況に応じて適切な制御をかけてくれるため、四駆以上のスリップ防止性能があります。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- qa-sec3 -->
  <div class="qa__sec3 qa-sec" id="qa-sec3">
    <div class="qa-sec__containers containers--md">
      <h2 class="qa-sec__ttl ttl-secondary">
        充電について
      </h2>
      <div class="qa-sec__accordion accordion">
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            車種によって充電器を変えなければいけないの？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                変える必要はありませんが、充電制御を行う場合は注意が必要です。独自の通信プロトコルを用いた充電制御システムにおいては特定の充電器しか動作しないものがあります。エネットの『EnneEV®』はEV充電器制御のための国際標準通信プロトコル（OCPP）を国内で初めて採用しておりますので、今後いろんなメーカーの充電器でも1つの制御システムで制御することが可能となります。
              </div>
              <div class="btn-wrapper" data-aos="fade-up">
                <div class="fukidashi">
                  \ 充電制御ソリューション EnneEV®について /
                </div>
                <div class="about-sec1__btn">
                  <a href="<?php echo esc_url(home_url('/')); ?>solution/enneev/" class="btn01 --border">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            充電設備の設置って大変そう…
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                エネットでは、EV充電器の導入のご相談から設置工事のための現地調査、設置・制御運用・アフターケアまですべてワンストップで対応します。<br class="sp-only">お客さまが個別に充電器手配・設置工事・制御システムの手配をしていただく必要はありません。全部まとめてお任せください。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- qa-sec4 -->
  <div class="qa__sec4 qa-sec" id="qa-sec4">
    <div class="qa-sec__containers containers--md">
      <h2 class="qa-sec__ttl ttl-secondary">
        環境貢献について
      </h2>
      <div class="qa-sec__accordion accordion">
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            EVは本当に環境に良いの？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                EVはバッテリーに充電した電気をエネルギー源とするため、走行中に有害な排気ガスを全く排出しません。更に再エネ由来の電気で充電することで、電気自体の温室効果ガスの排出量も削減することができます。<br class="sp-only">世界の温室効果ガス排出量の約2割は自動車由来と言われており、EVシフトは誰もができる最も身近な環境貢献への取り組みの1つです。
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            HV、PHVとの違いは？
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                HV・PHVは、燃費が良いことから環境に優しい車といわれていますが、ガソリンを燃料として走行するため、一定量の温室効果ガスは排出されます。<br class="sp-only">一方でEVは、電気を燃料として走行するため、走行時に温室効果ガスは排出しません。
              </div>
            </div>
          </div>
        </div>
        <div class="accordion__item" data-aos="fade-up">
          <button class="accordion__btn js-accordion-btn">
            充電に使用する電気もエコにしたい
            <span class="accordion__icon"></span>
          </button>
          <div class="accordion__content js-accordion-content">
            <div class="inner">
              <div class="text">
                エネットではご利用の電気を再エネ電気に切り替えるメニュー「EnneGreen（エネグリーン）」をご提供しています。<br class="sp-only">EVシフトに合わせて再エネ電気に切り替えることで温室効果ガス排出量の削減に更に貢献することができます。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>