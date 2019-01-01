<?php /* Template Name: Venue Page */ 
  $root = get_template_directory_uri();
  get_header();
?>
<?php get_template_part('includes/nav') ?>

<section class="bg-area" style="background-image: url(<?php the_field('header_background');?>);">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div>
          <h2 class="dates">The Venue</h2>
          <h1 class="section-header"><?php the_field('page_title'); ?></h1>
          <div class="has-max large-text"><?php the_field('day_night_pre_text'); ?></div>
        </div>
      </div>
    </div>  
  </div>


  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="spacing spacing--sm"></div>
</section>

<script>
  var windowInfo = {
    root : "<?php echo $root; ?>"
  }
</script>


 <section class="added_section is-blue bgChange" style="position: relative;">
  <div class="stroke-section stroke-section-orange swappy-stroke" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="spacing spacing--md"></div>
      <div class="flex-parent-element_venue">

      <div class="content-section_venue flexy_venue">

<div class="venue-section-headers">
  <h1 class="section-header snaggy-type day active bgday">DAY</h1>
  <h1 class="section-header snaggy-type night bgnight">NIGHT</h1>
</div>

<div class="venue-section-content" style="color: white;">

  <div class="content-day content-ve">
    <?php the_field('day_time_content'); ?>
    <div class="arrow-box">
      <button class="is-btn slider_btn pre">
        <?php get_template_part('includes/icons/left-arrow'); ?>
      </button>
      <button class="is-btn slider_btn next">
        <?php get_template_part('includes/icons/left-arrow'); ?>
      </button>
    </div>
  </div>

  <div class="content-night content-ve">
  <?php the_field('night_time_content'); ?>
    <div class="arrow-box">
      <button class="is-btn slider_btn pre">
        <?php get_template_part('includes/icons/left-arrow'); ?>
      </button>
      <button class="is-btn slider_btn next">
        <?php get_template_part('includes/icons/left-arrow'); ?>
      </button>
    </div>
  </div>
</div>

</div>

        <div class="content-section_venue flexy_venue">
          

          <div class="venue_images images-day">
            <?php $dayImages = get_field('day_time_assets'); ?>
            <?php foreach($dayImages as $theImages) {?>
              <div class="venue-image-element">
                <div class="venue-img_item" style="background-image: url(<?php echo $theImages['image']?>); background-size: cover; background-position: center;">

                </div>
                <div class="venue-img_content" style="color: white;">
                  <p><?php echo $theImages['content'] ?></p>
                </div>
              </div>
            <?php }; ?>
          </div>

          <div class="venue_images images-night">
            <?php $nightImages = get_field('night_time_assets'); ?>
              <?php foreach($nightImages as $theImages) {?>
                <div class="venue-image-element">
                  <div class="venue-img_item" style="background-image: url(<?php echo $theImages['image']?>); background-size: cover; background-position: center;">

                  </div>
                  <div class="venue-img_content" style="color: white;">
                    <p><?php echo $theImages['content'] ?></p>
                  </div>
                </div>
              <?php }; ?>
          </div>
        
          
        </div>


       
      </div>

      
   
  </div>




  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>


<section class="is-orange">
<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
<div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="flexing-map">
      <div class="flexing-map-section">
        <figure class="map-image">
          <img src="<?php the_field('venue_map');?>" alt="">
        </figure>
      </div>
      <div class="flexing-map-section">
        <div class="content-area is-white blog-area">
          <?php the_field('venue_copy'); ?>
          <div class="cta-el">
            <a href="<?php the_field('venue_map');?>" class="cta" Download>Download Map</a>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="spacing spacing--md"></div>
</section>


<section style="position: relative;">
<div class="stroke-section stroke-section-orange is-rotated" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>

  <div class="inner is-center">
    <h1 class="section-header"><?php the_field('exclusive_headline'); ?></h1>
  </div>

  <div class="inner accordion has-max push-top">
    <?php 
      $exclusiveEl = get_field('exclusive_elements');
      foreach($exclusiveEl as $eEl) {
    ?>

    <div class="topic">
      <div class="accordion-trigger">
        <h2><?php echo $eEl['title']; ?></h2>

        <div class="accordion-indicator">
          <span></span><span></span>
        </div>
      </div>

      <div class="accordion-content blog-area">
        <?php echo $eEl['copy']; ?>
      </div>

    </div>

    <?php } ?>
  </div>


  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  
</section>



<section class="is-orange rosa-map" style="position: relative;">
<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner is-center is-white">
    <h1 class="section-header"><?php the_field('rosa_map_title'); ?></h1>
    <div class="content-area has-max">
      <?php the_field('rosa_map_entry_copy'); ?>
    </div>

    <div class="image--container">
      <div class="image-element-nested" style="background-image: url(<?php the_field('rosa_map');?>); background-size: cover; background-position: center;">

      </div>
    </div>

    <div class="is-center cta-el">
      <a href="<?php the_field('rosa_map');?>" class="cta" Download>Download Map</a>
    </div>

  </div>


  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  
</section>



<section style="position: relative;">
<div class="stroke-section stroke-section-orange is-rotated" style="background-image: url(<?php echo "$root/_assets/images/stroke-orange.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
	<div class="inner clearfix flex-slide" style="color: black;">


		<div class="is-half-el-slider video-par">
			<div class="is-image-grid-content" style="color: black;">
					<div class="content-area mobile-center">
						<h2 class="dates sm-hdr">
              <?php the_field('video_call_out_subheadline') ?>
            </h2>
					</div>
					<div class="image-layout-hdr">
						<div class="content-area mobile-center">
							<h1 class="section-header"><?php the_field('video_call_out_headline'); ?></h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<?php the_field('video_call_out_copy'); ?>
            </div>					
            <div class="section-cta">
              <a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
            </div>
					</div>

	
				</div>
    </div>
    
		<div class="is-half-el-slider video-par">
			<div class="video-el video-trigger" style="background-image: url(<?php the_field('video_call_out_placeholder'); ?>); background-position: center; background-size: cover;" data-video-src="<?php the_field('video_src');?>">
          <div class="py-bt">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 89.334 89.334"><defs><style></style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f29e67"/><stop offset="1" stop-color="#dd675d"/></linearGradient></defs><g transform="translate(-1774.33 -1025.238)"><circle class="a" style="fill:#fff;" cx="44.667" cy="44.667" r="44.667" transform="translate(1774.33 1025.238)"/><path class="b" style=
            "fill:url(#a);" d="M0,0,22.079,3.473,12.462,13.09l-9.04,9.04Z" transform="translate(1830.154 1069.337) rotate(135)"/></g></svg>
          </div>

      </div>
      <div class="video-cap">
        <p><?php the_field('video_message'); ?></p>
      </div>
		</div>
	</div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
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




<section class="spaceoff-footer is-blue" style="position: relative;">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
</section>

<?php get_footer(); ?>