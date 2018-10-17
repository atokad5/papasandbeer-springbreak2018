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
</section>

<?php for($i = 0; $i < 3; $i++) { ?>
  <section class="added_section is-blue">
    <div class="max">
      <div class="add_section__header is-white flex">

        <div class="mt_content_group flex_el">
          <div class="section-header">
            Section Title Goes Here
          </div>
          
          <div class="content-area">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore iusto, vero asperiores ullam debitis quo exercitationem facilis perspiciatis incidunt enim fuga cupiditate? Eaque libero impedit mollitia eius vitae beatae veniam?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore iusto, vero asperiores ullam debitis quo exercitationem facilis perspiciatis incidunt enim fuga cupiditate? Eaque libero impedit mollitia eius vitae beatae veniam?</p>
          </div>
        </div>

        <div class="slider_area_mt flex_el" >
          <?php for($d = 0; $d < 6; $d++) : ?>
          <div class="slide-item_mt">
            <div class="img-el_mt" style="background-image: url(http://www.papasandbeer.com/rosarito-spring-break/wp-content/uploads/2018/01/industrial-stage.jpg);">
            </div>

            <div class="content-area_slider_mt">
              <div class="section-header">
                Card Title
              </div>
              <div class="content-area">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam ad dolorem nesciunt quisquam deleniti accusantium enim quam vitae. Ipsa, ut eum libero asperiores magni fugit maiores sed nisi quae.</p>
              </div>
            </div>
          </div>

          <?php endfor; ?>
        
        </div>
      </div>
    </div>
    <div class="spacing spacing--md"></div>
  </section>
<?php } ?>

<section class="spaceoff-footer is-blue">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
</section>


<?php 
  get_footer();
?>