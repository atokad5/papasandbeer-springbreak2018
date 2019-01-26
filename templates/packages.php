<?php /* Template Name: Packages Page */
  $root = get_template_directory_uri();
  get_header();
?>
<?php get_template_part('includes/nav') ?>


<section class="bg-area" style="background-image: url(<?php the_field('header_background');?>);">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
	<div class="spacingElement"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div class="hero_title_push_bottom">
          <h1 class="section-header"><?php the_field('page_title'); ?></h1>
        </div>
      </div>
    </div>  
	
    <div class="image-calendar-parent">
      <a href="" class="slide_link-packages">
				<figure class="image-calendar" >
					<img src="<?php the_field('calendar_image');?>" alt="">
				</figure>
			</a>
    </div>

  </div>


  <div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacingElement"></div>
  <div class="spacing spacing--sm"></div>
</section>


 <section class="added_section is-blue" style="position: relative;">
  <div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div id="package-parent" class="inner" style="color: white;">
    <div class="is-center">
			<h1 class="section-header"><?php the_field('weekend_package_title'); ?></h1>
		</div>
		<div class="content-area has-max">
      <div class="is-center blog-area">
				<?php the_field('weekend_package_copy'); ?>
			</div>
		</div>
		
		<?php $packages = get_field('weekend_package_options'); ?>

		<div class="package-option-parent">
			<?php foreach($packages as $theWeekend) { ?>
				<div class="package-option">
					<div class="package-option__element">
						<div class="package-content">
							<h2 class="dates"><?php echo $theWeekend['dates']; ?></h2>
							<h1 class="section-header"><?php echo $theWeekend['title']; ?></h1>
							<h2 class="dates artist_names-packages" style="color: #eee">
								<?php echo $theWeekend['artist_names'] ;?>
							</h2>
						</div>

						<div class="package-button">
						<a href="<?php echo $theWeekend['link']['url']; ?>" class="cta"><?php echo $theWeekend['link']['title']; ?></a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
  </div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>

</section>




<section style="position: relative;" id="weekday-packages">
<div class="stroke-section stroke-section-orange is-rotated" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>

  <div class="inner">
    <div class="is-center">
			<h1 class="section-header"><?php the_field('weekday_package_title'); ?></h1>
		</div>

		<div class="sponsor-wrapper-outter">
			<div class="sponsor-wrapper">
				<div class="sponsor-logos">
					<div class="sponsor-logos__element">
						<img src="<?php the_field('sponsor_image_one');?>" alt="">
					</div>
					<div class="sponsor-logos__element">
						<img src="<?php the_field('sponsor_image_two');?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="content-area has-max">
      <div class="is-center blog-area">
				<?php the_field('weekday_package_copy'); ?>
			</div>
    </div>

		<?php $packagesTwo = get_field('weekday_package_options'); ?>

		<?php foreach($packagesTwo as $theWeekDay) { ?>
			<div class="package-option">
				<div class="package-option__element">
					<div class="package-content">
						<h2 class="dates"><?php echo $theWeekDay['dates']; ?></h2>
						<h1 class="section-header"><?php echo $theWeekDay['title']; ?></h1>
						<h2 class="dates artist_names-packages" style="color: #343434">
							<?php echo $theWeekDay['artist_names'] ;?>
						</h2>
					</div>

					<div class="package-button">
					<a href="<?php echo $theWeekDay['link']['url']; ?>" class="cta"><?php echo $theWeekDay['link']['title']; ?></a>
					</div>
				</div>
			</div>
		<?php } ?>
  </div>
	

	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>



<section class="is-blue" style="position: relative;">
	<div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner">
			
				<div class="content-area is-white is-center">

					<div style="color: white;">
						<h1 class="section-header" style="font-weight: 100;">
							<?php if ( get_field('faq_header', 'option') ) : ?>
							Faqs
							<?php endif; ?>
							
						</h1>
					</div>

					<div class="mini-spliter animated-spliter"></div>
					
					<div class="content-area has-max" style="color: white;">
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
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
</section>






<?php get_footer(); ?>