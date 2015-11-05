<?php

/*
	Template Name: Home Page
*/

get_header();  ?>


	  <div class='container'>
	  	<h1>Tiffany <p>Danielle</p></h1>	
	  	<p class='title'>Front-End Web Developer</p>
	  </div> <!-- /container -->
	</div> <!-- /hero  --> 


	<section class='about'>
		<div class='container1'>
			<h3>About Me</h3>
			<div class='skill'>

				<?php while(has_sub_field('skills')): ?>
		            	<i class='devicons devicons-<?php the_sub_field('icon_name'); ?>'></i>
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

	<section class="portfolio">
		<div class="container">
			<h3>Portfolio</h3>
		</div> <!-- /container -->
	</section> <!-- /portfolio -->

<!--     <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?> -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>