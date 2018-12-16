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
          <img src="http://dev.zitrocreative.com/revamp-2018/wp-content/uploads/2018/06/venuelayout.png" alt="">
        </figure>
      </div>
      <div class="flexing-map-section">
        <div class="content-area is-white blog-area">
          <h1>Venue Map</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, totam soluta vel tenetur quos exercitationem doloremque commodi sit expedita autem nobis, quia vero nemo nostrum corrupti dignissimos possimus numquam enim?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, totam soluta vel tenetur quos exercitationem doloremque commodi sit expedita autem nobis, quia vero nemo nostrum corrupti dignissimos possimus numquam enim?</p>
          <div class="cta-el">
            <a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta">Download Map</a>
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
    <h1 class="section-header">EXCLUSIVE PAPAS Experience</h1>
  </div>

  <div class="inner accordion has-max push-top">
    <?php 
      for($i = 0; $i < 4; $i++) {
    ?>

    <div class="topic">
      <div class="accordion-trigger">
        <h2>Beach Front</h2>

        <div class="accordion-indicator">
          <span></span><span></span>
        </div>
      </div>

      <div class="accordion-content blog-area">
        <h1>This is a Title</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem temporibus laboriosam quod ad reprehenderit. Quas delectus nobis illo officiis, tenetur animi soluta ut impedit optio sint vel laboriosam, numquam dolore?</p>
        <h1>This is a Title</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem temporibus laboriosam quod ad reprehenderit. Quas delectus nobis illo officiis, tenetur animi soluta ut impedit optio sint vel laboriosam, numquam dolore?</p>
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
    <h1 class="section-header">Rosa Map Section</h1>
    <div class="content-area has-max">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laboriosam deserunt nisi optio voluptate nemo consequatur pariatur quasi impedit aperiam commodi sunt, minima doloribus doloremque autem aspernatur nostrum libero cupiditate. </p>
    </div>

    <div class="image--container">
      <div class="image-element-nested">

      </div>
    </div>

    <div class="is-center cta-el">
      <a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta">Download Map</a>
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
              SUB HEADLINE
            </h2>
					</div>
					<div class="image-layout-hdr">
						<div class="content-area mobile-center">
							<h1 class="section-header">Main Headline</h1>
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio fugiat voluptatem neque! Dolor, alias quidem ea quam tempora quasi voluptatibus atque beatae quisquam quo totam mollitia magni illo blanditiis quibusdam.</p>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius totam fuga quos nobis!</p>
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