<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package police
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php police_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</div><!-- .entry-header -->

	<div>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'police' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'police' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php police_entry_footer(); ?>
	</footer>-->
</article><!-- #post-## -->
