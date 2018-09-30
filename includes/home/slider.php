<?php $root = get_template_directory_uri(); ?>
<section id="slider" class="is-blue">
	<div class="stroke-section stroke-section-orange is-rotated" style="background-image: url(<?php echo "$root/_assets/images/stroke-white.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="inner clearfix flex-slide">


		<div class="is-half-el-slider">
			<div class="is-image-grid-content">
					<div class="content-area">
						<h2 class="dates sm-hdr">This is only the beginning</h2>
					</div>
					<div class="section-header image-layout-hdr">
						<div class="content-area">
							<h1>the more inFo headline goes here</h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area">
							<p>Have a cold drink in hand while sitting under the sun, poolside listening to amazing music in good company. When the sun sets, our beachfront club lights up and comes to life. </p>
						</div>					
					</div>
	
				</div>
		</div>
		<div class="is-half-el-slider slider_parent">
			
			<?php for($i = 0; $i < 5; $i++) : ?>
				<div class="slider-el">
					<figure class="slider--image">
						<img src="" alt="">
					</figure>
				</div>
			<?php endfor; ?>
		</div>
		
	</div>
</section>