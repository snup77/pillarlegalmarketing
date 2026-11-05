<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php
  $blog_page_id = (int) get_option( 'page_for_posts' );
  $blog_url     = $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/blog/' );
  $author_id    = (int) get_the_author_meta( 'ID' );
  $author_bio   = get_the_author_meta( 'description' );
  $author_photo = content_url( '/uploads/2026/11/anup-sheth-200x300.webp' );

  // Post content with ids added to each <h2>, plus the "In this article" list.
  $article = pillarlegalmarketing_content_with_toc( apply_filters( 'the_content', get_the_content() ) );
  ?>

  <!-- =====================================================
       ARTICLE HEADER
  ====================================================== -->
  <section class="u15" id="top">
    <div class="u315">
      <a class="text-link u316" href="<?php echo esc_url( $blog_url ); ?>"><span aria-hidden="true">←</span> Insights &amp; Research</a>
      <h1 class="u317"><?php the_title(); ?></h1>
      <div class="u318">
        <img class="u319" src="<?php echo esc_url( $author_photo ); ?>" alt="" width="44" height="44">
        <span>Written by <b class="u53"><?php the_author(); ?></b></span>
        <span class="u320" aria-hidden="true">·</span>
        <time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
        <span class="u320" aria-hidden="true">·</span>
        <span><?php echo esc_html( pillarlegalmarketing_reading_time() ); ?> min read</span>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="u321">
        <?php the_post_thumbnail( 'full', array( 'class' => 'u322', 'alt' => '', 'fetchpriority' => 'high' ) ); ?>
      </div>
    <?php endif; ?>
  </section>

  <!-- =====================================================
       ARTICLE BODY
  ====================================================== -->
  <section class="u15">
    <div class="u323">

      <?php if ( ! empty( $article['toc'] ) ) : ?>
        <nav class="u324" aria-label="In this article">
          <p class="u45">In this article</p>
          <ol class="u325">
            <?php foreach ( $article['toc'] as $item ) : ?>
              <li class="u314"><a class="text-link u326" href="#<?php echo esc_attr( $item['id'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a></li>
            <?php endforeach; ?>
          </ol>
        </nav>
      <?php endif; ?>

      <article class="prose u327">
        <?php echo $article['content']; // phpcs:ignore WordPress.Security.EscapeOutput -- filtered post content. ?>

        <!-- Author -->
        <aside class="u330" aria-label="About the author">
          <img class="u331" src="<?php echo esc_url( $author_photo ); ?>" alt="" width="72" height="72" loading="lazy">
          <div class="u332">
            <span class="u53"><?php the_author(); ?></span>
            <span class="u333">
              <?php
              echo $author_bio
                ? esc_html( $author_bio )
                : 'Founder of Pillar Legal Marketing. Former paralegal at two New York law firms, UX designer and researcher, and Ph.D. in Sociology from UCLA.';
              ?>
            </span>
            <a class="text-link u334" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Pillar <span aria-hidden="true">→</span></a>
          </div>
        </aside>
      </article>

    </div>
  </section>

  <!-- =====================================================
       RELATED (2 posts from the same category, newest first)
  ====================================================== -->
  <?php
  $related = new WP_Query( array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 2,
    'post__not_in'        => array( get_the_ID() ),
    'category__in'        => wp_get_post_categories( get_the_ID() ),
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
  ) );
  ?>
  <?php if ( $related->have_posts() ) : ?>
    <section class="u73">
      <div class="u335">
        <h2 class="u336">Related research</h2>
        <div class="u337">
          <?php while ( $related->have_posts() ) : $related->the_post(); ?>
            <a class="article u338" href="<?php the_permalink(); ?>">
              <time class="u52" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
              <h3 class="u339"><?php the_title(); ?></h3>
            </a>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

<?php endwhile; ?>

  <!-- =====================================================
       CTA
  ====================================================== -->
  <section class="u213">
    <div class="u340">
      <div class="u178">
        <h2 class="u341">Let's Talk About Your Firm</h2>
        <p class="u97">Whether you're looking to improve your website, increase your online visibility, or explore new marketing opportunities, we'd love to hear from you.</p>
        <p class="u97">Tell us what you're working on, and we'll get back to you within one business day.</p>
      </div>
      <div class="u342">
        <a class="btn btn-primary u343" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
