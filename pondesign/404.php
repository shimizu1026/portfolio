<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">404 Not Found（ページが見つかりませんでした）</h1>
</div>
</section>
<main class="Main">
  <div class="Contents-Inner">
    <h2>404 Not Found（ページが見つかりませんでした）</h2>
    <p class="Error-Txt">指定された以下のページは存在しないか、または移動した可能性があります。</p>
    <p class="Error-Url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
    <p class="Error-Txt">現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
    <?php get_search_form(); ?><!-- 検索フォームを表示 -->
    <p class="Error-Txt"><a href="<?php echo home_url(); ?>">トップページへ</a></p>
  </div>
</main>
<?php
get_footer();