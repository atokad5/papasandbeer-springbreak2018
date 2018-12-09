<?php $root = get_template_directory_uri(); ?>
<?php $contacter = is_page_template("templates/contact.php");?>
<?php $flag = $contacter ? 'white' : 'orange'; ?>


<section class="is-blue" style="position: relative;">
	<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-$flag.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner">
			
				<div class="content-area is-white is-center">

					<div>
						<h1 class="section-header" style="font-weight: 100;">
							<?php if ( get_field('faq_header', 'option') ) : ?>
								<?php echo get_field('faq_header', 'option'); ?>
							<?php endif; ?>
							
						</h1>
					</div>

					<div class="mini-spliter animated-spliter"></div>
					
					<div class="content-area has-max">
						<?php if ( get_field('faq_message', 'option') ) : ?>
							<p><?php echo get_field('faq_message', 'option'); ?></p>
						<?php endif; ?>
						
					</div>

				</div>

				<div class="faq-card has-max">
				<?php $category = get_field('faq_qa', 'option') ;?>

				<?php foreach($category as $theCat) { ?>
				
					<div class="faq-card__element">
						<div class="faq-card__subject">
							<p class="cat-type"><?php echo $theCat['category_title'] ;?></p>
							<h3><?php echo $theCat['category_subtitle'] ;?></h3>
							
							<div class="indicator">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19"><g transform="translate(-8.5 -8)"><rect style="fill:#ea5859;" width="4" height="19" transform="translate(16 8)"/><rect style="fill:#ea5859;" width="4" height="19" transform="translate(27.5 15.5) rotate(90)"/></g></svg>
							</div>
						</div>

						
						<?php $theFaq = $theCat['qa'] ;?>


						<?php foreach($theFaq as $theF) { ?>
							
							
							<div class="faq-card__faq-panel">
								<div class="faq-card__faq-panel--inner">
									<div class="question"><?php echo $theF['question'] ;?></div>
									<div class="answer"><?php echo $theF['answer'] ;?></div>
								</div>
							</div>

						<?php } ?> 

					</div>

				<?php } ;?>

				</div>



				

		</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
</section>