
<?php get_header(); ?>

   <!-- =====================================================
         PAGE HERO
    ====================================================== -->
    <section class="page-hero" aria-labelledby="page-title">
      <h1 class="page-hero__heading" id="page-title">Legal Marketing Blog</h1>
      <p class="page-hero__subtext">Practical insights on SEO, AI search, and digital marketing for solo attorneys and small law firms.</p>
    </section>

    <!-- =====================================================
         BLOG GRID
    ====================================================== -->
    <section class="section section--alt" id="blog-archive" aria-label="Blog articles">
      <div class="container">
        <div class="blog-grid">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="blog-card">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="blog-card__img-link">
              <?php the_post_thumbnail( 'medium', [
                'class'   => 'blog-card__img',
                'loading' => 'lazy',
                'alt'     => esc_attr( get_the_title() ),
              ] ); ?>
            </a>
            <?php endif; ?>
            <h3 class="blog-card__heading">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <time class="blog-card__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>">
              <?php echo esc_html( get_the_date() ); ?>
            </time>
            <p class="blog-card__excerpt"><?php the_excerpt(); ?></p>
          </article>

          <?php endwhile; else : ?>

          <p class="blog-no-posts">No posts</p>

          <?php endif; ?>

        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>
