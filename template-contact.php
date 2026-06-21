<?php
/*
Template Name: Contact Page
Template Post Type: page
Description: A custom template for displaying the contact page.
*/

?>    

    <?php get_header(); ?>    
    
    
    
    <!-- =====================================================
         PAGE HERO
    ====================================================== -->
    <section class="page-hero" aria-labelledby="page-title">
      <h1 class="page-hero__heading" id="page-title">Contact</h1>
      <p class="page-hero__subtext">Fill out the contact form below and we'll contact you within 1 business day.</p>
    </section>

    <!-- =====================================================
         GET IN TOUCH (form + side card)
    ====================================================== -->
    <section class="section section--white" id="get-in-touch" aria-labelledby="get-in-touch-heading">
      <div class="container">
        <div class="contact-page-layout">

          <div class="contact-page-form">
            <p class="overline">Contact</p>
            <h2 id="get-in-touch-heading">Get in Touch</h2>

            <?php gravity_form( 1, false, false, false, null, true ); ?>
          </div>

          <div class="contact-card">
            <img
              src="https://pillarlegalmarketing.com/wp-content/uploads/2023/12/law-firm-31.jpg"
              alt="Scales of justice"
              loading="lazy"
            >
            <p class="contact-card__heading">Let's Talk!</p>
            <p class="contact-card__email">Email: <a href="mailto:hello@pillarlegalmarketing.com">hello@pillarlegalmarketing.com</a></p>
          </div>

        </div>
      </div>
    </section>

    <?php get_footer(); ?>