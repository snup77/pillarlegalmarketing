<?php get_header(); ?>

<section class="confirmation-section">
  <div class="container">
    <div class="confirmation-content">
      <h1 class="confirmation-heading">Page Not Found</h1>
      <p class="confirmation-text">Sorry, but the webpage you're looking for doesn't exist on this site.</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="confirmation-btn">Visit Homepage</a>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>