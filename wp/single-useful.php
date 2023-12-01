<?php get_header(); ?>

<main class="useful-single__main sng-useful">
  <div class="useful-single__containers containers--md">
    <div class="useful-single__wrapper">
      <div class="useful-single__body">
        <div class="useful-single__entry useful-entry">
          <div class="useful-entry__head">
            <h1 class="useful-entry__head-ttl"><?php the_title(); ?></h1>
            <div class="useful-entry__head-slider">
              <?php $detail_image_arr = CFS()->get('detail_image'); ?>
              <div class="slider" id="wp-slick">
                <div>
                  <?php the_post_thumbnail(); ?>
                </div>
                <?php if (!empty($detail_image_arr)) : ?>
                  <?php foreach ($detail_image_arr as $val) : ?>
                    <div>
                      <img src="<?php echo $val['image'] ?>" alt="<?php strip_tags(get_the_title()); ?>">
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
            <h2 class="useful-entry__head-lead"><?php echo wp_kses(CFS()->get('lead'), $allowed_html); ?></h2>

          </div>

          <?php $paragraph_arr = CFS()->get('paragraph'); ?>
          <?php if (!empty($paragraph_arr)) :
            $i = 0;
          ?>
            <div id="toc_container" class="useful-entry__table-contents">
              <h2 class="toc_title">本資料の目次</h2>
              <ul class="toc_list">
                <?php foreach ($paragraph_arr as $paragraph) :
                  $i++;
                  $i2 = 0;
                ?>
                  <li><?php echo esc_html(strip_tags($paragraph['title'])) ?>
                    <?php if (!empty($paragraph['caption'])) : ?>
                      <ul>
                        <?php foreach ((array)$paragraph['caption'] as $caption) :
                          $i2++;
                        ?>
                          <li><?php echo esc_html(strip_tags($caption['caption_title'])) ?></li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

        </div>
      </div>

      <!-- sideber -->
      <aside class="useful-single__sidebar sidebar-cta">
        <div class="sidebar-cta">
          <h2 class="sidebar-cta__ttl">
            ダウンロード申し込みフォーム
          </h2>
          <p class="sidebar-cta__text">
            こちらのフォームにご記入ください<span>【所要時間：1分】</span>
          </p>
          <form action="<?php echo CFS()->get('form_id'); ?>" method="post" class="sidebar-cta__form sidebar-form contact-form" target="hidden_iframe" onsubmit="submitted=true;">
            <!-- 姓 -->
            <dl class="contact-form__item --mail">
              <dt class="contact-form__label">
                <label for="first-name">姓</label>
              </dt>
              <dd class="contact-form__input">
                <input type="text" name="entry.1412975635" id=" first-name" placeholder="例）山田" required>
              </dd>
            </dl>
            <!-- 名 -->
            <dl class="contact-form__item --mail">
              <dt class="contact-form__label">
                <label for="last-name">名</label>
              </dt>
              <dd class="contact-form__input">
                <input type="text" name="entry.309209273" id="last-name" placeholder="例）太郎" required>
              </dd>
            </dl>
            <!-- メールアドレス -->
            <dl class="contact-form__item --mail">
              <dt class="contact-form__label">
                <label for="email">お勤め先のメールアドレス</label>
              </dt>
              <dd class="contact-form__input">
                <input type="email" name="entry.1175618442" id="email" placeholder="例）example@ennet.co.jp" required>
              </dd>
            </dl>
            <!-- 電話 -->
            <dl class="contact-form__item --tel">
              <dt class="contact-form__label">
                <label for="tel">電話番号</label>
              </dt>
              <dd class="contact-form__input">
                <input type="tel" name="entry.1977249847" id="tel" placeholder="例）090-0000-0000" required>
              </dd>
            </dl>
            <!-- 会社名 -->
            <dl class="contact-form__item --company-name">
              <dt class="contact-form__label">
                <label for="company-name">会社名</label>
              </dt>
              <dd class="contact-form__input">
                <input type="text" name="entry.1432595573" id="company-name" placeholder="例）株式会社エネット" required>
              </dd>
            </dl>
            <!-- EV導入のご状況 -->
            <dl class="contact-form__item --ev-status">
              <dt class="contact-form__label">
                <span>貴社のEV導入のご状況を教えてください。</span>
              </dt>
              <dd class="contact-form__input --radio">
                <div class="radio-item">
                  <input type="radio" name="entry.1568877221" id="not-introduced" value="情報収集中／導入検討中" required>
                  <label for="not-introduced">情報収集中／導入検討中</label>
                </div>
                <div class="radio-item">
                  <input type="radio" name="entry.1568877221" id="introduced" value="すでにEV運用をしている" required>
                  <label for="introduced">すでにEVの運用をしている</label>
                </div>
              </dd>
            </dl>
            <!-- 個人情報取り扱い同意 -->
            <dl class="contact-form__item --privacy-consent">
              <dt class="contact-form__label">
                <label for="privacy-consent">個人情報の取り扱い</label>
              </dt>
              <dd class="contact-form__input --checkbox">
                <input type="checkbox" name="entry.2141675310" id="privacy-consent" required value="同意する">
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
                <input type="checkbox" name="entry.679909496" id="mail-consent" value="同意する">
                <label for="mail-consent">同意する</label>
              </dd>
            </dl>

            <!-- 送信ボタン -->
            <div class="sidebar-form__submit">
              <button type="submit" class="submit-btn --small">確認画面へ進む</button>
            </div>
            <input type="hidden" name="dlut" value="1699513510808">
          </form>
          <script type="text/javascript">
            var submitted = false;
          </script>
          <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted)  {window.location='/useful-thanks/';}"></iframe>
        </div>
      </aside>
    </div>
  </div>

  <?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>