<?php
/*
Template Name: Our Work Page
Template Post Type: page
Description: A custom template for displaying the our work page.
*/

get_header();

// Base URL for images uploaded to the Media Library for this page.
$img = content_url( '/uploads/2026/11/' );
?>

  <!-- HERO -->
  <section class="u15" id="top">
    <div class="u217">
      <div class="u135">
        <p class="u31">Our Work</p>
        <h1 class="u136">Thoughtful Design. Measurable Results.</h1>
      </div>
      <div class="u218">
        <p class="u33">Explore a selection of websites and digital marketing projects developed by Pillar Legal Marketing.</p>
        <p class="u33">Our work combines professional design, intuitive user experiences, and practical marketing strategies to help law firms establish their online presence and attract prospective clients.</p>
      </div>
    </div>
  </section>

  <!-- GALLERY: asymmetrical screenshot composition -->
  <section class="u73">
    <div class="u219">
      <div class="pw-mhead u220">
        <h2 class="u32">Selected Website Designs</h2>
        <p class="u137">A collection of client projects and independent design concepts showcasing our approach to website design.</p>
      </div>
      <div class="pw-bleed">
        <div class="pw-grid u221">
          <div class="pw-head u222">
            <h2 class="u32">Selected Website Designs</h2>
            <p class="u137">A collection of client projects and independent design concepts showcasing our approach to website design.</p>
          </div>
          <div class="pw-tall pw-r u223">
            <img class="u224" src="<?php echo esc_url( $img . 'work-horizon-mobile.webp' ); ?>" alt="Horizon Family Law website on mobile" width="750" height="1500">
          </div>
          <div class="pw-wide u225">
            <img class="u226" src="<?php echo esc_url( $img . 'work-susan-curcio-desktop.webp' ); ?>" alt="Susan Curcio Family Law website homepage" width="1400" height="875">
          </div>
          <div class="pw-wide u227">
            <img class="u228" src="<?php echo esc_url( $img . 'work-jeff-rendel-desktop.webp' ); ?>" alt="Jeff Rendel Law Group website homepage" width="1400" height="875">
          </div>
          <div class="pw-tall u229">
            <img class="u228" src="<?php echo esc_url( $img . 'work-dc-family-mobile.webp' ); ?>" alt="DC Family Law Group website on mobile" width="750" height="1500">
          </div>
          <div class="pw-wide u230">
            <img class="u228" src="<?php echo esc_url( $img . 'work-berenson-desktop.webp' ); ?>" alt="Berenson LLC website homepage" width="1400" height="996">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CASE STUDY HEADER -->
  <section class="u91" id="case-study">
    <div class="u231">
      <p class="u95">Featured Case Study</p>
      <h2 class="u232">AT Legal PC: Building a Montana Law Firm From the Ground Up</h2>
      <p class="u233"><span>Brand Identity</span><span class="u234" aria-hidden="true">|</span><span>Website Design</span><span class="u234" aria-hidden="true">|</span><span>SEO</span><span class="u234" aria-hidden="true">|</span><span>Local SEO</span><span class="u234" aria-hidden="true">|</span><span>Digital Marketing</span></p>
      <p class="u235">Missoula, Montana · Practice launched in 2025</p>
    </div>
  </section>

  <!-- CASE STUDY STORY -->
  <section class="u15">
    <div class="u236">
      <div class="u237">
        <div class="u238">
          <span class="u239">01</span>
          <h3 class="u240">The Challenge: Establishing a New Practice</h3>
        </div>
        <div class="u241">
          <p class="u33">After practicing employment and personal injury law at other firms, attorney Adrienne Tranel decided to establish her own practice in Missoula, Montana.</p>
          <p class="u33">Launching AT Legal PC meant building a recognizable brand, developing a professional website, and establishing visibility in a competitive legal marketplace.</p>
          <p class="u33">Pillar partnered with Adrienne to build the firm's digital presence and develop a marketing strategy that could support its long-term growth.</p>
        </div>
      </div>
      <div class="u237">
        <div class="u238">
          <span class="u239">02</span>
          <h3 class="u240">Building the Brand and Website</h3>
          <figure class="hide-sm u242">
            <div class="u243">
              <img class="u244" src="<?php echo esc_url( $img . 'at-legal-logo.png' ); ?>" alt="AT Legal PC logo" width="544" height="131">
            </div>
            <figcaption class="u52">The AT Legal PC logo, designed by Pillar · Typeface: Baskerville</figcaption>
          </figure>
        </div>
        <div class="u241">
          <p class="u33">Our work began with creating a cohesive visual identity for the new firm, including logo development, business card design, and a custom website.</p>
          <p class="u33">The website was designed to communicate Adrienne's experience, explain the firm's practice areas, and make it easy for prospective clients to request a consultation.</p>
          <p class="u33">We emphasized mobile usability, clear navigation, and a professional presentation that would establish credibility for a newly launched practice.</p>
          <figure class="show-sm u245">
            <div class="u246">
              <img class="u247" src="<?php echo esc_url( $img . 'at-legal-logo.png' ); ?>" alt="AT Legal PC logo" width="544" height="131">
            </div>
            <figcaption class="u52">The AT Legal PC logo, designed by Pillar · Typeface: Baskerville</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class="u248">
      <figure class="u249">
        <div class="u250">
          <div class="u251"><img class="u27" src="<?php echo esc_url( $img . 'at-legal-laptop.webp' ); ?>" alt="AT Legal PC website homepage on a laptop" width="1600" height="931"></div>
          <div class="hide-sm u252"><img class="u27" src="<?php echo esc_url( $img . 'at-legal-phone.webp' ); ?>" alt="AT Legal PC website on a phone" width="560" height="1144"></div>
        </div>
        <figcaption class="u52"><b class="u53">AT Legal PC</b> — logo, business cards and custom WordPress website</figcaption>
      </figure>
    </div>
    <div class="u253">
      <div class="u237">
        <div class="u238">
          <span class="u239">03</span>
          <h3 class="u240">Identifying an Opportunity in Employment Law</h3>
        </div>
        <div class="u241">
          <p class="u33">Our initial market research identified an opportunity to improve visibility for employment law searches in Montana, where competition appeared relatively limited.</p>
          <p class="u33">We used that insight to help position AT Legal around employment law while continuing to support its personal injury practice.</p>
          <p class="u33">Our SEO work included practice area content, on-page optimization, and improvements designed to help prospective clients discover the firm through relevant searches.</p>
        </div>
      </div>
      <div class="u237">
        <div class="u238">
          <span class="u239">04</span>
          <h3 class="u240">Establishing a Broader Digital Presence</h3>
        </div>
        <div class="u241">
          <p class="u33">A new law firm needs visibility beyond its website.</p>
          <p class="u33">Pillar worked with AT Legal to establish and strengthen its presence across relevant legal directories and local search platforms.</p>
          <p class="u33">We also implemented website analytics and lead tracking to better understand how visitors were finding the firm and contacting its office.</p>
          <p class="u33">Our relationship continued after launch, with ongoing SEO, website improvements, and marketing consultation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RESULTS -->
  <section class="u73">
    <div class="u254">
      <div class="u255">
        <div class="u163">
          <p class="u31">The Results</p>
          <h2 class="u32">From New Practice to Ongoing Client Inquiries</h2>
        </div>
        <div class="u256">
          <p class="u33">Since launching in 2025, AT Legal has established a professional online presence and developed a steady stream of prospective client inquiries.</p>
          <p class="u33">Because analytics and lead tracking were in place from launch, we can follow the full path from search visibility to website visits to consultation requests, and see which searches and pages bring prospective clients to the firm.</p>
          <p class="u33">That insight guides our ongoing work: strengthening organic search visibility, improving the pages that turn visitors into inquiries, and tracking opportunities for continued growth.</p>
        </div>
      </div>
      <div class="u257">
        <div class="u258">
          <div class="u259">
            <span class="u260">Organic conversions since launch</span>
            <span class="u261">418 leads</span>
            <span class="u262">Qualified lead submissions, July 2025 – October 2026 (an average of 6 per week)</span>
          </div>
          <div class="u259">
            <span class="u260">Monthly organic traffic</span>
            <span class="u261">149 clicks</span>
            <span class="u262">Average per month, July–September 2026</span>
          </div>
          <div class="u259">
            <span class="u260">Search visibility</span>
            <span class="u261">60,304 impressions</span>
            <span class="u262">Total, July 27, 2025 – October 28, 2026</span>
          </div>
        </div>
        <p class="u263">Traffic and visibility figures: Google Search Console, atlegalmt.com.</p>
      </div>
    </div>
  </section>

  <!-- CLIENT QUOTE -->
  <section class="u15">
    <div class="u264">
      <p class="u265">In the Client's Words</p>
      <figure class="u266">
        <blockquote class="u267">“Anup helped us develop our law firm’s branding, logo, and website, creating a professional online presence for our employment law and personal injury practice. He brought a thoughtful approach to both the design and marketing strategy. I genuinely look forward to meeting with Anup each week — he is my ‘marketing counselor’ and will work through small and big questions alike. I recommend Anup to all my peers looking for a great result!”</blockquote>
        <figcaption class="u268">
          <img class="u81" src="<?php echo esc_url( $img . 'adrienne-tranel.png' ); ?>" alt="" width="56" height="56">
          <span class="u269"><span class="u53">Adrienne Tranel</span><span>AT Legal PC</span></span>
          <span class="u270"><img class="u84" src="<?php echo esc_url( $img . 'google-g.png' ); ?>" alt="" width="20" height="20">Google review</span>
        </figcaption>
      </figure>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="u198">
    <div class="u214">
      <div class="u215">
        <h2 class="u32">Let's Build Something That Works for Your Firm</h2>
        <p class="u208">Whether you're launching a new practice or improving an established one, Pillar combines professional website design with practical digital marketing expertise.</p>
        <p class="u208">You'll work directly with an experienced partner who understands your goals and stays involved as your practice grows.</p>
      </div>
      <a class="btn btn-primary u216" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Discuss Your Project</a>
    </div>
  </section>

<?php get_footer(); ?>
