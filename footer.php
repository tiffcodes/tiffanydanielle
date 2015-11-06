		<footer class='contact'>
			<h3>Contact <span>Me</span></h3>
			<div class='container contactInformation'>

			<!-- CONTACT SECTION -->

				<div class="contactInfo">
					<a href='mailto:hello@tiffanydanielle.ca'>
						<h4 class='email'>hello@tiffanydanielle.ca</h4>
					</a>
					<a href='#'>
						<h4>416-389-8787</h4>
					</a>
				</div> <!-- /contactInfo -->

				
			<!-- FORM SECTION -->

		        <form action='http://formspree.io/hello@tiffanydanielle.ca' method='POST'>
		        	<input type='text' placeholder='Name'>
		        	<input type='email' placeholder='Email Address'>
		        	<input type='textarea' placeholder='Message'>
		        	<input type="text" name="_gotcha" style="display:none" />
		        	<input type="hidden" name="_next" value="http://tiffanydanielle.ca"/>
		        	<div class="submit">
		        		<input type='submit' text='Submit'>
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

							<section id="<?php echo $post->post_name; ?>">
								<a href='mailto: <?php the_field('email'); ?>'><i class='fa fa-envelope'></i></a>
							    <a href='<?php the_field('phone'); ?>'><i class='fa fa-phone'></i></a>
							   	<a href='<?php the_field('linkedin'); ?>'><i class='fa fa-linkedin'></i></a>
							    <a href='<?php the_field('github'); ?>'><i class='fa fa-github'></i></a>
							    <a href='<?php the_field('twitter'); ?>'><i class='fa fa-twitter'></i></a>
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

		<?php wp_footer(); ?>
	</body>
</html>