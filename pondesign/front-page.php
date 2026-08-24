<?php get_header('top'); ?>
<div class="Title-Box">
  <h1 class="Hero-Title">WEB <br class="sp">DESIGN <br class="sp">SPECIALIST</h1>
  <p class="Hero-SubTitle">お客様の夢を叶える<br class="sp">Webサイトを制作</p>
  <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="Contact-Btn">CONTACT</a>
</div>
<div class="arrowWrap">
  <div class="arrowInner">
    <p>SCROLL</p>
    <div class="arrow"></div>
  </div>
</div>
</section>
<main class="Main">
  <div class="Contents-Inner">

    <section class="News" id="News">
      <div class="News-Inner">
        <h2 class="News-Title">NEWS<span class="News-Subtitle">お知らせ</span></h2>
      </div>
      <div class="News-Inner">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="News-List">
              <div class="News-List-Inner">
                <p class="News-Date">
                  <time datetime="2030-02-01"><a href="<?php the_permalink(); ?>"><?php the_time('Y.m.d'); ?></a></time>
                </p>
                <p class="News-Category">
                  <?php
                  $categories = get_the_terms($post->ID, 'category');
                  if (!empty($categories)) {
                    echo '<a href="' . esc_url(get_term_link($categories[0]->term_id, 'category')) . '">' . esc_html($categories[0]->name) . '</a>';
                  } ?>
                </p>
              </div>
              <h3 class="News-Contents">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
  </div>

  <div class="Contents-Inner">
    <section class="Service">
      <h2 class="Service-Title">SERVICE<span class="Service-Subtitle">事業内容</span></h2>
      <div class="Card-Box">
        <article class="Card">
          <img class="Card-Image" src="<?php echo esc_url(get_theme_file_uri('resources/images/pc.jpg')) ?>" alt="" width="350" height="220" decoding="async" loading="lazy" />
          <h3 class="Card-Title">Webサイト制作</h3>
          <p class="Card-Text">
            新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。
          </p>
        </article>
        <article class="Card">
          <img class="Card-Image" src="<?php echo esc_url(get_theme_file_uri('resources/images/tab.jpg')) ?>" alt="" width="350" height="220" decoding="async" loading="lazy" />
          <h3 class="Card-Title">Webサイト運用</h3>
          <p class="Card-Text">
            サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。
          </p>
        </article>
        <article class="Card">
          <img class="Card-Image" src="<?php echo esc_url(get_theme_file_uri('resources/images/sp.jpg')) ?>" alt="" width="350" height="220" decoding="async" loading="lazy" />
          <h3 class="Card-Title">アプリ開発</h3>
          <p class="Card-Text">
            スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。
          </p>
        </article>
      </div>
      <a href="<?php echo esc_url(home_url('/service/')); ?>" class="More-Btn Btn-Non">MORE</a>
    </section>
  </div>
  <section class="Works-Wrapper">
    <section class="Works">
      <div class="Works-Slider">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./resources/images/smoothiesta.png')) ?>" alt="" class="swiper-slide-image" width="750" height="510" decoding="async" loading="lazy" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./resources/images/web-conference.png')) ?>" alt="" class="swiper-slide-image" width="750" height="510" decoding="async" loading="lazy" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./resources/images/lamina.png')) ?>" alt="" class="swiper-slide-image" width="750" height="510" decoding="async" loading="lazy" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./resources/images/citylab.png')) ?>" alt="" class="swiper-slide-image" width="750" height="510" decoding="async" loading="lazy" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./resources/images/tabilog.png')) ?>" alt="" class="swiper-slide-image" width="750" height="510" decoding="async" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="Works-Inner">
        <h2 class="Works-Title">WORKS<span class="Works-Subtitle">制作実績</span></h2>
        <p class="Works-Text">
          様々なジャンルのWebサイト制作が可能です。<br>
          ご購入やお申込み数の増加などを実現します！
        </p>
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="More-Btn">MORE</a>
      </div>
      </div>
    </section>
  </section>

  <section class="Company">
    <img src="<?php echo esc_url(get_theme_file_uri('resources/images/company_left.png')) ?>" alt="" width="306" height="416" decoding="async" loading="lazy" class="Company-Left">
    <div class="Company-Inner">
      <h2 class="Company-Title">COMPANY<span class="Company-Subtitle">私たちについて</span></h2>
      <p class="Company-Copy"><span>サイトのゴール=</span><br class="sp"><span>夢を叶えること</span></p>
      <p class="Company-Text">
        お客様の夢を叶えること。<br>
        それがWebサイトのゴールであり、私たちが目指すことです。<br>
        だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
        お客様の笑顔を見たい。 夢を実現する手助けをさせてください。
      </p>
      <a href="<?php echo esc_url(home_url('/company/')); ?>" class="More-Btn">MORE</a>
    </div>
    <img src="<?php echo esc_url(get_theme_file_uri('resources/images/company_right.png')) ?>" alt="" width="306" height="416" decoding="async" loading="lazy" class="Company-Right">
  </section>

  <section class="Recruit">
    <section class="Recruit-Text">
      <div class="Recruit-Box">
        <h2 class="Recruit-Title">RECRUIT<span class="Recruit-Subtitle">採用情報</span></h2>

        <p class="Recruit-Copy">私たちと一緒に働きませんか？</p>
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="More-Btn">MORE</a>
      </div>
    </section>
    <div class="Recruit-Imagebox">
      <img src="<?php echo esc_url(get_theme_file_uri('resources/images/recruit.jpg')) ?>" alt="" width="665" height="340" decoding="async" loading="lazy" />
    </div>
  </section>
  <?php get_template_part('contact'); ?>
</main>
<?php get_footer(); ?>