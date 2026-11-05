  </main>

  <!-- =====================================================
       FOOTER
  ====================================================== -->
  <footer class="u123">
    <div class="footer-inner u124">

      <a class="u125" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php
        $footer_logo = function_exists( 'get_field' ) ? get_field( 'footer_logo', 'option' ) : null;
        if ( $footer_logo ) : ?>
          <img
            class="u126"
            src="<?php echo esc_url( $footer_logo['url'] ); ?>"
            alt="<?php echo esc_attr( $footer_logo['alt'] ?: get_bloginfo( 'name' ) . ' — home' ); ?>"
            width="147"
            height="44"
            loading="lazy"
          >
        <?php else : ?>
          <span><?php bloginfo( 'name' ); ?></span>
        <?php endif; ?>
      </a>

      <div class="u127">
        <span>Copyright &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
        <?php $privacy_url = get_privacy_policy_url() ?: home_url( '/privacy/' ); ?>
        <a class="footer-link u128" href="<?php echo esc_url( $privacy_url ); ?>"><?php esc_html_e( 'Privacy Policy', 'pillarlegalmarketing' ); ?></a>
      </div>

      <nav class="footer-social u129" aria-label="<?php esc_attr_e( 'Social media', 'pillarlegalmarketing' ); ?>">
        <a
          class="social-btn u130"
          href="https://www.facebook.com/people/Sheth-Agency/61560654701640/"
          aria-label="Pillar Legal Marketing on Facebook"
          target="_blank"
          rel="noopener noreferrer"
        >
          <svg width="22" height="22" viewBox="0 0 24 24" fill="#FFFFFF" aria-hidden="true"><path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.5c-1.5 0-1.96.93-1.96 1.89v2.26h3.32l-.53 3.5h-2.8V24C19.62 23.1 24 18.1 24 12.07"></path></svg>
        </a>
        <a
          class="social-btn u130"
          href="https://www.tiktok.com/@anupsheth?lang=en"
          aria-label="Pillar Legal Marketing on TikTok"
          target="_blank"
          rel="noopener noreferrer"
        >
          <svg width="20" height="20" viewBox="0 0 24 24" fill="#FFFFFF" aria-hidden="true"><path d="M12.53.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path></svg>
        </a>
        <a
          class="social-btn u130"
          href="https://www.instagram.com/pillarlegalmarketing/"
          aria-label="Pillar Legal Marketing on Instagram"
          target="_blank"
          rel="noopener noreferrer"
        >
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" aria-hidden="true"><rect x="2.5" y="2.5" width="19" height="19" rx="5.5"></rect><circle cx="12" cy="12" r="4.3"></circle><circle cx="17.6" cy="6.4" r="1.1" fill="#FFFFFF" stroke="none"></circle></svg>
        </a>
      </nav>

    </div>
  </footer>

</div><!-- .u1 -->

<?php wp_footer(); ?>
</body>
</html>
