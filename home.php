<?php get_header(); ?>

  <!-- =====================================================
       HERO
  ====================================================== -->
  <section class="u15" id="top">
    <div class="u294">
      <div class="u295">
        <p class="u31">Blog</p>
        <h1 class="u136">Insights &amp; Research</h1>
        <p class="u296">Original research, practical insights, and perspectives on digital marketing for law firms.</p>
      </div>
      <p class="u297">Explore articles on website design, SEO, AI search visibility, and the evolving ways prospective clients discover and evaluate attorneys.</p>
    </div>
  </section>

  <!-- =====================================================
       LATEST ARTICLES
  ====================================================== -->
  <section class="u15">
    <div class="u253">
      <h2 class="u298"><?php echo is_paged() ? esc_html__( 'More Articles', 'pillarlegalmarketing' ) : esc_html__( 'Latest Articles', 'pillarlegalmarketing' ); ?></h2>

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php if ( 0 === $wp_query->current_post && ! is_paged() ) : ?>

            <!-- Featured: most recent -->
            <article class="u299">
              <?php if ( has_post_thumbnail() ) : ?>
                <a class="u300" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                  <?php the_post_thumbnail( 'medium_large', array( 'class' => 'u301', 'alt' => '' ) ); ?>
                </a>
              <?php endif; ?>
              <div class="u154">
                <span class="u302">
                  <span class="u303">Latest</span>
                  <time class="u52" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                </span>
                <h3 class="u304"><a class="post-link u305" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="u33"><?php echo esc_html( get_the_excerpt() ); ?></p>
                <a class="btn btn-primary u306" href="<?php the_permalink(); ?>">Read Article<span class="u313">: <?php the_title(); ?></span></a>
              </div>
            </article>

          <?php else : ?>

            <article class="u307">
              <?php if ( has_post_thumbnail() ) : ?>
                <a class="u308" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                  <?php the_post_thumbnail( 'medium_large', array( 'class' => 'post-thumb', 'alt' => '', 'loading' => 'lazy' ) ); ?>
                </a>
              <?php endif; ?>
              <div class="u310">
                <time class="u52" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                <h3 class="u311"><a class="post-link u305" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="u312"><?php echo esc_html( get_the_excerpt() ); ?></p>
                <a class="text-link u50" href="<?php the_permalink(); ?>">Read article <span aria-hidden="true">→</span><span class="u313">: <?php the_title(); ?></span></a>
              </div>
            </article>

          <?php endif; ?>

        <?php endwhile; ?>

        <div class="u314"></div>

        <?php
        the_posts_pagination( array(
          'mid_size'           => 1,
          'prev_text'          => '<span aria-hidden="true">←</span> ' . esc_html__( 'Newer', 'pillarlegalmarketing' ),
          'next_text'          => esc_html__( 'Older', 'pillarlegalmarketing' ) . ' <span aria-hidden="true">→</span>',
          'screen_reader_text' => esc_html__( 'Articles navigation', 'pillarlegalmarketing' ),
          'class'              => 'blog-pagination',
        ) );
        ?>

      <?php else : ?>

        <p class="u33"><?php esc_html_e( 'No articles have been published yet.', 'pillarlegalmarketing' ); ?></p>

      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
