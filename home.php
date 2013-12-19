<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="row">
	<div class="col-md-12" >
		

		<div class="container">
			<img id="header-space" src="http://projectmonma.org/wp-content/uploads/banner1.jpg" class="img-responsive" alt="Responsive image">
			<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div id="content" role="main">
						
						<!--the loop-->
						<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											
											<div class="entry-content">
												<?php the_content(); ?>
												<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
										<!--		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
											</div><!-- .entry-content -->
										</div><!-- #post-## -->

									<!--	<?php comments_template( '', true ); ?>

						<?php endwhile; // end of the loop. ?>
						
						<!-- end the loop-->		
						
						<!--market banner-->
						 <div class="market-banner">
							<img id="market-banner-width" src="http://projectmonma.org/wp-content/uploads/market-banner.png" class="img-responsive" alt="Responsive image">
								<div class="container">
								  <div class="market-banner-caption">
									 <h1>Marketplace</h1>
									 <p>Browse our beautiful selection of hand-crafted necklaces, earrings and bracelets </p>
									 <p><a class="btn btn-lg btn-primary" href="http://projectmonma.org/market">Market</a>
								  		</p>
								  </div>
								</div>
						 </div>
			
						
						<!--end market banner-->        
										
		     			  
		     			 
		     			</br>
		     		<div class="row">
  <div class="col-md-12 "><!--twitter-->
		     			  <div class='twitter'>
		     			  <a class="twitter-timeline" href="https://twitter.com/ProjectMonMa" data-widget-id="311798217358589953" data-chrome="nofooter noheader noborders transparent" data-tweet-limit="3">Tweets by @ProjectMonMa</a>
		     			  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		     			  </div></div>	
		     			  
				

					</div><!-- #content -->
				</div><!-- .col-md-8 -->
				</div>
				<div class="col-md-3">	
					
				<!--	<?php get_sidebar(); ?> 
					
			    <!--Posts-->
  			  <h2><a href= "/blog">Recent Posts</a></h2>
  			  <div class= "eventslist"><?php query_posts('cat=3&showposts=3'); ?>
  			  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			  <ul  class="unstyled">
  			    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  			      </br>
  			      <small><?php the_date(); ?></small>
  			    </li>
  			  </ul>
  			  <?php endwhile; endif; ?>
  			  </div>
  			  
			<!--project widget-->
						 
			<div class="thumbnail" style="padding: 0">
				<div style="padding:4px">
					<img alt="300x200" style="width: 100%" src="http://projectmonma.org/wp-content/uploads/mrkt.jpg">
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
						<div class="col-sm-4 col-lg-4"><b>$3000</b><br><small>GOAL</small></div>
					</div>
				</div>
			</div>
			<!--end project widget-->
			
			  
			
  			  
  			
  			 </br>
			<div class="icons">
    		<a class="twitter" href="http://twitter.com/projectmonma"></a>
    		<a class="pinterest" href="https://www.pinterest.com/ProjectMonMa"></a>
    		<a class="facebook" href="https://www.facebook.com/ProjectMonMa"></a>
    		<a class="github" href="https://github.com/brianmcdonald/projectmonma"></a> 
			<a class="youtube" href="https://youtube.com/brianmcdonald/projectmonma"></a>
			</div>	
			  
				</div><!-- .col-md-3 -->
			</div><!-- .row -->
			<hr>
			<div class="row">
				<div class="col-md-2">
				<h2><a href= "/about">About</a></h2>
				<p>Found out more about who the project aims to help. Find out about the issues they face and how our work tackles these issues.</p>
				<p><small><a href= "/about">>>about</a></small></p>
				</div>
				
				<div class="col-md-3">
				<!--Projects-->
  			  <h2><a href= "/projects">Projects</a></h2>
  			  <hr>
  			  <div class= "eventslist"><?php query_posts('cat=4&showposts=5'); ?>
  			  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			  <ul  class="unstyled">
  			    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  			      </br>
  			      <small><?php echo get_post_meta( get_the_ID(), 'project-status', true ) ?></small>
  			     <!-- <small><?php the_date(); ?></small> -->
  			    </li>
  			  </ul>
  			  <hr>
  			  <?php endwhile; endif; ?>
  			 
  			  </div>
				</div>
				
				
				
				<!--Events-->
				<div class="col-md-3">
  			  <h2><a href= "/events">Events</a></h2>
  			  <div class= "eventslist"><?php query_posts('cat=34&showposts=5'); ?>
  			  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			  <ul  class="unstyled">
  			    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  			      </br>
  			      <small><?php echo get_post_meta( get_the_ID(), 'event-date', true ) ?></small>
  			    </li>
  			  </ul>
  			  <?php endwhile; endif; ?>
  			  
  			  </div>
				</div>
				
				<div class="col-md-2">
				<h2><a href= "/donate">Donate</a></h2>
				<p>Interested in what we are doing?</p><p> Show our projects some love by donating!</p>
				<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-heart"></span> Donate</button>
				</div>
				
		<!--		<div class="col-md-2">
				<h2><a href= "/donate">Donate</a></h2>
				<p>Test text</p>
				</div> -->
				<div class="col-md-2">
				<!--Subscribe-->
			  <!--subscribe script-->
			  <h2><a href= "/projects">Subscribe</a></h2>

			  <?php
			    //user posted variables
			    $name = "EWB";
			    $email = $_POST['message_email'];
			    $message = "Please add this person to the mailing list " . $_POST['message_email'];

			    //php mailer variables
			    $to = "brian.mcdonald01@gmail.com";
			    $subject = "New Subscriber for ".get_bloginfo('name');
			    $headers = 'From: '. $email ;
  
			   	if ( isset( $_POST['submitted'] ) ) {   
	 
			  		//validate email
			  		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			  			generate_response("error", $email_invalid);
			  		else //email is valid
			  		{	
			  			$sent = mail($to, $subject, $message, $headers);
			  			if($sent) { echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Subscription successful!</div>';
				
			  			}
			  			else echo'<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Subscription failed!</div>';
			  		}
			   	}
			  ?>
			  <div >
				  <?php echo $response; ?>
				  <form role="form" action="/" method="post">
				    <div class="form-group">
				      <label for="message_email">Subscribe to our newsletter</label>
				      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="message_email" value="<?php echo $_POST['message_email']; ?>">
				    </div>
				    <input type="hidden" name="submitted" value="1">
				    <button type="submit" class="btn btn-primary"><i class="glyphicon-envelope glyphicon-white"></i> Submit</button>
				  </form>
				  
			  </div>
			  </div>
			  <!--end subscribe-->
				
				
			</div>
		</div><!-- .container -->

<?php get_footer('home'); ?>
