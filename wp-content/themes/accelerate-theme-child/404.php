<?php
/**
 * The template for displaying the 404 page
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			<div class="error-content clearfix">
				<div class="error-img">
					<img src="http://localhost:8888/accelerate/wp-content/uploads/2018/02/gps.png">
				</div>


				<div class="error-right">
					<div class="error-header">
						<h1>Whoops, Took a Wrong Turn...</h1>
					</div>
					
					<div class="error-text">
						<p>Sorry, this page no longer exists, never existed or has been moved. we feel like complete jerks for totally misleading you. </p>
						<p>Feel free to take a look around our <a class="error-link" href="http://localhost:8888/accelerate/blog/"><span>blog</span></a> or some of our featured <span><a class="error-link" shref="http://localhost:8888/accelerate/case-studies/"><span>work</span></a>.</span></p>
					</div>
				</div>

			</div>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>