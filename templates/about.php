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

<section class="is-blue" style="position: relative;">
  <div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-white.png"; ?>);"></div>
  

</section>





<section class="is-blue dkSpacing">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>
<?php get_footer(); ?>