<?php
/*
Template Name: Confirmation Page
Template Post Type: page
Description: A custom template for displaying the confirmation page.
*/

?>    

<?php get_header(); ?>

<section class="confirmation-section">
  <div class="container">
    <div class="confirmation-content">

      <div class="confirmation-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true">
          <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
        </svg>
      </div>

      <h1 class="confirmation-heading">Thank you for completing this form!</h1>
      <p class="confirmation-text">We'll be in touch with you within 1 business day.</p>
      <a href="/" class="confirmation-btn">Visit Home</a>

    </div>
  </div>
</section>

<?php get_footer(); ?>