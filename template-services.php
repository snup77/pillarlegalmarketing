<?php
/*
Template Name: Services Page
Template Post Type: page
Description: A custom template for displaying the services page.
*/

?>

    <?php get_header(); ?>

    <!-- =====================================================
         PAGE HERO
    ====================================================== -->
    <section class="page-hero" aria-labelledby="page-title">
      <h1 class="page-hero__heading" id="page-title">Services</h1>
      <p class="page-hero__subtext">Every service we offer is built for one purpose: making your firm visible, authoritative, and reachable in an AI-driven search landscape.</p>
    </section>

    <!-- =====================================================
         SERVICE 1 — Web Design (text left, image right)
    ====================================================== -->
    <section class="section section--white" id="web-design">
      <div class="container">
        <div class="service-row">
          <div class="service-row__content">
            <p class="overline">Web Design</p>
            <h2>AI-Ready Website Design</h2>
            <p>We design and build law firm websites with the structured data, semantic markup, and technical architecture that AI search engines require. Your site will look professional and be built to get found, read, and contacted by the next generation of search.</p>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/services-designs.png' ) ); ?>"
              alt="Law firm website design — AI-ready architecture"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SERVICE 2 — Mobile Development (image left, text right)
    ====================================================== -->
    <section class="section section--alt" id="mobile">
      <div class="container">
        <div class="service-row service-row--img-left">
          <div class="service-row__content">
            <p class="overline">Mobile Development</p>
            <h2>Optimized For Every Device</h2>
            <p>Your clients expect a seamless experience whether they're on a desktop, tablet, or phone, and so do the AI search platforms that evaluate your site's mobile performance. We build every site with responsive design, fast mobile load times, and click-to-call functionality built in.</p>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/services-mobile-dev-1.png' ) ); ?>"
              alt="Law firm website optimized for mobile devices"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SERVICE 3 — Legal Content Writing (full-bleed bg)
    ====================================================== -->
    <section
      class="service-fullbleed"
      id="content-writing"
      style="background-image: linear-gradient(100deg, rgb(31, 31, 31) 50%, rgba(31, 31, 31, 0) 100%), url('<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/content-image.jpg' ) ); ?>');"
      aria-labelledby="content-writing-heading"
    >
      <div class="container">
        <div class="service-fullbleed__content">
          <p class="overline">Legal Content Writing</p>
          <h2 id="content-writing-heading">Content Built to Earn Authority</h2>
          <p class="service-fullbleed__copy">We write practice area pages, attorney bios, blog posts, and location pages structured for both human readers and AI search platforms. Every piece of content is built to earn authority, answer the questions your prospective clients are actually asking, and convert visitors into consultations.</p>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SERVICE 4 — SEO (image left, text right)
    ====================================================== -->
    <section class="section section--alt" id="seo">
      <div class="container">
        <div class="service-row service-row--img-left">
          <div class="service-row__content">
            <p class="overline">Search Engine Optimization</p>
            <h2>AI-Native SEO for Law Firms</h2>
            <p>Search is undergoing the most significant transformation in two decades, and the firms that adapt earliest will own their markets. We combine proven SEO fundamentals with AI-ready infrastructure including schema markup, llms.txt, and structured content strategy.</p>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/ppc.jpg' ) ); ?>"
              alt="AI-native SEO strategy for law firms"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SERVICE 5 — Google Ads (text left, image right)
    ====================================================== -->
    <section class="section section--white" id="google-ads">
      <div class="container">
        <div class="service-row">
          <div class="service-row__content">
            <p class="overline">Paid Search Advertising</p>
            <h2>Google Ads for Law Firms</h2>
            <p>We manage Google Ads campaigns built specifically for law firms, targeted and conversion-focused with landing pages designed to turn clicks into consultations. Every campaign is built alongside your organic search strategy so your paid and organic presence reinforce each other.</p>
          </div>
          <div class="service-row__image">
            <img
              src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/services-seo.jpg' ) ); ?>"
              alt="Google Ads management for law firms"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SERVICE 6 — Support & Strategy (full-bleed bg)
    ====================================================== -->
    <section
      class="service-fullbleed"
      id="support"
      style="background-image: linear-gradient(100deg, rgb(31, 31, 31) 50%, rgba(31, 31, 31, 0) 100%), url('<?php echo esc_url( site_url( '/wp-content/uploads/2026/06/office-932926_1280.jpg' ) ); ?>');"
      aria-labelledby="support-heading"
    >
      <div class="container">
        <div class="service-fullbleed__content">
          <p class="overline">Support &amp; Services</p>
          <h2 id="support-heading">Ongoing Support &amp; Strategy</h2>
          <p class="service-fullbleed__copy">As AI search continues to evolve, your digital presence needs to evolve with it. We provide ongoing technical, design, and content support, keeping your site updated, your schema current, and your firm positioned for whatever changes in search come next.</p>
        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>