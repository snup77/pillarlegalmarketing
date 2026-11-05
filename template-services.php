<?php
/*
Template Name: Services Page
Template Post Type: page
Description: A custom template for displaying the services page.
*/

get_header();

// Base URL for images uploaded to the Media Library for this page.
$img = content_url( '/uploads/2026/11/' );

// "From our research" links (section 04). Edit the slugs to change which posts appear.
$research_posts = array_values( array_filter( array_map(
  function ( $slug ) {
    return get_page_by_path( $slug, OBJECT, 'post' );
  },
  array(
    'chatgpt-visibility-new-jersey-divorce-lawyers',
    'ai-visibility-nj-divorce-lawyers-statewide-analysis',
    'ai-visibility-nj-divorce-lawyers-monmouth-middlesex',
  )
) ) );
?>

  <!-- HERO: compact, type-led, with a service index -->
  <section class="u15" id="top">
    <div class="u133">
      <div class="u134">
        <div class="u135">
          <p class="u31">Services</p>
          <h1 class="u136">Digital Marketing Services for Law Firms</h1>
          <p class="u137">From professional websites to SEO and ongoing marketing support, Pillar Legal Marketing helps law firms strengthen their online presence and attract prospective clients.</p>
        </div>
        <div class="u138">
          <p class="u33">We combine digital marketing expertise with the personal attention of a dedicated partner. You'll work directly with an experienced professional who understands your practice, answers your questions, and stays involved in the work.</p>
          <p class="u33">Whether you're launching a new firm or improving an established practice, we'll help you identify your priorities and develop a practical plan.</p>
          <a class="btn btn-primary u139" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let's Talk About Your Firm</a>
        </div>
      </div>
      <nav class="u140" aria-label="Services on this page">
        <a class="text-link u141" href="#website"><span class="u142">01</span>Website Design</a>
        <a class="text-link u141" href="#seo"><span class="u142">02</span>SEO</a>
        <a class="text-link u141" href="#local"><span class="u142">03</span>Local SEO</a>
        <a class="text-link u141" href="#ai"><span class="u142">04</span>AI Search Visibility</a>
        <a class="text-link u141" href="#content"><span class="u142">05</span>Content Writing</a>
        <a class="text-link u141" href="#analytics"><span class="u142">06</span>Analytics &amp; Reporting</a>
        <a class="text-link u141" href="#support"><span class="u142">07</span>Ongoing Support</a>
      </nav>
    </div>
  </section>

  <!-- 01 WEBSITE DESIGN: strongest visual, full-width work -->
  <section class="u73" id="website">
    <div class="u74">
      <div class="u143">
        <div class="u144">
          <p class="u31"><span class="u145">01</span>&nbsp;&nbsp;Website Design &amp; Development</p>
          <h2 class="u32">A Professional Website Built Around Your Firm</h2>
        </div>
        <p class="u146">Your website should reflect your professionalism, communicate your expertise, and make it easy for prospective clients to contact you.</p>
      </div>

      <figure class="u147">
        <div class="u148">
          <img class="u149" src="<?php echo esc_url( $img . 'jeff-rendel-laptop.webp' ); ?>" alt="Jeff Rendel Law Group homepage designed by Pillar Legal Marketing, shown on a laptop" width="1600" height="932">
          <img class="hide-sm u150" src="<?php echo esc_url( $img . 'jeff-rendel-phone.webp' ); ?>" alt="Jeff Rendel Law Group website on a phone" width="500" height="1021">
        </div>
        <figcaption class="u52"><b class="u53">Jeff Rendel Law Group</b> — custom website for a Saint Louis injury law practice</figcaption>
      </figure>

      <div class="u151">
        <div class="u152">
          <p class="u33">Pillar designs and develops custom websites with an emphasis on usability, mobile responsiveness, performance, and search visibility.</p>
          <p class="u33">We consider how visitors navigate your website, evaluate your credentials, and decide whether to reach out. Every design decision should support a better user experience and your firm's business goals.</p>
          <p class="u153">You'll work directly with the person building your website, from initial planning through launch. And when the project is complete, you retain ownership and control of your website and digital assets.</p>
        </div>
        <div class="u154">
          <p class="u45">Services include</p>
          <ul class="u155">
            <li class="u156">Custom websites and redesigns</li>
            <li class="u156">Mobile-responsive design</li>
            <li class="u156">User experience and conversion optimization</li>
            <li class="u156">Technical SEO foundations</li>
            <li class="u156">Hosting and maintenance</li>
            <li class="u157">Analytics and contact form integration</li>
          </ul>
          <a class="btn btn-primary u158" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Discuss Your Website Project</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 02 SEO: chart-led two column -->
  <section class="u15" id="seo">
    <div class="u159">
      <div class="u160">
        <div class="u161">
          <p class="u31"><span class="u145">02</span>&nbsp;&nbsp;Search Engine Optimization</p>
          <h2 class="u32">Help Prospective Clients Find Your Firm</h2>
          <p class="u33">A professional website is only valuable if prospective clients can find it.</p>
          <p class="u33">Pillar develops SEO strategies around your practice areas, geographic markets, and business priorities. Rather than pursuing traffic for its own sake, we focus on searches relevant to the clients you want to attract.</p>
          <p class="u33">Our work includes technical improvements, keyword research, content optimization, internal linking, and developing new pages where opportunities exist.</p>
        </div>
        <figure class="u62">
          <div class="u63">
            <span class="u64">Organic traffic and AI visibility – 12 month growth</span>
            <span class="u65"><span class="u66" aria-hidden="true"></span>Live Client</span>
          </div>
          <div class="u67">
            <span class="u54"><span class="u52">Traffic lift</span><span class="u68">+175%</span></span>
            <span class="u54"><span class="u52">Signed cases</span><span class="u68">+38%</span></span>
          </div>
          <div class="u69">
            <svg class="u70" viewBox="-8 30 616 200" role="img" aria-label="Line chart showing organic traffic and AI visibility rising steadily over 12 months">
              <path d="M 0 190 C 90 182, 150 178, 200 168 C 280 150, 340 110, 400 92 C 470 70, 540 58, 600 52 L 600 230 L 0 230 Z" fill="#F0E0FD" fill-opacity="0.75"></path>
              <path d="M 0 190 C 90 182, 150 178, 200 168 C 280 150, 340 110, 400 92 C 470 70, 540 58, 600 52" fill="none" stroke="#6200AF" stroke-width="3" stroke-linecap="round"></path>
              <circle cx="200" cy="168" r="6" fill="#FFFFFF" stroke="#6200AF" stroke-width="3"></circle>
              <circle cx="400" cy="92" r="6" fill="#FFFFFF" stroke="#6200AF" stroke-width="3"></circle>
              <circle cx="596" cy="53" r="8" fill="#6200AF" stroke="#FFFFFF" stroke-width="3"></circle>
            </svg>
            <div class="u71"><span>Month 1</span><span>Month 12</span></div>
          </div>
        </figure>
      </div>
      <div class="u162">
        <div class="u163">
          <p class="u33">SEO requires ongoing attention. We monitor performance, explain our findings, and adjust priorities as your market and business evolve.</p>
          <p class="u164">You'll understand what we're doing, why we're doing it, and how we're measuring progress.</p>
          <a class="btn btn-primary u165" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Improve Your Search Visibility</a>
        </div>
        <div class="u166">
          <p class="u45">Services include</p>
          <ul class="u167">
            <li class="u168">SEO audits and competitive research</li>
            <li class="u168">Keyword and search intent analysis</li>
            <li class="u168">On-page and technical SEO</li>
            <li class="u168">Practice area optimization</li>
            <li class="u168">Content strategy and internal linking</li>
            <li class="u168">Search performance reporting</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 03 LOCAL SEO: text-led, wide statement + boxed list -->
  <section class="u73" id="local">
    <div class="u169">
      <div class="u170">
        <p class="u31"><span class="u145">03</span>&nbsp;&nbsp;Local SEO</p>
        <h2 class="u32">Get Found in the Communities You Serve</h2>
        <p class="u171">Prospective clients often search for attorneys in a specific city, county, or nearby community. Local SEO helps your firm improve its visibility in geographically relevant searches, including Google Maps.</p>
      </div>
      <div class="u172">
        <div class="u173">
          <p class="u33">Pillar optimizes Google Business Profiles, strengthens local website content, and improves your presence across relevant online directories.</p>
          <p class="u33">We also identify opportunities to reach nearby communities through useful location pages and locally relevant content.</p>
          <p class="u33">Our approach is tailored to your actual service area. We prioritize meaningful improvements over mass-produced location pages or unnecessary directory listings.</p>
          <a class="btn btn-primary u165" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Strengthen Your Local Presence</a>
        </div>
        <div class="u174">
          <p class="u45">Services include</p>
          <ul class="u155">
            <li class="u175">Google Business Profile optimization</li>
            <li class="u175">Local SEO audits and competitor research</li>
            <li class="u175">City and county landing pages</li>
            <li class="u175">Directory and citation management</li>
            <li class="u175">Review strategy guidance</li>
            <li class="u175">Local search performance monitoring</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SECONDARY SERVICES: text-led, restrained -->
  <section class="u15">
    <div class="u176">

      <!-- 04 AI SEARCH VISIBILITY -->
      <article class="u177" id="ai">
        <div class="u178">
          <p class="u31"><span class="u145">04</span>&nbsp;&nbsp;AI Search Visibility</p>
          <h2 class="u179">Understand How AI Is Changing Legal Search</h2>
          <p class="u33">Prospective clients are increasingly using AI-powered tools such as ChatGPT to research legal questions and identify potential attorneys.</p>
          <p class="u33">Pillar conducts original research into how AI tools discover and present information about law firms, including the role of legal directories, websites, and professional credentials.</p>
          <p class="u33">We use those insights to evaluate your digital presence and identify practical improvements, such as strengthening attorney biographies, updating directory profiles, and improving website content.</p>
          <p class="u180">AI search is evolving, and no agency can guarantee recommendations from these platforms. Our approach emphasizes research, transparency, and evidence-based recommendations.</p>
          <p class="u181">Services include</p>
          <p class="u182">AI visibility assessments · Competitive visibility research · Legal directory analysis · Website and biography optimization recommendations · Reputation and credential visibility reviews</p>
          <a class="text-link u50" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Explore Your AI Search Visibility <span aria-hidden="true">→</span></a>
        </div>
        <?php if ( $research_posts ) : ?>
          <aside class="u183" aria-label="Pillar's AI visibility research">
            <p class="u184">From our research</p>
            <?php foreach ( $research_posts as $i => $research_post ) : ?>
              <a class="article <?php echo ( count( $research_posts ) - 1 === $i ) ? 'u188' : 'u185'; ?>" href="<?php echo esc_url( get_permalink( $research_post ) ); ?>"><time class="u186" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d', $research_post ) ); ?>"><?php echo esc_html( get_the_date( '', $research_post ) ); ?></time><span class="u187"><?php echo esc_html( get_the_title( $research_post ) ); ?></span></a>
            <?php endforeach; ?>
          </aside>
        <?php endif; ?>
      </article>

      <!-- 05 CONTENT: typography-led, statement left + text right -->
      <article class="u189" id="content">
        <div class="u190">
          <p class="u31"><span class="u145">05</span>&nbsp;&nbsp;Legal Content Writing &amp; Optimization</p>
          <h2 class="u179">Content That Serves Your Clients and Supports Search Visibility</h2>
          <p class="u191">Effective legal content helps prospective clients understand their questions and evaluate whether your firm is the right choice.</p>
        </div>
        <div class="u192">
          <p class="u33">Pillar develops and improves website content that communicates your expertise, supports your practice areas, and strengthens your search presence.</p>
          <p class="u33">We identify opportunities based on what prospective clients are searching for and the information they need.</p>
          <p class="u33">Our work combines content strategy, SEO, and usability. We also collaborate with attorneys to ensure legal information is accurate and reflects their practice.</p>
          <ul class="u193">
            <li class="u194">Practice area pages</li>
            <li class="u194">Attorney biography optimization</li>
            <li class="u194">Legal blog articles</li>
            <li class="u194">Content audits and revisions</li>
            <li class="u194">SEO content planning</li>
            <li class="u194">Internal linking and readability improvements</li>
          </ul>
          <a class="text-link u50" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Discuss Your Content Needs <span aria-hidden="true">→</span></a>
        </div>
      </article>

      <!-- 06 ANALYTICS: restrained two column with one real metric -->
      <article class="u195" id="analytics">
        <div class="u192">
          <p class="u31"><span class="u145">06</span>&nbsp;&nbsp;Marketing Analytics &amp; Reporting</p>
          <h2 class="u179">Understand What's Working and Where to Improve</h2>
          <p class="u33">Effective marketing requires more than tracking website traffic. Pillar helps law firms understand how prospective clients find their websites, interact with content, and contact their offices.</p>
          <p class="u33">We use tools such as Google Analytics, Google Search Console, and call tracking to measure performance and identify opportunities. We also track results from your paid advertising, including Google Ads, Meta ads, and sponsored placements on legal directories.</p>
          <p class="u33">Beyond tracking, we calculate the return on investment of your marketing spending, so you can see which channels are bringing in new clients and where your budget is best spent.</p>

          <a class="text-link u50" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Understand Your Marketing Performance <span aria-hidden="true">→</span></a>
        </div>
        <div class="u196">
          <div class="u69">
            <p class="u45">Services include</p>
            <ul class="u155">
              <li class="u194">Google Analytics 4 and Search Console</li>
              <li class="u194">Google Tag Manager</li>
              <li class="u194">Contact form conversion tracking</li>
              <li class="u194">Call tracking integration</li>
              <li class="u194">Traffic and engagement analysis</li>
              <li class="u194">SEO performance reporting</li>
              <li class="u197">Marketing ROI analysis</li>
            </ul>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- 07 ONGOING SUPPORT: warm, personal -->
  <section class="u198" id="support">
    <div class="u199">
      <div class="support-photo u200">
        <img class="u201" src="<?php echo esc_url( $img . 'anup-sheth.webp' ); ?>" alt="Anup Sheth, founder of Pillar Legal Marketing" width="900" height="1350">
        <figure class="u202">
          <blockquote class="u203">“I genuinely look forward to meeting with Anup each week — he is my ‘marketing counselor’ and will work through small and big questions alike.”</blockquote>
          <figcaption class="u204">
            <img class="u205" src="<?php echo esc_url( $img . 'adrienne-tranel.png' ); ?>" alt="" width="40" height="40">
            <span class="u206"><span class="u53">Adrienne Tranel</span><span>Founding Attorney, AT Legal PC</span></span>
          </figcaption>
        </figure>
      </div>
      <div class="u207">
        <p class="u31"><span class="u145">07</span>&nbsp;&nbsp;Ongoing Website &amp; Marketing Support</p>
        <h2 class="u32">A Marketing Partner You Can Actually Talk To</h2>
        <p class="u208">Your marketing needs don't end when your website launches. As your firm grows, you may need website updates, SEO improvements, technical support, or someone to help evaluate a new marketing opportunity.</p>
        <p class="u208">Pillar provides hands-on support from someone who knows your website, understands your goals, and is personally involved in the work.</p>
        <p class="u208">One of our clients described the relationship as having a “marketing counselor.” That's the kind of partnership we aim to build.</p>
        <p class="u209">We want to be a resource you can rely on, not another vendor you have to manage.</p>
        <p class="u210">Services include</p>
        <ul class="u211">
          <li class="u212">Website hosting and maintenance</li>
          <li class="u212">Website updates and technical support</li>
          <li class="u212">Content and design updates</li>
          <li class="u212">Ongoing SEO support</li>
          <li class="u212">Performance reviews</li>
          <li class="u212">Digital marketing consultation</li>
        </ul>
        <a class="btn btn-primary u158" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let's Work Together</a>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="u213">
    <div class="u214">
      <div class="u215">
        <h2 class="u96">Experienced Support. A More Personal Approach.</h2>
        <p class="u97">You don't need a large agency to build a professional website or develop an effective digital marketing strategy. At Pillar, you receive experienced, hands-on support without the layers of account management that can come with larger agencies.</p>
        <p class="u97">We take the time to understand your practice, explain your options, and help you make informed marketing decisions. Whether you need a new website, ongoing SEO, or a trusted marketing partner, we'd welcome the opportunity to talk.</p>
      </div>
      <a class="btn btn-primary u216" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
    </div>
  </section>

<?php get_footer(); ?>
