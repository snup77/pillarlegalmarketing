<?php
/*
Template Name: About Page
Template Post Type: page
Description: A custom template for displaying the about page.
*/

?>    

    <?php get_header(); ?> 
 
 <!-- =====================================================
         PAGE HERO
    ====================================================== -->
    <section class="page-hero" aria-labelledby="page-title">
      <h1 class="page-hero__heading" id="page-title">About</h1>
    </section>

    <!-- =====================================================
         OUR STORY (image left, text right)
    ====================================================== -->
    <section class="section section--white" id="story" aria-labelledby="story-heading">
      <div class="container">
        <div class="service-row service-row--img-left">
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/anup-about-page-pic-scaled-1.jpg' ) ); ?>"
              alt="Anup Sheth, Founder & Principal of Pillar Legal Marketing"
              loading="lazy"
            >
          </div>
          <div class="service-row__content">
            <p class="overline">Our Story</p>
            <h2 id="story-heading">AI Search Strategist for Law Firms</h2>
            <p style="font-weight: 600; color: var(--text-heading);">Anup Sheth, Founder &amp; Principal</p>
            <p>Anup created Pillar Legal Marketing to help solo attorneys and small law firms build a digital presence that performs in the age of AI-driven search. He combines deep knowledge of SEO, website architecture, and AI search infrastructure with a firsthand understanding of the legal profession gained from his years as a paralegal at two prominent New York law firms.</p>
            <p>Anup lives in Atlantic Highlands, New Jersey, with his wife and daughter. In his free time, he practices Brazilian Jiu Jitsu and enjoys tinkering with code.</p>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>