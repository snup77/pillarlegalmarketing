<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- =====================================================
         POST HERO
    ====================================================== -->
    <section class="post-hero" <?php if ( has_post_thumbnail() ) : ?>style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>');"<?php endif; ?> aria-labelledby="page-title">
      <h1 class="post-hero__heading" id="page-title"><?php the_title(); ?></h1>
    </section>

    <!-- =====================================================
         POST CONTENT
    ====================================================== -->
    <section class="section section--white" id="post-content" aria-label="Article content">
      <div class="container">

        <div class="post-byline">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 56, '', esc_attr( get_the_author() ), [ 'class' => '' ] ); ?>
          <div>
            <p class="post-byline__name">Written by <?php the_author(); ?></p>
            <p class="post-byline__date"><?php echo esc_html( get_the_date() ); ?></p>
          </div>
        </div>

        <div class="post-content">
          <?php the_content(); ?>
        </div>

      </div>
    </section>

<?php endwhile; ?>

    <?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>
