<?php
/** template name: Narrow page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="container">
			<div class="row" id="headpad">

				<div class="col-md-10 col-md-offset-1">
					<div id="content" role="main">

						<!--the loop-->
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<?php if ( is_front_page() ) { ?>
												<h2 class="entry-title"><?php the_title(); ?></h2>
											<?php } else { ?>
												<h1 class="entry-title"><?php the_title(); ?></h1>
											<?php } ?>

											<div class="entry-content">
												<?php the_content(); ?>
												<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
												<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
											</div><!-- .entry-content -->
										</div><!-- #post-## -->

									<!--	<?php comments_template( '', true ); ?>

						<?php endwhile; // end of the loop. ?>
						
						<!-- end the loop-->
						

					</div><!-- #content -->
				</div><!-- .col-md-8 -->

		<!--		<div class="col-md-3 col-md-offset-1">	
					<?php get_sidebar(); ?>
				</div><!-- .col-md-3 -->
				
			</div><!-- .row -->
		</div><!-- .container -->

<?php get_footer(); ?>
