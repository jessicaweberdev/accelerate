<?php
/**
 * The template for displaying the About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 

				$services_headline = get_field('services_headline');
				$services_subtitle = get_field('services_subtitle');
				$service_image_1 = get_field('service_image_1');
				$service_image_2 = get_field('service_image_2');
				$service_image_3 = get_field('service_image_3');
				$service_image_4 = get_field('service_image_4');
				$service_1 = get_field('service_1');
				$service_2 = get_field('service_2');
				$service_3 = get_field('service_3');
				$service_4 = get_field('service_4');
				$service_description_1 = get_field('service_description_1');
				$service_description_2 = get_field('service_description_2');
				$service_description_3 = get_field('service_description_3');
				$service_description_4 = get_field('service_description_4');
				$hero_text = get_field('hero_text');
				$size = "full"; ?>

				<?php the_content(); ?>
				
				<h1><?php echo $hero_text; ?></h1>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->


	<section class="our-services-header">
		<h5><?php echo $services_headline; ?></h5>
		<h6><?php echo $services_subtitle; ?></h6>
	</section>

	<section class="services-offered">
		<section class="service-1">
			<div id="service-image-1" class="service-images">
				<?php echo wp_get_attachment_image($service_image_1, $size); ?>
			</div>
			<h2><?php echo $service_1 ?></h2>
			<p><?php echo $service_description_1 ?></p>
		</section>

		<section class="service-2">
			<h2><?php echo $service_2 ?></h2>
			<p><?php echo $service_description_2 ?></p>
			<?php echo wp_get_attachment_image($service_image_2, $size); ?>
			
		</section>	

		<section class="service-3">
			<div id="service-image-3" class="service-images">
				<?php echo wp_get_attachment_image($service_image_3, $size); ?>
			</div>
			<h2><?php echo $service_3 ?></h2>
			<p><?php echo $service_description_3 ?></p>
		</section>

		<section class="service-4">
			<h2><?php echo $service_4 ?></h2>
			<p><?php echo $service_description_4 ?></p>
			<div id="service-image-4" class="service-images">
				<?php echo wp_get_attachment_image($service_image_4, $size);?>
			</div>
		</section>
	</section>


	<section class="call-to-action">
		<h2 class="call-to-action-header">Interested in working work us?</h2>
		<a class="button" href="<?php echo site_url('#') ?>">Contact Us</a>
	</section>


<?php get_footer(); ?>
