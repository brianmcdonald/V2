<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="container">
			<div class="row">

				<div class="col-md-8 col-md-offset-1">
					<div id="content" role="main">
						
						<h1 class="page-title"><?php
							printf( __( '%s', 'twentyten' ), single_cat_title( '', false )  );
						?></h1>
						<?php
							$category_description = category_description();
							if ( ! empty( $category_description ) )
								echo '<div class="archive-meta">' . $category_description . '</div>';

						/* Run the loop for the category page to output the posts.
						 * If you want to overload this in a child theme then include a file
						 * called loop-category.php and that will be used instead.
						 */
						get_template_part( 'loop', 'category' );
						?>

					</div><!-- #content -->
				</div><!-- .col-md-8 -->

				<div class="col-md-3">	
				<!--	<?php get_sidebar(); ?> 
				<!--project widget-->
						 
			<div class="thumbnail" style="padding: 0">
				<div style="padding:4px">
					<img alt="300x200" style="width: 100%" src="http://localhost/wordpress/wp-content/uploads/2013/11/mrkt.jpg">
				</div>
				<div class="caption">
					<h2><a href= "/?p=715">Project 1</a></h2>
					<p>Marketplace Launch</p>
					<p><span class="glyphicon glyphicon-map-marker"></span> Gulu, Uganda</p><small><span class="label label-warning">In progress...</span></small>
				</div>
				<div class="modal-footer" style="text-align: left">
					<div class="progress progress-striped active">
					  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 59%">
					    <span class="sr-only">45% Complete</span>
					  </div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-lg-4"><b>59%</b><br><small>FUNDED</small></div>
						<div class="col-sm-4 col-lg-4"><b>$1765</b><br><small>PLEDGED</small></div>
						<div class="col-sm-4 col-lg-4"><b>94</b><br><small>DAYS</small></div>
					</div>
				</div>
			</div>
			<!--end project widget-->
				</div><!-- .col-md-3 -->
				
			</div><!-- .row -->
		</div><!-- .container -->

<?php get_footer(); ?>
