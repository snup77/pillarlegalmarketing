<?php get_header(); ?>

  <!-- 404 -->
  <section class="u15" id="top">
    <div class="u364">
      <div class="u365">
        <p class="u31">Error 404</p>
        <h1 class="u136">We couldn't find that page.</h1>
        <p class="u33">The page you're looking for may have moved, been renamed, or no longer exists. Head back to the homepage, or get in touch and we'll help you find what you need.</p>
        <div class="u351">
          <a class="btn btn-primary u352" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to the Homepage</a>
          <a class="btn btn-secondary u353" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
