<?php /* Template Name: Travel and Hotel */ 
  $root = get_template_directory_uri();
  get_header();
?>
<?php get_template_part('includes/nav') ;?>

<section class="bg-area" style="background-image: url(<?php the_field('header_background');?>);">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div>
          <h1 class="section-header"><?php the_field('page_title'); ?></h1>
        </div>
      </div>
    </div>  
  </div>

  <div class="cats-parent">
    <div class="cats-nav-section">
      <div class="inner">
        <div>
          <ul  class="cats-navEl">
           <?php $li = get_field('page_section'); ?>
           <?php foreach($li as $theLi ) { ?>
              <li><a href="#0"><?php echo $theLi['section_name']; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    
  </div>

  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="spacing spacing--sm"></div>
</section>




<div class="group-section">
<?php 
  $parentLoop = get_field('page_section');
  $count = 0;
foreach($parentLoop as $theLoop) {  
    $count++
  ?>
  <section class="added_section is-blue" style="position: relative;">
  <?php if($count === 1) {?> 
    <div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
    <div class="spacing spacing--md"></div>
   <?php } ?>
    

    <div class="inner">
      <div class="add_section__header is-white flex">

        <div class="mt_content_group flex_el">
          <div>
            <h1 class="section-header"><?php echo $theLoop['section_title']; ?></h1>
          </div>
          
          <div class="content-area blog-area">
            <?php echo $theLoop['section_content']; ?>
            <div class="arrow-box" style="padding-top: 1em;">
             <button class="is-btn slider_btn pre">
              <?php get_template_part('includes/icons/left-arrow'); ?>
            </button>
            <button class="is-btn slider_btn next">
              <?php get_template_part('includes/icons/left-arrow'); ?>
            </button>
            </div>
          </div>
        </div>

        <div class="slider_area_mt flex_el slidey">
          
          <?php foreach($theLoop['section_card_image'] as $theImage) { ?>
          

        <div class="slider-el">
          <!-- <a href="<?php echo $theImage['link']; ?>"> -->
            <div class="height"></div>
            <figure class="slider--image is-bg"  data-bg-src="<?php echo $theImage['url']; ?>" style="background-image: url();">
              <div></div>
              <figcaption class="slide-txt">
                <div class="contents-inner-slider">
                  <h4><?php echo $theImage['title']; ?></h4>
                  <p><?php echo $theImage['caption']; ?></p>
                </div>
                <div class="gradient-hr"></div>
              </figcaption>
            </figure>
          <!-- </a> -->
        </div>

          <?php } ?>
        
        </div>
      </div>
    </div>
    <div class="spacing spacing--md"></div>

    <div class="hr-parent-sp">
      <div class="hr-splitter-ab"></div>
    </div>
  </section>
<?php } ?>
</div>


<?php $root = get_template_directory_uri(); ?>
<?php $contacter = is_page_template("templates/contact.php");?>



<section style="position: relative;">
	<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
		<div class="inner">
			
				<div class="content-area is-white is-center">

					<div style="color: black;">
						<h1 class="section-header" style="font-weight: 100;">
							<?php if ( get_field('faq_header', 'option') ) : ?>
							  <?php echo get_field('faq_header', 'option'); ?>
							<?php endif; ?>
							
						</h1>
					</div>

					<div class="mini-spliter animated-spliter"></div>
					
					<div class="content-area has-max" style="color: black;">
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


<section class="is-blue selling_fast">
<div class="stroke-section stroke-section-orange is-rotated is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-white.png"; ?>);"></div>
	<div class="spacing spacing--sm"></div>
	<div class="spacing spacing--md"></div>
	<div class="inner is-white">

		<div class="is-center">
			<div class="content-area">
				<div class="countdown-home">
					<div class="countdown-el" data-countdown="<?php the_field('countdown', 'option'); ?>">

					</div>
				</div>
				<!-- <h2 class="dates sm-hdr"><?php the_field('tickets_subtitle'); ?></h2> -->
			</div>
			<div class="hdr-el content-area">
				<h1 class="section-header"><?php the_field('headline', 'option'); ?></h1>
			</div>
			<div class="mini-spliter animated-spliter"></div>
			<div class="content-area has-max">
				<p><?php the_field('headline_copy', 'option'); ?></p>
			</div>
			<div class="section-cta is-center">
				<a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
			</div>
		</div>

	</div>
	<div class="spacing spacing--md"></div>
	<div class="spacing spacing--md"></div>
</section>




<section class="is-blue dkSpacing" style="position: relative;">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
</section>

<?php get_footer(); ?>