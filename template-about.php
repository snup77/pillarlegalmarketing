<?php
/*
Template Name: About Page
Template Post Type: page
Description: A custom template for displaying the about page.
*/

get_header();

// Base URL for images uploaded to the Media Library for this page.
$img = content_url( '/uploads/2026/11/' );
?>

  <!-- HERO / INTRO -->
  <section class="u15" id="top">
    <div class="u271">
      <div class="u272">
        <p class="u31">About Pillar Legal Marketing</p>
        <h1 class="u136">A More Personal Approach to Legal Marketing</h1>
      </div>
      <div class="u273">
        <div class="u274">
          <p class="u275">Pillar Legal Marketing is a boutique digital marketing agency helping law firms build professional websites, strengthen their online visibility, and attract prospective clients.</p>
          <p class="u33">We combine website design, search engine optimization, content strategy, and analytics to help attorneys establish and grow their practices.</p>
        </div>
        <div class="u276">
          <p class="u33">What makes Pillar different is our approach to client relationships. We believe effective marketing begins with understanding your firm, your clients, and your goals.</p>
          <p class="u33">Rather than navigating layers of account managers, you'll work directly with an experienced professional who is personally invested in your success.</p>
          <p class="u277">Our goal is to become a trusted marketing partner, not simply another service provider.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MEET THE FOUNDER -->
  <section class="u73" id="founder">
    <div class="u278">
      <div class="support-photo u279">
        <img class="u201" src="<?php echo esc_url( $img . 'anup-sheth.webp' ); ?>" alt="Anup Sheth, founder of Pillar Legal Marketing" width="900" height="1350">
        <div class="u280">
          <span class="u281">Anup Sheth</span>
          <span class="u282">Founder, Pillar Legal Marketing</span>
        </div>
        <ul class="u283">
          <li class="u168">Former paralegal at two New York law firms</li>
          <li class="u168">User experience design and research</li>
          <li class="u284">Ph.D. in Sociology, UCLA</li>
        </ul>
      </div>
      <div class="u285">
        <p class="u31">Meet the Founder</p>
        <h2 class="u32">My path to legal marketing began long before I started building websites for law firms.</h2>
        <p class="u33">Earlier in my career, I worked as a paralegal at two prominent New York law firms. That experience gave me firsthand exposure to the legal profession, including the demands of legal work and the importance of communicating complex information clearly.</p>
        <p class="u33">I later built a career in user experience (UX) design and research, working on websites and digital products for organizations across several industries.</p>
        <p class="u33">As a UX researcher, I studied how people navigate digital experiences, find information, evaluate their options, and make decisions. As a designer, I used those insights to create websites and applications that are easier to understand and use.</p>
        <p class="u33">I also earned a Ph.D. in Sociology from UCLA, which strengthened my approach to research, analysis, and understanding human behavior.</p>
        <p class="u33">Today, I bring those experiences together at Pillar Legal Marketing.</p>
        <div class="u286">
          <p class="u275">I understand the legal profession from having worked inside it.</p>
          <p class="u287">I understand how people interact with websites from years of UX research and design.</p>
          <p class="u287">And I understand how search visibility, content, and digital marketing can help connect law firms with prospective clients.</p>
        </div>
        <p class="u33">That combination shapes how I approach every project.</p>
        <p class="u33">A law firm's website shouldn't simply look professional. It should help prospective clients find the firm, understand its services, evaluate its credentials, and feel confident taking the next step.</p>
        <p class="u33">And a marketing strategy shouldn't be a collection of disconnected tactics. It should support the firm's broader business goals.</p>
      </div>
    </div>
  </section>

  <!-- HOW WE WORK -->
  <section class="u15" id="how-we-work">
    <div class="u288">
      <div class="u161">
        <p class="u31">How We Work</p>
        <h2 class="u32">Experienced Guidance. Direct Collaboration.</h2>
        <p class="u33">At Pillar, we believe good marketing requires both technical expertise and a strong working relationship.</p>
      </div>
      <div class="u289">
        <p class="u33">We take the time to understand your practice, identify opportunities, and explain our recommendations in straightforward terms.</p>
        <p class="u33">Whether we're developing a new website, improving search visibility, or reviewing marketing performance, you'll work directly with someone who understands your goals and is involved in the work.</p>
        <p class="u33">One client described the relationship as having a “marketing counselor.” That's exactly the kind of partnership we aim to provide.</p>
        <figure class="u290">
          <blockquote class="u291">“I genuinely look forward to meeting with Anup each week — he is my ‘marketing counselor’ and will work through small and big questions alike.”</blockquote>
          <figcaption class="u204">
            <img class="u205" src="<?php echo esc_url( $img . 'adrienne-tranel.png' ); ?>" alt="" width="40" height="40">
            <span class="u206"><span class="u53">Adrienne Tranel</span><span>Founding Attorney, AT Legal PC</span></span>
            <span class="u270"><img class="u292" src="<?php echo esc_url( $img . 'google-g.png' ); ?>" alt="" width="18" height="18">Google review</span>
          </figcaption>
        </figure>
        <p class="u33">Someone you can turn to with questions, discuss ideas with, and trust to help you make informed decisions about your firm's digital presence.</p>
        <p class="u293">We believe that personal attention, transparency, and thoughtful execution are just as important as the technology and marketing strategies we use.</p>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="u213">
    <div class="u214">
      <div class="u215">
        <h2 class="u96">Let's Talk About Your Firm</h2>
        <p class="u97">Whether you're launching a new practice or looking to improve your existing marketing, we'd welcome the opportunity to learn more about your goals.</p>
      </div>
      <a class="btn btn-primary u216" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let's Work Together</a>
    </div>
  </section>

<?php get_footer(); ?>
