<?php get_header(); ?>
      <div class="Title-Box">
        <p class="Title">CONTACT</p>
        <span class="Subtitle">お問い合わせ </span>
      </div>
    </section>
    <div class="Breadcrumb">
    <?php custom_breadcrumb(); ?>
    </div>
    <main class="Main">
      <section class="ContactForm">
        <p class="ContactForm-Txt">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
        <div class="ContactForm-Inner">
          <form action="#" method="post" class="Form">
              <div class="C-Contents-Top">
                <label class="Label Required">お問い合わせ種別</label>
                <ul class="Radio-Contents">
                  <li><label>
                    <input type="radio" name="type" value="お仕事のご依頼・ご相談" required>
                    お仕事のご依頼・ご相談
                  </label></li>
                  <li><label>
                    <input type="radio" name="type" value="お見積りのご依頼" required>
                    お見積りのご依頼
                  </label></li>
                  <li><label>
                    <input type="radio" name="type" value="採用について" required>
                    採用について
                  </label></li>
                  <li><label>
                    <input type="radio" name="type" value="その他" required>
                    その他
                  </label></li>
                </ul>
              </div>
              <div class="C-Contents-Bottom">
                  <div>
                    <label class="Label Required">お名前</label>
                      <input type="text" name="name" required>
                  </div>
                  <div>
                    <label class="Label">会社名</label>
                      <input type="text" name="campany">
                  </div>
                  <div>
                    <label class="Label Required">メールアドレス</label>
                      <input type="email" required>
                  </div>
                  <div>
                    <label class="Label">お電話番号（半角数字ハイフンなし）</label>
                      <input type="tel" required class="Tel-Box">
                  </div>
                  <div>
                    <label class="Label Required">お問い合わせ内容</label>
                      <textarea name="message" cols="30" rows="20" required></textarea>
                  </div>
                <div>
                  <label class="Label Required">PON DESIGNをどちらでお知りになりましたか？</label>
                    <select name="category" class="Pulldown" required>
                      <option value="">選択してください</option>
                      <option value="1">Google/Yahoo検索</option>
                      <option value="2">SNS</option>
                      <option value="3">ブログ</option>
                      <option value="4">友人や知人</option>
                      <option value="5">その他</option>
                    </select>
                </div>
                
              </div>
                <div class="Btn-Box"><a class="Submit-Btn">送信する</a></div>
          </form>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
