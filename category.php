<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<ul class="mobile-toggle">
	<?php 
	$args = array(
		'show_option_none'   => __('No categories'),
		'title_li'           => __( '' ),
		'separator'          => ''
		); 

		echo wp_list_categories($args); ?>
	</ul>    


<!-- <style>
	#test-popup {
		position: fixed;
		left: 0;
		right: 0;
		margin: auto;
		top: 40px;
		background: #fff;
		z-index: 9999;
		width: 500px;
		height: auto;
	}
</style>

<div id="test-popup">




</div>  -->


<section class="main-screen">
	<div class="container">
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-central.png" alt="" class="logo-central">
		<h1>Публічно-правова бібліотека</h1>
		<div class="row item-cont">
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=2'">
					<div class="img" id="police"></div>
					<div class="title">Ситуації <br> з поліцією</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=3'">
					<div class="img" id="family"></div>
					<div class="title">сімейне право</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=4'">
					<div class="img" id="work"></div>
					<div class="title">ТРУДОВЕ ПРАВО</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=5'">
					<div class="img" id="users"></div>
					<div class="title">ПРАВА КОРИСТУВАЧІВ</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=6'">
					<div class="img" id="docs"></div>
					<div class="title">ОФОРМЛЕННЯ ДОКУМЕТІВ</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
				<div class="block" onclick="location.href='?cat=7'">
					<div class="img" id="zhgk"></div>
					<div class="title">ЖГК</div>
				</div>
			</div>
		</div>
		<?php get_search_form(); ?>
	</div>
</section>

<main class="category-page">

	<div class="container">
		<div class="category-section row">
			
			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="category-block">
						<a href="<?php echo get_permalink() ?>" class="title"><?php the_title() ?></a>
						<a href="<?php echo get_permalink() ?>"><div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?> )"></div></a>
						<?php the_excerpt(); ?>
						<a href="<?php echo get_permalink() ?>" class="read">Читати повністю</a>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date"><?php echo get_the_date('j F Y'); ?></div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
								<ul>
									<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
				

			<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

	</div>	
				<!-- <div class="row pag-block">
					<ul class="pagination">
						<li><a href="">1</a></li>
						<li class="active"><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					</ul>
				</div> -->				
			</div>	
		</main>

		<?php get_footer();
