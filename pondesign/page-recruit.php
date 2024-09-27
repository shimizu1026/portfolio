<?php get_header(); ?>
<div class="Title-Box">
  <p class="Title">RECRUIT</p>
  <span class="Subtitle">採用情報</span>
</div>
</section>
<div class="Breadcrumb">
  <?php custom_breadcrumb(); ?>
</div>
<main class="Main">
  <section class="Recruit">
    <div class="Inner Recruit-Copy">
      <h2 class="Recruit-Ttl">Enjoy Creation for Client</h2>
      <p class="Recruit-Subttl">楽しむ心が良いモノを生む</p>
      <p class="Recruit-Text">心を弾ましながら<br>
        夢いっぱいのサイトを作ろう！<br>
        お客様も自分もみんなが幸せになれるように</p>
    </div>
    <img class="Recruit-Hero" src="<?php echo esc_url(get_theme_file_uri('resources/images/recruit/recruit_pc.png')) ?>" alt="" width="1440" height="779" decoding="async" loading="lazy">

    <section class="Entry">
      <h3 class="Entry-Ttl">募集中の職種</h3>
      <section class="Entry-Contents">
      <?php if(get_post_meta($post->ID, 'occupation',true)): ?>
        <h3 class="Entry-Job"><?php the_field('occupation'); ?></h3>
        <?php endif; ?>
        <dl class="Entry-Inner">
          <dt class="Entry-Label">雇用形態</dt>
          <?php if(get_post_meta($post->ID, 'status',true)): ?>
          <dd class="Entry-Description"><?php the_field('status'); ?></dd>
          <?php endif; ?>
        </dl>
        <dl class="Entry-Inner">
          <dt class="Entry-Label">給与</dt>
          <?php if(get_post_meta($post->ID, 'salary',true)): ?>
          <dd class="Entry-Description Font-M"><?php the_field('salary'); ?></dd>
          <?php endif; ?>
        </dl>
        <dl class="Entry-Inner">
          <dt class="Entry-Label">仕事内容</dt>
          <?php if(get_post_meta($post->ID, 'job',true)): ?>
          <dd class="Entry-Description">
            <?php echo nl2br(get_post_meta($post->ID, 'job', true)); ?></dd>
            <?php endif; ?>
        </dl>
        <dl class="Entry-Inner">
          <dt class="Entry-Label">勤務時間</dt>
          <?php if(get_post_meta($post->ID, 'hours',true)): ?>
          <dd class="Entry-Description Font-M"><?php the_field('hours'); ?></dd>
          <?php endif; ?>
        </dl>
        <div class="Entry-Inner">
          <p class="Entry-Label">応募資格</p>
          <?php if(get_post_meta($post->ID, 'hours',true)): ?>
          <ul class="Entry-Skill">
            <?php echo nl2br(get_post_meta($post->ID, 'requirements', true)); ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="Btn-Box">
          <div class="Entry-Btn">
            <a href="">応募する</a>
          </div>
          <span class="Entry-Next">求人サイトへ遷移します</span>
        </div>
      </section>
    </section>
    <section class="Movie Inner">
      <h3 class="Movie-Ttl">社内ムービー</h3>
      <iframe src="https://www.youtube.com/embed/ir-ifwjdn4A?si=BX5QnVtUcZ0t0658" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>
  </section>
</main>
<?php get_footer(); ?>