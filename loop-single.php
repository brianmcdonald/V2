<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php twentyten_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->



					<div class="entry-utility">
					<div class="entry-meta">
					Last updated on <b><?php the_modified_time('F j, Y'); ?></b> by <b><?php the_modified_author(); ?></b> </div>
						<!--<?php twentyten_posted_in(); ?> -->
					<!--	<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?> -->
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<b><span class="glyphicon glyphicon-chevron-left btn-xs">' . _x( '', 'Previous post link', 'twentyten' ) . '</span></b> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <b><span class="glyphicon glyphicon-chevron-right btn-xs">' . _x( '', 'Next post link', 'twentyten' ) . '</span></b>' ); ?></div>
				</div><!-- #nav-below -->

			<!--replace with fb comments	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
