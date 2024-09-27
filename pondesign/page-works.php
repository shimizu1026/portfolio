<?php get_header(); ?>
<div class="Title-Box">
  <h1 class="Title">WORKS</h1>
  <span class="Subtitle">制作実績</span>
</div>
</section>
<div class="Breadcrumb">
  <?php custom_breadcrumb(); ?>
</div>
<section class="Works">
  <section class="Works-Contents">
    <?php
    $args = array(
      'post_type' => 'works',
      'posts_per_page' => 20,
      'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <figure class="Works-Card">
          <?php the_post_thumbnail(); ?>
          <figcaption class="Works-Ttl"><?php the_title(); ?></figcaption>
        </figure>
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
  </section>
</section>
</main>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>