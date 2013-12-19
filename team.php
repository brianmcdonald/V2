<?php
/**
 * template name: Team
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

				<div class="col-md-9 col-md-offset-1">
					<div id="content" role="main">

						<!--the loop-->
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<?php if ( is_front_page() ) { ?>
												<h2 class="entry-title"><?php the_title(); ?></h2>
											<?php } else { ?>
												<h1 class="entry-title"><?php the_title(); ?></h1>
											<?php } ?>
											
											<!--thumbnails-->
											<div class="row">
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/2012/08/Johanna.jpg" alt="...">
													<div class="caption">
													  <h3>Johanna Higgs</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/2012/08/Brian.jpg" alt="...">
													<div class="caption">
													  <h3>Brian Mc Donald</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/2012/08/Tosha.jpg" alt="...">
													<div class="caption">
													  <h3>Tosha Maggie</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/Clara-e1350107795326.jpg" alt="...">
													<div class="caption">
													  <h3>Clara Bradley</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/saad.jpg" alt="...">
													<div class="caption">
													  <h3>Saad Karim</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/lindsey.jpeg" alt="...">
													<div class="caption">
													  <h3>Lindsey Henderson</h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  <div class="col-sm-6 col-md-4">
												 <div class="thumbnail">
													<img src="http://projectmonma.org/wp-content/uploads/Prad.jpg" alt="...">
													<div class="caption">
													  <h3>Pradyuman Singh Rawat </h3>
													  <p>...</p>
													  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
													</div>
												 </div>
											  </div>
											  
											</div>
											<!--thumbnails end-->

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
			
			</div><!-- .row -->
		</div><!-- .container -->

<?php get_footer(); ?>
