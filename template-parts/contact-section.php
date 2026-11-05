<section class="u73" id="contact">
  <div class="u29">
    <div class="u30">
      <p class="u31">Contact Us</p>
      <h2 class="u32">Let's Talk About Your Firm's Online Presence</h2>
      <p class="u33">Whether you're launching a new practice, considering a website redesign, or looking to improve your search visibility, we'd be happy to learn more about your goals.</p>
      <p class="u33">Tell us a little about your firm and what you're hoping to accomplish.</p>
    </div>

    <div class="contact-form">
      <?php
      if ( function_exists( 'gravity_form' ) ) {
        // Form 1 = "Contact form". Uses the basic "gravity-theme" so the theme's CSS can style it.
        gravity_form( 1, false, false, false, null, true, 0, true, 'gravity-theme' );
      }
      ?>
    </div>
  </div>
</section>
