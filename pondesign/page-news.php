<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">NEWS</h1>
  <span class="Subtitle">お知らせ</span>
</div>
</section>
<div class="Breadcrumb">
  <?php custom_breadcrumb(); ?>
</div>
<main class="Main">
  <section class="News">
    <ul class="News-List">
      <?php
      $args = array(
        'post_type' => 'post',
        'paged' => get_query_var('paged', 1),
        'posts_per_page' => 20
      );
      $query = new WP_Query($args);
      ?>
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <li class="News-Item">
            <p class="News-Date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
            <p class="News-Cat">
              <?php
              $categories = get_the_terms($post->ID, 'category');
              if (!empty($categories)) {
                echo '<a href="' . esc_url(get_term_link($categories[0]->term_id, 'category')) . '">' . esc_html($categories[0]->name) . '</a>';
              }
              ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="News-Ttl"><?php the_title(); ?></a>

          </li>
        <?php endwhile;
        ?>
      <?php else : ?>
        <p>記事が見つかりませんでした。</p>
      <?php endif; ?>
    </ul>
    <div class="Prevnext">
      <ul class="Links">
        <?php echo paginate_links([
          "prev_text" => false,
          "next_text" => false,
          'total' => $query->max_num_pages // 追加
        ]); ?>
      </ul>
    </div>
  </section>
  <?php get_template_part('contact'); ?>
</main>
<?php get_footer(); ?>