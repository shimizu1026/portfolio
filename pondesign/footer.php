<div class="Top-Btn">
        <a href="#"
          ><img
            src="<?php echo esc_url(get_theme_file_uri('resources/images/page-top.png'))?>"
            alt="トップ"
            width="50"
            height="50"
            decoding="async"
            loading="lazy"
        /></a>
      </div>
<footer class="Footer">
      <nav class="Sitemap">
        <ul class="Sitemap__List">
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="Sitemap__Link">NEWS</a>
          </li>
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/service/')); ?>" class="Sitemap__Link">SERVICE</a>
          </li>
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="Sitemap__Link">WORKS</a>
          </li>
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/company/')); ?>" class="Sitemap__Link">COMPANY</a>
          </li>
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="Sitemap__Link">RECRUIT</a>
          </li> 
          <li class="Sitemap__Item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="Sitemap__Link">CONTACT</a>
          </li>
        </ul>
      </nav>

      <p class="Copyright"><small>© PON DESIGN</small></p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
