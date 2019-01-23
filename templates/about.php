<?php /* Template Name: About Template */ ;?>
<?php get_header(); ?>
<?php $root = get_template_directory_uri();?>
<?php get_template_part('includes/nav') ;?>


<section class="bg-area" style="background-image: url(<?php the_field('header_background') ;?>);">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div>
          <h1 class="section-header"><?php the_field('header_title'); ?></h1>
        </div>

        <div class="ply-btn-hero video-trigger" data-video-src="<?php the_field('video_src_header'); ?>">
          <div class="ply-btn-el-hero">
            <?php get_template_part('includes/icons/play-btn') ;?>
          </div>
  
        </div>
        
        <div class="watch-video">
         <?php the_field('video_title'); ?>
        </div>
        
      </div>
    </div>  
  </div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
</section>


<section  style="position: relative;">
	<div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-white.png"; ?>);"></div>
  <div class="inner">
    <div class="about-card">
      <div class="about-content blog-area">
        <?php the_field('about_content'); ?>
      </div>
      
    </div>
  </div>
</section>


<div class="inner">


<div class="center_text push-bottom">
  <div class="content-area">
    <h2 class="dates sm-hdr">
      <?php the_field('image_grid_subheader'); ?>
    </h2>
  </div>
  <div class="image-layout-hdr">
    <div class="content-area">
      <h1 class="section-header"><?php the_field('image_grid_main_header'); ?></h1>
    </div>
  </div>
</div>

<div class="image-grid-about rise-up">
  <?php $imageGridAbout = get_field('about_image_grid'); ?>
  <?php foreach($imageGridAbout as $theGridder) {?>
    <div class="ug-parent">
      <div class="ug-item is-bg" data-bg-src="<?php echo $theGridder['url'] ?>" style="background-image: url();">
        
        <div class="author">
          <?php echo $theGridder['title']; ?>
        </div>
        
      </div>
    </div>
  <?php } ;?>

</div>


</div>


<?php $root = get_template_directory_uri(); ?>
<section id="slider" class="is-blue s_sec square_up">
<div class="spacing spacing--md"></div>
<div class="spacing spacing--md"></div>
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>




	<div class="inner clearfix flex-slide">


		<div class="is-half-el-slider video-par">
			<div class="is-image-grid-content">
					<div class="content-area mobile-center">
						<h2 class="dates sm-hdr">
              <?php the_field('sub_headline'); ?>
            </h2>
					</div>
					<div class="image-layout-hdr">
						<div class="content-area mobile-center">
							<h1 class="section-header"><?php the_field('main_headline'); ?></h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<?php the_field('video_element_copy'); ?>
            </div>					
            <div class="section-cta">
              <a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
            </div>
					</div>

	
				</div>
    </div>
    
		<div class="is-half-el-slider video-par">
			<div class="video-el video-trigger" style="background-image: url(<?php the_field('video_place_holder'); ?>); background-position: center; background-size: cover;" data-video-src="<?php the_field('video_src');?>">
          <div class="py-bt">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 89.334 89.334"><defs><style></style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f29e67"/><stop offset="1" stop-color="#dd675d"/></linearGradient></defs><g transform="translate(-1774.33 -1025.238)"><circle class="a" style="fill:#fff;" cx="44.667" cy="44.667" r="44.667" transform="translate(1774.33 1025.238)"/><path class="b" style=
            "fill:url(#a);" d="M0,0,22.079,3.473,12.462,13.09l-9.04,9.04Z" transform="translate(1830.154 1069.337) rotate(135)"/></g></svg>
          </div>

      </div>
      <div class="video-cap">
        <?php the_field('video_message'); ?>
      </div>
		</div>
	</div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
  <div class="spacing spacing--sm"></div>
</section>




<section class="is-blue dkSpacing">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>
<?php get_footer(); ?>