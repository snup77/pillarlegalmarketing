<?php get_header(); ?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
				</header>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</article>
			<?php
		endwhile;
		the_posts_navigation();
	else :
		?>
		<p><?php esc_html_e( 'No content found.', 'pillarlegalmarketing' ); ?></p>
		<?php
	endif;
	?>

	<?php get_template_part( 'template-parts/contact-section' ); ?>

<?php get_footer(); ?>
