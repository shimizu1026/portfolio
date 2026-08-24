<?php get_header(); ?>
<main class="Main">
  <div class="Wrapper">
    <?php get_sidebar(); ?>
    <div class="Search-Result">
      <p class="Search-Text"><?php echo '「' . get_search_query() . '」の検索結果：' . $wp_query->found_posts . ' 件'; ?></p>

      <div class="Search-Contents">
        <?php
        $area_array = ['島根県', '出雲市', '松江市', '雲南市', '仁多郡', '大田市', '安来市', '浜田市', '益田市','鳥取県', '鳥取市', '米子市', '西伯郡', '東伯郡', '境港市', '倉吉市', '八頭郡','その他', '全国', '広島県', '三次市'];
        ?>
        <?php foreach($area_array as $area):?>
        <?php
        $args = array(
          's' => get_search_query(),
          // 'post_type' => 'test',
          'posts_per_page' => -1,
          // 'meta_key' => 'area',
          // 'meta_value' => $area
          'meta_query' => [
            'relation' => 'AND',

            [
              'key'     => 'area',
              'value'   => $area,
            ],
            // [
            //   'key'     => 'name',
            //   'orderby' => 'meta_value',
            //   'order' => 'DESC',
            // ],
          ],
        );
        // クエリの定義
        $wp_query = new WP_Query($args);
        ?>
        <?php if ($wp_query->have_posts()) : ?>
        <?php while ($wp_query->have_posts()):
            $wp_query->the_post();?>
            <article class="Stores">
              <a href="<?php the_permalink(); ?> " ontouchstart="" target="_blank" class="Stores-Link">
                <div class="Stores-Contents">
                  <div class="Img-Box">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                  <div class="Stores-Inner">
                    <p class="Stores-Cat"><?php the_field('area'); ?>／<?php the_field('category'); ?></p>
                    <h2 class="Stores-Name"><?php the_field('name'); ?></h2>
                  </div>
                </div>
              </a>
              <div class="Favorite-Img"></div>
            </article>
   

          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata();?>
          <?php endforeach; ?>
      </div>

    </div>
  </div>
  <!-- /.Wrapper -->
</main>

<?php get_footer(); ?>