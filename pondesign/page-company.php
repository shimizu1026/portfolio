<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">COMPANY</h1>
  <span class="Subtitle">私たちについて</span>
</div>
</section>
<div class="Breadcrumb">
<?php custom_breadcrumb(); ?>
</div>
<main class="Main">
  <section class="Company">
    <div class="Company-Inner Contents-Inner">
      <img class="Company-Left" src="<?php echo esc_url(get_theme_file_uri('resources/images/company_left.png')) ?>" alt="" width="306" height="416" decoding="async" loading="lazy" />
      <div class="Company-Message">
        <h2 class="Message-Ttl">メッセージ</h2>
        <p class="Message-Copy">サイトのゴール = 夢を叶えること</p>
        <p class="Message-Text">
          お客様の夢を叶えること。
          それがWebサイトのゴールであり、私たちが目指すことです。<br />
          だからこそちゃんと成果を出すサイトを全力でお作りします。<br />
          お客様の笑顔を見たい。<br />
          夢を実現する手助けをさせてください。
        </p>
      </div>
      <img class="Company-Right" src="<?php echo esc_url(get_theme_file_uri('resources/images/company_right.png')) ?>" alt="" width="306" height="416" decoding="async" loading="lazy" />
    </div>
    <div class="CEO-Message-Unit Contents-Inner">
      <picture>
        <source srcset="<?php echo esc_url(get_theme_file_uri('resources/images/company/CEO_sp.jpg')) ?>" media="(min-width: 786px)">
        <img class="CEO-Img" src="<?php echo esc_url(get_theme_file_uri('resources/images/company/CEO.jpg')) ?>" alt="" width="445" height="330" decoding="async" loading="lazy" />
      </picture>
      <div class="CEO-Message">
        <p>
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        </p>
        <p>
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        </p>
        <p>代表取締役社長 猫山ポン太郎</p>
      </div>
    </div>
    <div class="Company-Overview">
      <h2 class="Company-Overview-Ttl">会社概要</h2>
      <ul class="Company-Overview-List">
        <li class="Company-Overview-Label">社名</li>
        <li class="Company-Overview-Description">株式会社PON DESIGN</li>
      </ul>
      <ul class="Company-Overview-List">
        <li class="Company-Overview-Label">設立</li>
        <li class="Company-Overview-Description"><time datetime="2020-01-10">2020.01.10</time></li>
      </ul>
      <ul class="Company-Overview-List">
        <li class="Company-Overview-Label">代表取締役</li>
        <li class="Company-Overview-Description">猫山ポン太郎</li>
      </ul>
      <ul class="Company-Overview-List">
        <li class="Company-Overview-Label">資本金</li>
        <li class="Company-Overview-Description">1,000,000円</li>
      </ul>
      <ul class="Company-Overview-List">
        <li class="Company-Overview-Label">所在地</li>
        <li class="Company-Overview-Description">〒555-5555 東京都千代田区 ポンビルディング 606</li>
      </ul>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25924.77829322948!2d139.73577964014623!3d35.686916802329726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0c0b13f54d%3A0xb630953beee48188!2z5p2x5Lqs6YO95Y2D5Luj55Sw5Yy6!5e0!3m2!1sja!2sjp!4v1698034281336!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
</main>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>