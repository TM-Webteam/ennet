<?php
global $body_class;
$body_class = "contact";
?>
<?php get_header(); ?>

<main class="contact__main">

  <!-- contact-head -->
  <div class="contact__head contact-head page-head --yellow">
    <div class="contact-head__containers containers--md">
      <div class="contact-head__ttl ttl-primary --center">
        <div class="img">
          <img src="<?php echo assets_path() ?>img/common/ttl-contact.png" alt="introduction">
        </div>
        <h1 class="ttl">ご相談・お問合せ</h1>
        <p class="lead">
          EV導入や運用に関するお問合せ・ご相談は<span>お気軽にご連絡ください。</span>
        </p>
      </div>
    </div>
  </div>

  <div class="contact__body">

    <div class="contact__containers containers--md">
      <h2 class="contact__body-ttl">
        ご相談・お問合せフォーム
      </h2>

      <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf6vD3_vWfwK8ocDZzbpL4SACUJmdI-xOqfjZpT1uhmmTJLeg/formResponse" class="contact__body-content contact-form" target="hidden_iframe" onsubmit="submitted=true;">
        <div class="contact-form__body">
          <!-- お問い合わせ内容 -->
          <dl class="contact-form__item --inquiry">
            <dt class="contact-form__label">
              <label for="inquiry">お問合せ内容</label>
            </dt>
            <dd class="contact-form__input">
              <select name="entry.660575696" id="inquiry">
                <option value="">選択してください</option>
                <option value="EnneEV®(エネーブ)について">EnneEV®(エネーブ)について</option>
                <option value="EV導入のご支援について">EV導入のご支援について</option>
                <option value="EV運用について">EV運用について</option>
              </select>
            </dd>
          </dl>
          <!-- お名前 -->
          <dl class="contact-form__item --name">
            <dt class="contact-form__label">
              <span>お名前</span>
            </dt>
            <dd class="contact-form__input">
              <ul class="contact-item__input-name">
                <li><label for="first-name">姓</label><input id="first-name" name="entry.1874552599" type="text" placeholder="例）山田"></li>
                <li><label for="last-name">名</label><input id="last-name" name="entry.482041268" type="text" placeholder="例）太郎"></li>
              </ul>
            </dd>
          </dl>
          <!-- メールアドレス -->
          <dl class="contact-form__item --mail">
            <dt class="contact-form__label">
              <label for="email">お勤め先のメールアドレス</label>
            </dt>
            <dd class="contact-form__input">
              <input type="email" name="entry.757664579" id="email" placeholder="例）example@ennet.co.jp" required>
            </dd>
          </dl>
          <!-- 電話 -->
          <dl class="contact-form__item --tel">
            <dt class="contact-form__label">
              <label for="tel">電話番号</label>
            </dt>
            <dd class="contact-form__input">
              <input type="tel" name="entry.1450493636" id="tel" placeholder="例）090-0000-0000" required>
            </dd>
          </dl>
          <!-- 会社名 -->
          <dl class="contact-form__item --company-name">
            <dt class="contact-form__label">
              <label for="company-name">会社名</label>
            </dt>
            <dd class="contact-form__input">
              <input type="text" name="entry.446080424" id="company-name" placeholder="例）株式会社エネット" required>
            </dd>
          </dl>
          <!-- EV導入のご状況 -->
          <dl class="contact-form__item --ev-status">
            <dt class="contact-form__label">
              <span>貴社のEV導入のご状況</span>
            </dt>
            <dd class="contact-form__input --radio">
              <div class="radio-item">
                <input type="radio" name="entry.1573769127" id="not-introduced" value="情報収集中／導入検討中" required>
                <label for="not-introduced">情報収集中／導入検討中</label>
              </div>
              <div class="radio-item">
                <input type="radio" name="entry.1573769127" id="introduced" value="すでにEVの運用をしている" required>
                <label for="introduced">すでにEVの運用をしている</label>
              </div>
            </dd>
          </dl>
          <!-- お問合せ内容詳細 -->
          <dl class="contact-form__item --message">
            <dt class="contact-form__label">
              <label for="message">お問合せ内容詳細</label>
            </dt>
            <dd class="contact-form__input">
              <textarea name="entry.1416404278" id="message" placeholder="お問合わせ内容を入力してください"></textarea>
            </dd>
          </dl>
          <!-- 個人情報取り扱い同意 -->
          <dl class="contact-form__item --privacy-consent">
            <dt class="contact-form__label">
              <label for="privacy-consent">個人情報の取り扱い</label>
            </dt>
            <dd class="contact-form__input --checkbox">
              <input type="checkbox" name="entry.2074742510" id="privacy-consent" required value="同意する">
              <label for="privacy-consent">同意する</label>
              <p class="contact-form__note">
                弊社Webサイトの<a href="">プライバシーポリシー</a>をご確認の上、ご同意をお願いいたします。
              </p>
            </dd>
          </dl>
          <!-- ご案内メール受信同意 -->
          <dl class="contact-form__item --mail-consent">
            <dt class="contact-form__label">
              <label for="mail-consent">広告を含むご案内メールの受信</label>
            </dt>
            <dd class="contact-form__input --checkbox">
              <input type="checkbox" name="entry.814958638" id="mail-consent" value="同意する">
              <label for="mail-consent">同意する</label>
            </dd>
          </dl>
        </div>
        <div class="contact-form__followup">
          <p class="text">後日、弊社担当者よりご連絡させていただきます。</p>
          <p class="text">回答までにお時間をいただく場合や、回答ができない場合もございますので、ご了承ください。</p>
        </div>
        <!-- 送信ボタン -->
        <div class="contact-form__submit">
          <button type="submit" class="submit-btn">確認画面へ進む</button>
        </div>
        <input type="hidden" name="dlut" value="1699513510808">
      </form>
      <script type="text/javascript">
        var submitted = false;
      </script>
      <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted)  {window.location='/contact/thanks/';}"></iframe>
    </div>
  </div>
</main>

<?php get_footer(); ?>