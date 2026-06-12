<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- =====================================================
       HEADER
  ====================================================== -->
  <header class="site-header">
    <div class="site-header__inner">

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home">
        <?php
        $logo_id  = get_theme_mod( 'custom_logo' );
        $logo_url = $logo_id ? wp_get_attachment_image_url( $logo_id, 'full' ) : '';
        ?>
        <?php if ( $logo_url ) : ?>
          <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="180" height="36">
        <?php else : ?>
          <span class="site-header__logo-text"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </a>

      <nav class="site-nav" id="site-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'pillarlegalmarketing' ); ?>">
        <button
          class="site-nav__close"
          aria-label="<?php esc_attr_e( 'Close navigation', 'pillarlegalmarketing' ); ?>"
          onclick="document.getElementById('site-nav').classList.remove('is-open'); document.querySelector('.site-header__menu-toggle').setAttribute('aria-expanded','false');"
        >
          <span></span>
          <span></span>
        </button>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'site-nav__list',
          'fallback_cb'    => false,
        ) );
        ?>
      </nav>

      <button
        class="site-header__menu-toggle"
        aria-label="<?php esc_attr_e( 'Toggle navigation', 'pillarlegalmarketing' ); ?>"
        aria-expanded="false"
        aria-controls="site-nav"
        onclick="this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'false' ? 'true' : 'false'); document.getElementById('site-nav').classList.toggle('is-open');"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </header>

  <main id="main-content">
