<?php /* Template Name: Travel and Hotel */ 
  $root = get_template_directory_uri();
  get_header();
?>
<?php get_template_part('includes/nav') ;?>

<section class="bg-area" style="background-image: url('//localhost:3000/wp-content/uploads/2018/10/hero-image.jpg');">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="inner-contents__mt">
      <div class="content-area">
        <div>
          <h1 class="section-header">Travel and Hotel</h1>
        </div>
      </div>
    </div>  
  </div>

  <div class="cats-nav-section">
    <div class="inner">
      <div>
        <ul  class="cats-navEl">
          <li><a href="#0">Category</a></li>
          <li><a href="#0">Category Two</a></li>
          <li><a href="#0">Category Three</a></li>
          <li><a href="#0">Category Four</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--sm"></div>
</section>




<div class="group-section">
<?php 
  $parentLoop = get_field('page_section');

foreach($parentLoop as $theLoop) { ?>
  <section class="added_section is-blue" style="position: relative;">
    <div class="stroke-section stroke-section-orange" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
    <div class="spacing spacing--md"></div>

    <div class="inner">
      <div class="add_section__header is-white flex">

        <div class="mt_content_group flex_el">
          <div>
            <h1 class="section-header"><?php echo $theLoop['section_title']; ?></h1>
          </div>
          
          <div class="content-area">
            <?php echo $theLoop['section_content']; ?>
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

        <div class="slider_area_mt flex_el slidey">
          
          <?php foreach($theLoop['section_card_image'] as $theImage) { ?>
          

        <div class="slider-el">
          <a href="<?php echo $theImage['link']; ?>">
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
          </a>
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






<section class="is-blue dkSpacing">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>

<?php get_footer(); ?>