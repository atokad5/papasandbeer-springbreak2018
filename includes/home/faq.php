<?php $root = get_template_directory_uri(); ?>
<section class="is-blue">
	<div class="spacing spacing--md"></div>
		<div class="inner">
			
				<div class="content-area is-white is-center">

					<div class="section-header">
						<h1>faq's</h1>
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
							<h1>Category Name</h1>
							<h4>Sub Title</h2>
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