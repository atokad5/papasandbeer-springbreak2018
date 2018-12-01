<?php $root = get_template_directory_uri(); ?>
<?php $contacter = is_page_template("templates/contact.php");?>
<?php $flag = $contacter ? 'white' : 'orange'; ?>


<section class="is-blue" style="position: relative;">
	<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-$flag.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner">
			
				<div class="content-area is-white is-center">

					<div class="section-header">
						faq's
					</div>

					<div class="mini-spliter animated-spliter"></div>
					
					<div class="content-area has-max">
						<p>Got questions? We Got Answers</p>
					</div>

				</div>

				<div class="faq-card has-max">

				<?php for($i = 0; $i < 3; $i++) : ?>

					<div class="faq-card__element">
						<div class="faq-card__subject">
							<p class="cat-type">Category for a FAQ</p>
							<h3>Sub Title</h3>
							
							<div class="indicator">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><g transform="translate(-8.5 -8)"><rect style="fill:#ea5859;" width="4" height="19" transform="translate(16 8)"/><rect style="fill:#ea5859;" width="4" height="19" transform="translate(27.5 15.5) rotate(90)"/></g></svg>
							</div>
						</div>

						<?php for($fc = 0; $fc < 5; $fc++): ?>
							<div class="faq-card__faq-panel">
								<div class="faq-card__faq-panel--inner">
									<div class="question">Question</div>
									<div class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, maxime illo iusto quo odio corporis perferendis aspernatur debitis, error voluptas laborum obcaecati nulla fugit et incidunt soluta velit non fuga!</div>
								</div>
							</div>
						<?php endfor; ?>

					</div>

				<?php endfor ;?>

				</div>



				

		</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
</section>