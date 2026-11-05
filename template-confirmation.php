<?php
/*
Template Name: Confirmation Page
Template Post Type: page
Description: A custom template for displaying the confirmation page.
*/

get_header();

$blog_page_id = (int) get_option( 'page_for_posts' );
$blog_url     = $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/blog/' );
?>

  <!-- THANK YOU -->
  <section class="u15" id="top">
    <div class="u349">
      <div class="u350">
        <p class="u31">Message sent</p>
        <h1 class="u136">Thank you for reaching out.</h1>
        <p class="u33">We've received your message and will get back to you within one business day.</p>
        <div class="u351">
          <a class="btn btn-primary u352" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to the Homepage</a>
          <a class="btn btn-secondary u353" href="<?php echo esc_url( $blog_url ); ?>">Read Our Insights</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
