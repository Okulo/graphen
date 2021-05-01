<?php
/**
 * @package Resonar
 * @since Resonar 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php the_post_thumbnail( 'full' ); ?>
    <?php get_the_post_thumbnail( $post_id, 'full' );   ?>
    <header class="entry-header">
        <div class="entry-header-inner">
            <?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
    </header>
	<div class="entry-content-footer">
		<div class="content container">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'resonar' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'resonar' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php // get_template_part( 'author-bio' ); ?>
			<?php // resonar_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'resonar' ), '<span class="edit-link">', '</span>' ); ?>
			<?php get_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
