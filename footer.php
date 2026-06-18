  <footer class="site-footer" aria-label="Site footer">
    <div class="site-footer__inner">

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — Home">
        <?php
        $footer_logo = get_field( 'footer_logo', 'option' );
        if ( $footer_logo ) : ?>
          <img
            src="<?php echo esc_url( $footer_logo['url'] ); ?>"
            alt="<?php echo esc_attr( $footer_logo['alt'] ?: get_bloginfo( 'name' ) ); ?>"
            width="<?php echo esc_attr( $footer_logo['width'] ); ?>"
            height="<?php echo esc_attr( $footer_logo['height'] ); ?>"
            loading="lazy"
          >
        <?php endif; ?>
      </a>

      <div class="site-footer__center">
        <p class="site-footer__copy">
          Copyright &copy; 2026 <a href="home.html">Pillar Legal Marketing</a>
        </p>
        <a href="privacy.html" class="site-footer__privacy">Privacy Policy</a>
      </div>

      <ul class="site-footer__social" aria-label="Social media links">
        <li>
          <a href="https://www.facebook.com/people/Sheth-Agency/61560654701640/" aria-label="Follow on Facebook" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor" aria-hidden="true"><path d="M22 12c0-5.522-4.478-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@anupsheth?lang=en" aria-label="Follow on TikTok" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.18 8.18 0 0 0 4.78 1.52V6.74a4.85 4.85 0 0 1-1.01-.05z"/></svg>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/pillarlegalmarketing/" aria-label="Follow on Instagram" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </li>
      </ul>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
