		<footer class='contact' id='contact'>
			<h3>Contact <span>Me</span></h3>
			<div class='container contactInformation'>

			<!-- CONTACT SECTION -->

				<div class="contactInfo">
					<a href='mailto:hello@tiffanydanielle.ca'>
						<h4 class='email'>hello@tiffanydanielle.ca</h4>
					</a>
					<a href='tel:+14163898787'>
						<h4>416-389-8787</h4>
					</a>
				</div> <!-- /contactInfo -->

				
			<!-- FORM SECTION -->

		        <form action='http://formspree.io/hello@tiffanydanielle.ca' method='POST'>
		        	<input type='text' placeholder='Name' name="name" class="" required>
		        	<input type='email' placeholder='Email Address' name="_replyto" required>
		        	<input type='textarea' placeholder='Message' name="message" required>
		        	<input type="text" name="_gotcha" style="display:none" />
		        	<input type="hidden" name="_next" value="http://tiffanydanielle.ca"/>
		        	<div class="submit">
		        		<input type='submit' text='Submit' class='button'>
		        	</div>
		        </form> <!-- /form -->
		    </div> <!--  /container /flexbox -->
		    <!-- SOCIAL SECTION -->
		    <div class="container">
		        <div class='social'>
					<?php

					$contactInfo = new WP_Query(
						array(
							'posts_per_page' => -1,
							'post_type' => 'contact',
							'order' => 'ASC'
							)
					); ?>

					<?php if ( $contactInfo->have_posts() ) : ?>

						<?php while ($contactInfo->have_posts()) : $contactInfo->the_post(); ?>

							<section id="<?php echo $post->post_name; ?>" class='wow animated fadeInUp'>
								<a href='mailto: <?php the_field('email'); ?>' target="_blank"><i class='fa fa-envelope'></i></a>
							    <a href='tel:<?php the_field('phone'); ?>' target="_blank"><i class='fa fa-phone'></i></a>
							   	<a href='<?php the_field('linkedin'); ?>' target="_blank"><i class='fa fa-linkedin'></i></a>
							    <a href='<?php the_field('github'); ?>' target="_blank"><i class='fa fa-github'></i></a>
							    <a href='<?php the_field('twitter'); ?>' target="_blank"><i class='fa fa-twitter'></i></a>
							</section>    
						
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						
					<?php endif; ?>
					<p class='copy'>&copy Tiffany Danielle</p>

		        </div> <!-- /social --> 
			</div> <!-- /container -->
		</footer> <!-- /contact -->

		<script>
		/* Google Analytics! */
		 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
		 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		 s.parentNode.insertBefore(g,s)}(document,"script"));
		</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/is_js/0.7.4/is.min.js"></script>
        <script>
        	new WOW().init();
        </script>
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-70049230-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<?php wp_footer(); ?>
	</body>
</html>