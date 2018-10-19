<?php /* Template Name: Dynamic Content */
  get_header(); 
  $root = get_template_directory_uri();
?>
<?php get_template_part('includes/nav') ?>
<section class="is-blue">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div class="section-header">
          <?php the_field('page_title'); ?>
        </div>
        <?php the_field('page_message'); ?>
      </div>
    </div>  
  </div>
  <div class="spacing spacing--md"></div>
</section>

<div class="group-section">
<?php 
  $parentLoop = get_field('page_section');

foreach($parentLoop as $theLoop) { ?>
  <section class="added_section is-blue">
    <div class="inner">
      <div class="add_section__header is-white flex">

        <div class="mt_content_group flex_el">
          <div class="section-header">
            <?php echo $theLoop['section_title']; ?>
          </div>
          
          <div class="content-area">
            <?php echo $theLoop['section_content']; ?>
          </div>
        </div>

        <div class="slider_area_mt flex_el slidey">
          
          <?php foreach($theLoop['section_card_image'] as $theImage) { ?>
          
          <div class="slider-el has-max">
					<!-- <a href=""> -->
						<figure class="slider--image" style="background-image: url(<?php echo $theImage['url']; ?>);">
							<!-- <img src="<?php echo $theSlide['link']; ?>" alt=""> -->
							<figcaption class="slide-txt">
								<div class="contents-inner-slider">
									<h4><?php echo $theImage['title']; ?></h4>
									<?php echo $theImage['caption']; ?>
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

<section class="spaceoff-footer is-blue">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>


<?php 
  get_footer();
?>