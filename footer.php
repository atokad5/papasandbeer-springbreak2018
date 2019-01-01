<?php 
	$root = get_template_directory_uri();
?>


<div class="mobile-nav">
	<?php get_template_part('includes/nav-li'); ?>
	<div class="sleeve-one_ml"></div>
</div>


<?php get_template_part('includes/footer-markup'); ?>



<div id="video-modal">
	<div id="video-container">
	</div>
	<button class="video-trigger is-modal-close">
		Close Video
	</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="<?php echo "$root/dist/assets/js/app.bundle.js?g=aeg"; ?>"></script>
<?php  wp_footer();  ?>
</body>
</html>