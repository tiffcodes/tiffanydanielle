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


	<section class='about' id='about'>
		<div class='container1'>
			<h3>About <span>Me</span></h3>

	        <div class="aboutMe clearfix">
	        	<div class="short">
	        		<?php the_field('short_about_me'); ?>
	        	</div> <!-- /short -->
	        	<div class="long">
	        		<?php the_field('long_about_me'); ?>
	        	</div> <!-- /long -->
	        </div> <!-- /aboutMe -->
	  		<div class="resumeButton button">
	  			<a href="#">
	  				<p>View My Resume</p>
	  			</a>
	  		</div> <!-- /resumeButton -->

			<div class='skill'>
				<?php while(has_sub_field('skills')): ?>
					<div class="tech wow animated fadeInUp">
		            	<i class='devicons devicons-<?php the_sub_field('icon_name'); ?>'></i>
		            	<p><?php the_sub_field('skill'); ?></p>
		           	</div> <!-- /tech -->
	            <?php endwhile; ?>
           	</div> <!-- /skill --> 

		</div> <!-- /container1 -->
	</section> <!-- /about -->


<!-- PORTFOLIO SECTION -->


	<section class="portfolio" id='portfolio'>
<!-- 		<div class="container"> -->
			<h3>Portfolio</h3>


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
							<div class="projects">
								<div class="container">
									<div class="projectPhoto animated fadeInRight wow data-wow-delay="1s"">
										<?php the_post_thumbnail('portfolioItem'); ?>
									</div> <!-- /projectPhoto -->

									<div class="projectInfo clearfix animated fadeInLeft wow data-wow-delay="1s"">
										<div class='techUsed'>
											<?php while(has_sub_field('technologies')): ?>
											  	<p><?php the_sub_field('tech_used'); ?> / </p>
											<?php endwhile; ?>
										</div> <!-- /techUsed -->
										<h4><?php the_title(); ?></h4>
										<p><?php the_field('long_description'); ?></p>

										<div class="buttonLink">
											<a href='<?php the_field('live_link'); ?>'><p>View Live</p></a>
										</div> <!-- /buttonLink -->
										<div class="buttonLink">
											<a href='<?php the_field('github_link'); ?>'><i class='devicons devicons-github_badge'></i></a>
										</div> <!-- /buttonLink -->

									</div> <!-- /projectInfo -->
								</div> <!-- /animated /fadeInLeft / wow /container -->
							</div> <!-- /projects -->
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						
					<?php endif; ?>


		<!-- </div> /container -->
	</section> <!-- /portfolio -->


<?php get_footer(); ?>




