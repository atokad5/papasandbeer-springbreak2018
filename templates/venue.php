<?php /* Template Name: Venue Page */ 
  $root = get_template_directory_uri();
  get_header();
?>
<?php get_template_part('includes/nav') ?>

<section class="bg-area" style="background-image: url(<?php the_field('header_background');?>);">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
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


  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
</section>


 <section class="added_section is-blue" style="position: relative;">
  <div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner is-center">
    <h1 class="section-header">Slider Section</h1>
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
</section>
</section>

<section class="spaceoff-footer is-blue">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>

<?php get_footer(); ?>