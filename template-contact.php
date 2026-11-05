<?php
/*
Template Name: Contact Page
Template Post Type: page
Description: A custom template for displaying the contact page.
*/

get_header();
?>

  <!-- =====================================================
       CONTACT
  ====================================================== -->
  <section class="u73" id="top">
    <div class="u344">
      <div class="u345">
        <p class="u31">Contact</p>
        <h1 class="u136">Let's Talk About Your Firm</h1>
        <p class="u346">Whether you're launching a new practice, improving your website, or looking for help with digital marketing, we'd love to hear from you.</p>
        <p class="u347">Tell us a little about your firm and what you're looking to accomplish. We'll be in touch to discuss how Pillar Legal Marketing can help.</p>
      </div>

      <div class="contact-form contact-form--page">
        <?php
        if ( function_exists( 'gravity_form' ) ) {
          // Form 1 = "Contact form". Uses the basic "gravity-theme" so the theme's CSS can style it.
          gravity_form( 1, false, false, false, null, true, 0, true, 'gravity-theme' );
        }
        ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
