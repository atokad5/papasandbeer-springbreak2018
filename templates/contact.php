<?php /* Template Name: Contact Page */ ?>
<?php $root = get_template_directory_uri(); ?>
<?php get_header(); ?>
<?php get_template_part('includes/nav') ?>
<section>
<div class="spacing spacing--md"></div>
<div class="spacing spacing--md"></div>
<div class="spacing spacing--sm"></div>
	<div class="inner cParent">

		<div class="cParent__col">
			<div>
				<h1 class="section-header"><?php the_field('page_header') ?></h1>
			</div>

			<div class="content-area">
				<?php the_field('contact_summary'); ?>
			</div>
			<div class="content-area-links">
				<ul>
					<li><a href="">Faqs</a></li>
					<li><a href="">More info</a></li>
				</ul>
			</div>
			<div class="content-area-social-links">
				<h2 class="dates hdr-el" id="top-content" style="margin: 0;"><?php the_field('follow_title'); ?></h2>
				<?php the_field('follow_sub_message'); ?>
				<ul>
					<li><a target="_blank" href="<?php the_field('facebook_url'); ?> "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
					<li><a target="_blank" href="<?php the_field('instagram_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg></a></li>
					<li><a target="_blank" href="<?php the_field('twitter_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li>
					<li><a target="_blank" href="<?php the_field('mail_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a></li>
				</ul>
			</div>
		</div>

		<div class="cParent__col">
			<div class="form-parent">
				<form action="">
					<input type="text" name="" id="" placeholder="First Name" autocomplete="off"/>
					<input type="text" name="" id="" placeholder="Last Name" autocomplete="off"/>
					<input type="email" name="" id="" placeholder="Email Address" autocomplete="off"/>
					<textarea name="" id="" cols="30" rows="10" placeholder="Ask question here"></textarea>
					<div class="form-btn">
						<input type="submit" value="Contact">
					</div>
				</form>	
			</div>
		</div>

	</div>
<div class="spacing spacing--md"></div>

</section>



<?php get_template_part('includes/home/faq'); ?>



	<section class="is-blue dkSpacing">
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
	</section>
<?php get_footer(); ?>