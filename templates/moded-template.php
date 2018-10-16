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
          This Is The Page Title
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero labore id at hic quidem temporibus rerum perferendis reprehenderit maiores ipsum!</p>
      </div>
    </div>  
  </div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>

<?php for($i = 0; $i < 3; $i++) { ?>
  <section class="added_section is-blue">
    <div class="inner inner-inner">
      <div class="add_section__header is-white">
        <div class="section-header">
          Section Title Goes Here
        </div>
        <div class="content-area">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore iusto, vero asperiores ullam debitis quo exercitationem facilis perspiciatis incidunt enim fuga cupiditate? Eaque libero impedit mollitia eius vitae beatae veniam?</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore iusto, vero asperiores ullam debitis quo exercitationem facilis perspiciatis incidunt enim fuga cupiditate? Eaque libero impedit mollitia eius vitae beatae veniam?</p>
        </div>

        <div class="slider_area_mt">
          <div class="slide-item_mt">1</div>
          <div class="slide-item_mt">2</div>
          <div class="slide-item_mt">3</div>
          <div class="slide-item_mt">4</div>
          <div class="slide-item_mt">5</div>
        
        </div>
      </div>
    </div>
    <div class="spacing spacing--md"></div>
  </section>
<?php } ?>

<section class="spaceoff-footer">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>


<?php 
  get_footer();
?>