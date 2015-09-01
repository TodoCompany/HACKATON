<?php
/**
 * Template Name: Career
 *
 */
get_header();?>

<div class="container page-carier ">
	<div class="container-fluid video-text">
		<div class="row">
			<h1 class="page-top-title"><?php the_title();?></h1>
			<div class="container">
				<div class="col-md-6 remove-padding "> <!--col-md-offset-2-->
					<iframe class="video-career" width="100%" height="400" src="https://www.youtube.com/embed/W3CDMDktEBc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<article class="col-md-6 remove-padding add-padding-right">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
	<div class="row media-row">
		<h2 class="text-center"><?php _e('Positions', TEXTDOMAIN); ?></h2>
		<?php $posts = get_posts("cat=3&orderby=date&numberposts=12"); ?>
		<?php if ($posts) : ?>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
				<div class="col-md-4  text-center pos-div">
					<a class="career-pos-color" href="<?php echo get_permalink(); ?>">
					<?php

					if(function_exists('add_theme_support')) : ?>
						<h3 class="position_title"> <?php echo the_title(); ?></h3>
						<div class="job-icon"><i class="fa fa-<?php echo  types_render_field( "job-icon" ); ?>"></i ></div>
					<?php endif; ?>
					</a>
				</div>

			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<section class="row recruiters">
		<h2 class="text-center"><?php _e("Let's meet!", TEXTDOMAIN); ?></h2>

		<?php
			$posts = get_posts("cat=7&orderby=title&numberposts=-1");

		if ($posts) {
				foreach ($posts as $post) : setup_postdata($post); ?>

					<figure class="col-md-4 text-center rec_grid">
						<p class="rec_img">
							<?php the_post_thumbnail(array('220', '220')); ?>
						</p>
						<figcaption>
							<p><?php echo the_title(); ?></p>

							<p><?php echo the_content(); ?></p>
						</figcaption>
						<p>
							<?php
							$facebook_link = types_render_field('facebook-rec');
							print_social($facebook_link, 'facebook');

							$linkedin_link = types_render_field('linkedin-rec');
							print_social($linkedin_link, 'linkedin');

							$skype_link = types_render_field('skype-rec');
							print_social($skype_link, 'skype');
							?>
						</p>
					</figure>

					<?php
				endforeach;
			}
		?>

		<?php /* ?>
		<figure class="col-md-4 text-center rec_grid">
			<p class="rec_img"><img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/img/Max_Vitruk.png" alt=""/></p>
			<figcaption>
				<p>Max Vitruk</p>
				<p>Android developer</p>
			</figcaption>
			<p>
				<a href="https://www.facebook.com/profile.php?id=100006944169188&fref=ts">
					<i class="rec fa fa-facebook"></i>
				</a>
				<a href="https://www.linkedin.com/profile/view?id=380102971">
					<i class="rec fa fa-linkedin"></i>
				</a>
				<a href="maxvitruk">
					<i class="rec fa fa-skype"></i>
				</a>
			</p>
		</figure>

		<figure class="col-md-4 text-center rec_grid">
			<p class="rec_img"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Petro Tsymbalistiy.png" alt=""/></p>
			<figcaption>
				<p>Petro Tsymbalistiy</p>
				<p>Project Manager</p>
			</figcaption>
			<p>
				<a href="https://www.facebook.com/petrotsymb">
					<i class="rec fa fa-facebook"></i>
				</a>
				<a href="https://www.linkedin.com/profile/view?id=300540683">
					<i class="rec fa fa-linkedin"></i>
				</a>
					<a href="petyagrek">
					<i class="rec fa fa-skype"></i>
				</a>
			</p>
		</figure>
		<figure class="col-md-4 text-center rec_grid">
			<p class="rec_img"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Bogdan Maksymchuk.png" alt=""/></p>
			<figcaption>
				<p>Bogdan Maksymchuk</p>
				<p>Team lead</p>
			</figcaption>

			<p>
				<a href="https://www.facebook.com/bogdan.maksimchuk.1">
					<i class="rec fa fa-facebook"></i>
				</a>
				<a href=": https://www.linkedin.com/profile/view?id=299868402">
					<i class="rec fa fa-linkedin"></i>
				</a>
				<a href="hereiswink">
					<i class="rec fa fa-skype"></i>
				</a>
			</p>
		</figure>
 		<?php //*/ ?>
	</section>
</div>

<?php
get_footer();?>