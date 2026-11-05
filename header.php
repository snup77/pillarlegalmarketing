<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Playfair+Display:wght@500&amp;display=swap" rel="stylesheet">

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

<div class="u1">

  <!-- =====================================================
       HEADER
  ====================================================== -->
  <header class="u2">
    <div class="u3">

      <?php
      $pillar_logo_id  = get_theme_mod( 'custom_logo' );
      $pillar_logo_url = $pillar_logo_id ? wp_get_attachment_image_url( $pillar_logo_id, 'full' ) : '';
      ?>
      <a class="u4" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php if ( $pillar_logo_url ) : ?>
          <img class="u5" src="<?php echo esc_url( $pillar_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — home" width="150" height="44">
        <?php else : ?>
          <span class="u8"><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </a>

      <!-- Navigation: inline on desktop, slide-out panel on mobile (≤860px) -->
      <div class="site-menu" id="site-menu">
        <button
          class="menu-backdrop"
          type="button"
          tabindex="-1"
          aria-label="<?php esc_attr_e( 'Close menu', 'pillarlegalmarketing' ); ?>"
          data-menu-close
        ></button>

        <nav class="menu-panel" aria-label="<?php esc_attr_e( 'Primary', 'pillarlegalmarketing' ); ?>">
          <div class="menu-panel__head">
            <button
              class="u9"
              type="button"
              aria-label="<?php esc_attr_e( 'Close menu', 'pillarlegalmarketing' ); ?>"
              data-menu-close
            >
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"></path></svg>
            </button>
          </div>

          <div class="menu-panel__links">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'depth'          => 1,
              'fallback_cb'    => false,
              'walker'         => new Pillarlegalmarketing_Flat_Nav_Walker(),
              'link_class'     => 'nav-link',
              'link_attrs'     => array( 'data-menu-close' => '' ),
            ) );
            ?>
          </div>
        </nav>
      </div>

      <!-- Mobile menu toggle (hidden on desktop) -->
      <div class="nav-mobile">
        <button
          class="u9"
          type="button"
          aria-label="<?php esc_attr_e( 'Open menu', 'pillarlegalmarketing' ); ?>"
          aria-expanded="false"
          aria-controls="site-menu"
          data-menu-open
        >
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"></path></svg>
        </button>
      </div>

    </div>
  </header>

  <main id="main-content">
