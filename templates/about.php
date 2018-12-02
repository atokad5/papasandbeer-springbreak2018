<?php /* Template Name: About Template */ ;?>
<?php get_header(); ?>
<?php $root = get_template_directory_uri();?>
<?php get_template_part('includes/nav') ;?>


<section class="bg-area" style="background-image: url('//localhost:3000/wp-content/uploads/2018/10/hero-image.jpg');">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div class="section-header">
          About Papas&Beer Spring Break
        </div>

        <div class="ply-btn-hero">
          <div class="ply-btn-el-hero">
            <?php get_template_part('includes/icons/play-btn') ;?>
          </div>
  
        </div>
        
        <div class="watch-video">
          Watch what's to come ✌️
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
      <div class="about-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ipsum itaque dolorum distinctio? Ut voluptatum asperiores nihil, optio omnis, tempore eos consectetur similique autem nobis harum non, repellendus consequuntur dolorum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ipsum itaque dolorum distinctio? Ut voluptatum asperiores nihil, optio omnis, tempore eos consectetur similique autem nobis harum non, repellendus consequuntur dolorum?</p>
      </div>
      <div class="floating-image">
        <div class="card-image">
          <div class="card-image-el"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="inner">

<div class="image-grid-about rise-up">
  <?php for($i = 0; $i < 8; $i++) {;?>
    <div class="ug-parent">
      <div class="ug-item is-bg" data-bg-src="<?php echo $imgContent['url'] ?>" style="background-image: url();">
        
        <div class="author">
          <?php echo $imgContent['title']; ?>
        </div>
        <div class="gradient-img"></div>
      </div>
    </div>
  <?php } ;?>

</div>


</div>


<?php $root = get_template_directory_uri(); ?>
<section id="slider" class="is-blue s_sec">
<div class="spacing spacing--md"></div>
	<div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>



	<div class="max clearfix old-to-new image-grid-about">
		
		<?php $imageGrid = get_field('4_image_grid');
			foreach($imageGrid as $theImage ) {
		?>
		<div class="old-to-new_item">
			<div class="old-to-new_image-el is-bg" data-bg-src="<?php echo $theImage['url'];?>"></div>
		</div>
		<?php } ?>

	</div>

	<div class="inner clearfix flex-slide">


		<div class="is-half-el-slider video-par">
			<div class="is-image-grid-content">
					<div class="content-area mobile-center">
						<h2 class="dates sm-hdr">
              Sub Headline Goes Here
            </h2>
					</div>
					<div class="section-header image-layout-hdr">
						<div class="content-area mobile-center">
							Headline Goes Here
						</div>
					</div>

					<div class="hr-splitter animated-spliter"></div>

					<div class="image-grid-copy">
						<div class="content-area mobile-center">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam quis repellendus labore cupiditate nulla, est harum impedit sequi quasi atque ipsum ratione, possimus nostrum fuga aspernatur eligendi soluta commodi ducimus!</p>
            </div>					
            <div class="section-cta">
              <a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
            </div>
					</div>

	
				</div>
    </div>
    
		<div class="is-half-el-slider video-par">
			<div class="video-el">
          <div class="py-bt">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 89.334 89.334"><defs><style></style><linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#f29e67"/><stop offset="1" stop-color="#dd675d"/></linearGradient></defs><g transform="translate(-1774.33 -1025.238)"><circle class="a" style="fill:#fff;" cx="44.667" cy="44.667" r="44.667" transform="translate(1774.33 1025.238)"/><path class="b" style=
            "fill:url(#a);" d="M0,0,22.079,3.473,12.462,13.09l-9.04,9.04Z" transform="translate(1830.154 1069.337) rotate(135)"/></g></svg>
          </div>

      </div>
      <div class="video-cap">
        What you missed last year
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