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
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NFMT7HJ9');</script>
  <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFMT7HJ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </header>

  <main id="main-content">
