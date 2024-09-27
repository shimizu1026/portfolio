<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
      <section class="Top">
        <header class="Header" id="Header">
          <div class="Logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img
                src="<?php echo esc_url(get_theme_file_uri('resources/images/logo.svg'))?>"
                alt=""
                width="160"
                height="17"
                decoding="async"
                loading="lazy"
              />
            </a>
          </div>
          <button class="Button">
            <div class="Button-LineTop"></div>
            <div class="Button-LineMedium"></div>
            <div class="Button-LineBottom"></div>
          </button>
          <nav class="Nav" id="Nav">
          <ul class="Nav__List">
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="Nav__Link">NEWS</a></li>
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/service/')); ?>" class="Nav__Link">SERVICE</a></li>
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/works/')); ?>" class="Nav__Link">WORKS</a></li>
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/company/')); ?>" class="Nav__Link">COMPANY</a></li>
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="Nav__Link">RECRUIT</a></li>
            <li class="Nav__Item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="Nav__Link">CONTACT</a></li>
          </ul>
          </nav>
          <div class="Overlay"></div>
        </header>
        