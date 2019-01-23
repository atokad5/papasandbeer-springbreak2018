<?php 
	$root = get_template_directory_uri();
?>

<div class="cookie-mobile">
	<div class="cookie-inner inner">
	</div>
</div>



<footer style="position: relative;">
	<div id="venue-parent">
		<figure id="venue-image">
			<img class="lazy-image" data-lazy="<?php echo "$root/_assets/images/footer-image-2.png" ; ?>" src="" alt="Venue Image for Papas&Beer">
		</figure>
	</div>
		<div class="inner footer-grid">

			<div class="footer-column mobileOnly">

				<div class="footer-row come_to_life">
					<div class="mini-spliter animated-spliter" id="ontopHd"></div>
					<h2>A day and night beach club, one city block in size, sitting right on Rosarito Beach</h2>
				</div>
					
			</div>


				<div class="footer-column is-large">
					<h3 class="footer-section-title">Get In Touch</h3>
					<div class="mini-spliter animated-spliter"></div>
					<a taget="_BLANK" href="https://www.google.com/maps/place/Papas+%26+Beer/@32.3378241,-117.0571455,15z/data=!4m5!3m4!1s0x0:0xa4536611499b42fa!8m2!3d32.3378241!4d-117.0571455">CORONADO 400, PLAYAS ROSARITO</a>
					<p>ROSARITO, BC, MEXICO</p>
					<p class="contact-us-footer"><a href="<?php echo site_url('/contact-us'); ?>">CONTACT US</a></p>
					<?php get_template_part('includes/social-links') ?>
					<div class="mobile__footer-content">
						<p>&copy; 2019 PAPAS AND BEER SPRING BREAK FEST ALL RIGHTS RESERVED</p>
						<p><a href="">TERMS & CONDITIONS</a> <span> | </span> <a href="">PRIVACY POLICY</a></p>
					</div>
				</div>


				<div class="footer-column is-small clearfix">

					<div class="footer-row half_small">
						<h3 class="footer-section-title">Venue</h3>
						<div class="mini-spliter animated-spliter"></div>
						<ul>
							<li><a href="<?php echo site_url('/venue');?>">ABOUT THE VENUE</a></li>
						</ul>
					</div>

					<div class="footer-row half_small">
						<h3 class="footer-section-title">TRAVEL</h3>
						<div class="mini-spliter animated-spliter"></div>
						<ul>
							<li><a href="<?php echo site_url('/travel-and-hotel'); ?>">Driving</a></li>
							<li><a href="<?php echo site_url('/travel-and-hotel'); ?>">US/MX Borders</a></li>
							<li><a href="<?php echo site_url('/travel-and-hotel'); ?>">HOTELS</a></li>
						</ul>
					</div>

				</div>




				<div class="footer-column is-small clearfix">

					<div class="footer-row half_small">
						<h3 class="footer-section-title">Tickets</h3>
						<div class="mini-spliter animated-spliter"></div>
						<ul>
							<li><a href="<?php echo site_url('party-packages/'); ?>">View Packages</a></li>
						</ul>
					</div>

					<div class="footer-row half_small">
						<h3 class="footer-section-title">INFO</h3>
						<div class="mini-spliter animated-spliter"></div>
						<ul>
							<li><a href="<?php echo site_url('/about');?>">about spring break</a></li>
							<li><a href="<?php echo site_url('/contact-us');?>">FAQS</a></li>
							<li><a href="<?php echo site_url('/contact-us');?>">CONTACT</a></li>
						</ul>
					</div>

				</div>


				<div class="footer-column is-md">

					<div class="footer-row">
						<h3 class="footer-section-title">LINEUP</h3>
						<div class="mini-spliter animated-spliter"></div>
						<ul>
							<?php $idy = 215; ?>
							<li><a href="<?php echo site_url('/?lineup');?>">View lineup</a></li>
							<li><a href="<?php the_field('calendar_image' , $idy);?>" download>Download artist lineup flyer</a></li>
						</ul>
					</div>

					<div class="footer-row mobileOnly">
						<p>&copy; 2019 PAPAS AND BEER SPRING BREAK FEST ALL RIGHTS RESERVED</p>
						<p><a href="<?php echo site_url('tos'); ?>">TERMS & CONDITIONS</a> <span> | </span> <a href="<?php echo site_url('privacy-policy'); ?>">PRIVACY POLICY</a></p>

					</div>

					<div class="footer-row come_to_life mobile__footer-content">
						<div class="mini-spliter animated-spliter" id="ontopHd"></div>
						<h2>A day and night beach club, one city block in size, sitting right on Rosarito Beach.</h2>
					</div>
					
				</div>


		</div>



	<div class="spacing spacing--md"></div>
</footer>
