<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">NEWS</h1>
  <span class="Subtitle">お知らせ</span>
</div>
</section>
<div class="Breadcrumb">
  <?php custom_breadcrumb(); ?>
</div>
<main class="Main Contents-Inner">
  <section class="Archives">
    <h2 class="Archives-Ttl"><?php the_title(); ?></h2>
    <div class="Archives-Box">
      <p class="Archives-Date"><time datetime="2030-02-01"><?php the_date(); ?></time></p>
      <p class="Archives-Cat">
        <?php
        $categories = get_the_terms($post->ID, 'category');
        if (!empty($categories)) {
          echo '<a href="' . esc_url(get_term_link($categories[0]->term_id, 'category')) . '">' . esc_html($categories[0]->name) . '</a>';
        } ?>
      </p>
    </div>
    <?php the_post_thumbnail('large'); ?>
    <div class="Archives-Text"><?php the_content(); ?></div>
    <?php
    // 現在のページURLを取得してURLエンコード
    $url_encode = urlencode(get_permalink());
    // 現在のページのタイトルを取得してURLエンコード
    $title_encode = urlencode(get_the_title());
    ?>
    <div class="SNS-Container">
      <ul class="SNS-List">
        <li class="SNS-X">
          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="ja" data-show-count="false">Tweet</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </li>
        <!-- Facebookの共有リンク -->
        <li class="SNS-Fb">
          <div class="fb-like" data-href="https://www.yahoo.co.jp/" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
        </li>
        <!-- hatena -->
        <li class="SNS-Hatena"><a href="https://b.hatena.ne.jp/entry/s/www.yahoo.co.jp/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label-counter" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></li>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        <!-- LINEの共有リンク -->
        <li class="SNS-Line">
          <div class="line-it-button" data-lang="ja" data-type="share-b" data-env="REAL" data-url="https://developers.line.biz/ja/docs/line-social-plugins/install-guide/using-line-share-buttons/" data-color="default" data-size="small" data-count="true" data-ver="3" style="display: none;"></div>
          <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        </li>
      </ul>

    </div>
    <?php
    // 現在のページURLを取得してURLエンコード
    $url_encode = urlencode(get_permalink());
    // 現在のページのタイトルを取得してURLエンコード
    $title_encode = urlencode(get_the_title());
    ?>
    <div class="container">
      <ul class="sns-list">
        <!-- Twitterの共有リンク -->
        <li class="sns-twitter">
          <a class="sns-link" target="_blank" href="<?php echo esc_url('https://twitter.com/share?url=' . $url_encode . '&text=' . $title_encode); ?>">Twitter</a>
        </li>
        <!-- Facebookの共有リンク -->
        <li class="sns-fb">
          <a class="sns-link" target="_blank" href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url_encode); ?>">Facebook</a>
        </li>
        <!-- pocket -->
        <li class="sns-pocket">
          <a class="sns-link" href="<?php echo esc_url("https://getpocket.com/edit?url={$url_encode}&title={$title_encode}"); ?>" target="_blank" rel="nofollow noopener">pocket</a>
        </li>
        <!-- hatena -->
        <li class="sns-hatena">
          <a class="sns-link" href="<?php echo esc_url("//b.hatena.ne.jp/add?mode=confirm&url={$url_encode}&title={$title_encode}"); ?>" target="_blank" data-hatena-bookmark-title="<?php echo esc_url(get_the_title()); ?>" title="このエントリーをはてなブックマークに追加する">はてブ</a></a>
        </li>
        <!-- LINEの共有リンク -->
        <li class="sns-line">
          <a class="sns-link" target="_blank" href="<?php echo esc_url('https://line.me/R/msg/text/?' . $title_encode . '%0A' . $url_encode); ?>">LINE</a>
        </li>
      </ul>
    </div>
    <div class="Prev">
      <?php
      $prev_post = get_previous_post();
      if (!empty($prev_post)) {
        $prev_post_url = get_permalink($prev_post->ID);
        $prev_post_title = $prev_post->post_title;
      }
      $next_post = get_next_post();
      if (!empty($next_post)) {
        $next_post_url = get_permalink($next_post->ID);
        $next_post_title = $next_post->post_title;
      } ?>
      <div class="Prev-Item">
        <?php if (!empty($prev_post)) : ?>
          <a href="<?php echo $prev_post_url ?>">
            <?php echo $prev_post_title ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="Center-Line"></div>
      <div class="Next-Item">
        <?php if (!empty($next_post)) : ?>
          <a href="<?php echo $next_post_url ?>">
            <?php echo $next_post_title ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
    <div class="News-Top"><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS一覧</a></div>
  </section>
</main>
<?php get_template_part('contact'); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v19.0" nonce="FtPMyiZJ"></script>
<?php get_footer(); ?>