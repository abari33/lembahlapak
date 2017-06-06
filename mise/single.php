<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mise
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Post', 'mise' ) . '<i class="fa fa-lg fa-angle-double-right spaceLeft"></i></span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'mise' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fa fa-lg fa-angle-double-left spaceRight"></i>' . __( 'Previous Post', 'mise' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'mise' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_sidebar('push');
get_footer();
