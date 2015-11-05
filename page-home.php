<?php

/*
	Template Name: Home Page
*/

get_header();  ?>


<!-- HERO SECTION -->


	  <div class='container'>
	  	<h1>Tiffany <p>Danielle</p></h1>	
	  	<p class='title'>Front-End Web Developer</p>
	  </div> <!-- /container -->
	</div> <!-- /hero  --> 


<!-- ABOUT SECTION -->


	<section class='about'>
		<div class='container1'>
			<h3>About Me</h3>
			<div class='skill'>

				<?php while(has_sub_field('skills')): ?>
					<div class="tech">
		            	<i class='devicons devicons-<?php the_sub_field('icon_name'); ?>'></i>
		            	<p><?php the_sub_field('skill'); ?></p>
		           	</div> <!-- /tech -->
	            <?php endwhile; ?>

	        </div> <!-- /skill --> 
	        <div class="aboutMe clearfix">
	        	<div class="short">
	        		<?php the_field('short_about_me'); ?>
	        	</div> <!-- /short -->
	        	<div class="long">
	        		<?php the_field('long_about_me'); ?>
	        	</div> <!-- /long -->
	        </div> <!-- /aboutMe -->
	  		<div class="resumeButton">
	  			<a href="#">
	  				<p>Download My Resume</p>
	  			</a>
	  		</div> <!-- /resumeButton -->
		</div> <!-- /container1 -->
	</section> <!-- /about -->


<!-- PORTFOLIO SECTION -->


	<section class="portfolio">
		<div class="container1">
			<h3>Portfolio</h3>
			<div class="projects">

				<!-- Bringing in portfolio items  -->

				<?php

					$portfolioInfo = new WP_Query(
						array(
							'posts_per_page' => -1,
							'post_type' => 'portfolio',
							'order' => 'ASC'
							)
					); ?>

					<?php if ( $portfolioInfo->have_posts() ) : ?>

						<?php while ($portfolioInfo->have_posts()) : $portfolioInfo->the_post(); ?>

								<div class="projectPhoto">
									<?php the_post_thumbnail('full'); ?>
									<div class="view">
										<a href='<?php the_field('live_link'); ?>'><p>View Live</p></a>
										<a href='<?php the_field('github_link'); ?>'><i class='devicons devicons-github_badge'></i></a>
									</div> <!-- /view -->
								</div> <!-- /projectPhoto -->

								<div class="projectInfo clearfix">
									<h4><?php the_title(); ?></h4>
									<p><?php the_field('short_description'); ?></p>


									<?php while(has_sub_field('technologies')): ?>
									  <div class='techUsed'>
									  	<?php the_sub_field('tech_used'); ?> / 
									  </div> <!-- /techUsed -->
									<?php endwhile; ?>

								</div> <!-- /projectInfo -->
						
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						
					<?php endif; ?>

			</div> <!-- /projects -->
		</div> <!-- /container -->
	</section> <!-- /portfolio -->


<?php get_footer(); ?>




