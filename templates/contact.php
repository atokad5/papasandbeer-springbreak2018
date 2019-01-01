<?php /* Template Name: Contact Page */ ?>
<?php $root = get_template_directory_uri(); ?>
<?php get_header(); ?>
<?php get_template_part('includes/nav') ?>
<section>
<div class="spacing spacing--md"></div>
<div class="spacing spacing--md"></div>
<div class="spacing spacing--sm"></div>
<div class="spacingElement"></div>
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
					<li><a href="" id="faq-slideDown">Faqs</a></li>
				</ul>
			</div>
			<div class="content-area-social-links">
				<h2 class="dates hdr-el" id="top-content" style="margin: 0;"><?php the_field('follow_title'); ?></h2>
				<?php the_field('follow_sub_message'); ?>
				<ul>
					<li><a target="_blank" href="<?php the_field('instagram_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg></a></li>
					
					<li><a target="_blank" href="<?php the_field('snapchat_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M5.829 4.533c-.6 1.344-.363 3.752-.267 5.436-.648.359-1.48-.271-1.951-.271-.49 0-1.075.322-1.167.802-.066.346.089.85 1.201 1.289.43.17 1.453.37 1.69.928.333.784-1.71 4.403-4.918 4.931-.251.041-.43.265-.416.519.056.975 2.242 1.357 3.211 1.507.099.134.179.7.306 1.131.057.193.204.424.582.424.493 0 1.312-.38 2.738-.144 1.398.233 2.712 2.215 5.235 2.215 2.345 0 3.744-1.991 5.09-2.215.779-.129 1.448-.088 2.196.058.515.101.977.157 1.124-.349.129-.437.208-.992.305-1.123.96-.149 3.156-.53 3.211-1.505.014-.254-.165-.477-.416-.519-3.154-.52-5.259-4.128-4.918-4.931.236-.557 1.252-.755 1.69-.928.814-.321 1.222-.716 1.213-1.173-.011-.585-.715-.934-1.233-.934-.527 0-1.284.624-1.897.286.096-1.698.332-4.095-.267-5.438-1.135-2.543-3.66-3.829-6.184-3.829-2.508 0-5.014 1.268-6.158 3.833z" fill="#fcac47"/></svg></a></li>
					<li><a target="_blank" href="<?php the_field('twitter_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li>
					<li><a target="_blank" href="<?php the_field('facebook_url'); ?> "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
					<li><a target="_blank" href="<?php the_field('mail_url'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a></li>
				</ul>
			</div>
		</div>

		<div class="cParent__col">
			<div class="form-parent">
				<form class="form" action="">
					<input type="text" name="first-name" id="firstname" placeholder="First Name" autocomplete="off"/>
					<input type="text" name="last-name" id="lastname" placeholder="Last Name" autocomplete="off"/>
					<input type="email" name="email" id="email" placeholder="Email Address" autocomplete="off"/>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Ask question here"></textarea>
					<div class="form-btn">
						<input type="submit" value="Contact">
					</div>
				</form>	
			</div>
			<div class="message-indicator" data-success="You have successfully submitted the form, we'll get back to you asap." data-error="Uhoh, something went wrong! Please try filling out the form again"></div>
		</div>

	</div>
<div class="spacing spacing--md"></div>
<div class="spacingElement"></div>
</section>


<div id="faq-section"></div>
<?php get_template_part('includes/home/faq'); ?>



	<section class="is-blue dkSpacing">
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
		<div class="spacing spacing--md"></div>
	</section>
<?php get_footer(); ?>