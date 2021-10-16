<?php
/**
 * @package Electa
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
        <?php if ( function_exists( 'bcn_display' ) ) : ?>
            <div class="cx-breadcrumbs">
                <?php bcn_display(); ?>
            </div>
        <?php endif; ?>

		<div class="entry-meta">
			<?php electa_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'electa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php electa_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
