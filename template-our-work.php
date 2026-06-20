<?php
/*
Template Name: Our Work Page
Template Post Type: page
Description: A custom template for displaying the our work page.
*/

?>    

    <?php get_header(); ?>
    
    <!-- =====================================================
         PAGE HERO
    ====================================================== -->
    <section class="page-hero" aria-labelledby="page-title">
      <h1 class="page-hero__heading" id="page-title">Our Work</h1>
      <p class="page-hero__subtext">We build AI-ready websites and digital infrastructure for solo attorneys and small law firms, designed to perform in both traditional and AI-driven search.</p>
    </section>

    <!-- =====================================================
         OUR APPROACH (intro)
    ====================================================== -->
    <section class="section section--white section--center" aria-labelledby="approach-heading">
      <div class="container">
        <p class="overline">Our Approach</p>
        <h2 id="approach-heading">Built for Today. Ready for Tomorrow.</h2>
        <p class="section__body">Every website we build starts with the same question: will this help this firm get found by the clients who need them most. We combine professional design and proven SEO strategy with the AI-ready technical foundation that modern search demands.</p>
      </div>
    </section>

    <!-- =====================================================
         PORTFOLIO — Jeff Rendel Law Group (text left, image right)
    ====================================================== -->
    <section class="section section--alt" id="jeff-rendel" aria-labelledby="jeff-rendel-heading">
      <div class="container">
        <div class="service-row">
          <div class="service-row__content">
            <p class="overline">Jeff Rendel Law Group</p>
            <h2 id="jeff-rendel-heading">Local Authority, AI-Ready Foundation</h2>
            <p>We built Jeff Rendel Law Group's digital presence around the St. Louis market, combining region-specific content and local SEO strategy with an AI-ready site architecture. The result is a site that ranks for the searches that matter and is built for where search is heading.</p>
            <a href="https://www.jeffrendellaw.com/" class="btn btn--primary" target="_blank" rel="noopener noreferrer" style="margin-top: 28px;">Visit Website</a>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/our-work-jeffrendel-1-scaled.png' ) ); ?>"
              alt="Jeff Rendel Law Group website — built by Pillar Legal Marketing"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         PORTFOLIO — Susan Curcio Law (image left, text right)
    ====================================================== -->
    <section class="section section--white" id="susan-curcio" aria-labelledby="susan-curcio-heading">
      <div class="container">
        <div class="service-row service-row--img-left">
          <div class="service-row__content">
            <p class="overline">Susan Curcio Law</p>
            <h2 id="susan-curcio-heading">A Site Built to Be Found and Contacted</h2>
            <p>We designed and developed a fully responsive website for Susan Curcio with clean content architecture, structured data, and a blog strategy targeting the search terms her prospective clients are actually using. The site works seamlessly across every device and is built for both traditional and AI search visibility.</p>
            <a href="https://www.susancurciolaw.com/" class="btn btn--primary" target="_blank" rel="noopener noreferrer" style="margin-top: 28px;">View Website</a>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/our-work-susancurcio.png' ) ); ?>"
              alt="Susan Curcio Law website — built by Pillar Legal Marketing"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

        <?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>
