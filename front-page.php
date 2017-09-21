<?php
/**
 * template name: home
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

<section class="video">
	<div class="container">
		<div class="row">
			<h2 class="mob">
			<?php
				if(get_field('title')) {
					echo get_field('title');
				}
			?>
			</h2>
			<div class="col-md-7">
				<h2 class="desct">
					<?php
						if(get_field('title')) {
							echo get_field('title');
						}
					?>				
				</h2>
				<?php
					if(get_field('text')) {
						echo get_field('text');
					}
				?>
			</div>
			<div class="col-md-5">
				<video class="afterglow" poster="<?php
					if(get_field('poster')) {
						echo get_field('poster');
					}
				?>">
					<source src="http://localhost/wp-content/themes/library/assets/<?php
					if(get_field('video_mp4')) {
						echo get_field('video_mp4');
					}
				?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					<source src="http://localhost/wp-content/themes/library/assets/<?php
					if(get_field('video_webm')) {
						echo get_field('video_webm');
					}
				?>" type='video/webm; codecs="vp8, vorbis"' />
				</video>
			</div>
		</div>
	</div>
</section>

		<main>

			<div class="container">
				<a href="/?cat=2" class="category-link"><?php echo get_cat_name(2) ?></a>
				<div class="category-section row">

					<?php 

				 // Цикл 2
					$query2 = new WP_Query( array(
					    'cat' => 2,
					    'posts_per_page' => 3
					) );
					while( $query2->have_posts() ){ $query2->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
						<div class="category-block">
							<a href="<?php echo get_permalink() ?>" class="title"><?php the_title(); ?></a>
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

					<?php }
					wp_reset_postdata();

					?>		

				</div>
				<div class="row"><div class="col-md-12"><a href="/?cat=2" class="more-articles">більше статтей</a></div></div>

				<hr class="section">

				<a href="/?cat=3" class="category-link"><?php echo get_cat_name(3) ?></a>
				<div class="category-section row">

					<?php 

				 // Цикл 3
					$query3 = new WP_Query( array(
					    'cat' => 3,
					    'posts_per_page' => 3
					) );
					while( $query3->have_posts() ){ $query3->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
						<div class="category-block">
							<a href="<?php echo get_permalink() ?>" class="title"><?php the_title(); ?></a>
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

					<?php }
						wp_reset_postdata(); 
					?>		
				</div>	
				<div class="row"><div class="col-md-12"><a href="/?cat=3" class="more-articles">більше статтей</a></div></div>

				<hr class="section">

				<a href="/?cat=4" class="category-link"><?php echo get_cat_name(4) ?></a>
				<div class="category-section row">

					<?php 

		 			// Цикл 4
					$query4 = new WP_Query( array(
					    'cat' => 4,
					    'posts_per_page' => 3
					) );
					while( $query4->have_posts() ){ $query4->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
						<div class="category-block">
							<a href="<?php echo get_permalink() ?>" class="title"><?php the_title(); ?></a>
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

					<?php }
						wp_reset_postdata(); 
					?>		
				</div>	
				<div class="row"><div class="col-md-12"><a href="/?cat=4" class="more-articles">більше статтей</a></div></div>

				<hr class="section">

				<a href="/?cat=5" class="category-link"><?php echo get_cat_name(5) ?></a>
				<div class="category-section row">

					<?php 

					// Цикл 5
					$query5 = new WP_Query( array(
					    'cat' => 5,
					    'posts_per_page' => 3
					) );
					while( $query5->have_posts() ){ $query5->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
						<div class="category-block">
							<a href="<?php echo get_permalink() ?>" class="title"><?php the_title(); ?></a>
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

					<?php }
						wp_reset_postdata(); 
					?>		
				</div>	
				<div class="row"><div class="col-md-12"><a href="/?cat=5" class="more-articles">більше статтей</a></div></div>

				<hr class="section">				
			</div>
		</main>

		<?php get_footer();
