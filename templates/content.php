<?php /* Template Name: Content Page */ ?>
<?php $root = get_template_directory_uri(); ?>
<?php get_header(); ?>

<?php get_template_part('includes/nav') ;?>

<section>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="inner">
    <div class="content-area has-max blog-area">
      <?php echo get_post_field('post_content', $post->ID); ?>
    </div>
  </div>
  <div class="spacing spacing--md"></div>
  <div class="spacingElement"></div>
  <div class="spacing spacing--md"></div>
</section>

<section class="is-blue dkSpacing" style="position: relative;">
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="spacing spacing--md"></div>
  <div class="stroke-section stroke-section-orange is-low" style="background-image: url(<?php echo "$root/_assets/images/stroke-blue.png"; ?>);"></div>
</section>

<?php get_footer(); ?>