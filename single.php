<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
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
<main class="article-page">
	<div class="container mob-no-p">
		<article>
			<div class="page-image" style="background-image: url(<?php the_post_thumbnail_url(); ?> )">
				<h1><?php the_title() ?></h1>
				<span style="display: none"><?php $id = the_category_ID() ?></span>
				<div class="category-name"><?php echo get_cat_name($id) ?></div>
			</div>
			<div class="article-body clearfix">
				<div class="left">
					<?php while ( have_posts() ) : the_post();
					the_content(); 
					endwhile;
					?>				
				</div>
				<div class="right desct-r">
					<div class="sidebar-header">
						<ul class="clearfix">
							<li id="new-btn" class="active">нове</li>
							<li id="pop-btn">популярне</li>
						</ul>
					</div>
					<div class="sidebar-body active" id="new-body">
						<?php	$query4 = new WP_Query( array(
							'posts_per_page' => 3,
							'date_query' => array(
								'after' => '2 weeks ago',
								)	,
							) );
							while( $query4->have_posts() ){ $query4->the_post(); ?>					
							<div class="bl-art">
								<a href="" class="sidebar-title"><?php the_title(); ?></a>
								<a href="">
									<div class="sidebar-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?> )"></div>
								</a>
							</div>
							<?php }
							wp_reset_postdata(); 
							?>
						</div>
						<div class="sidebar-body" id="pop-body">
							<?php	$query4 = new WP_Query( array(
								'posts_per_page' => 3,
								'orderby' => 'comment_count'
								) );
								while( $query4->have_posts() ){ $query4->the_post(); ?>					
								<div class="bl-art">
									<a href="" class="sidebar-title"><?php the_title(); ?></a>
									<a href="">
										<div class="sidebar-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?> )"></div>
									</a>
								</div>
								<?php }
								wp_reset_postdata(); 
								?>
							</div>
						</div>
					</div>
				</article>
				<hr class="hr-art">	
			</div>
			<div class="rec-title">Рекомендуємо</div>
			<div class="container rec-mob">
				<div class="category-section row">
					<?php 

					$query4 = new WP_Query( array(
						'posts_per_page' => 3,
						'orderby' => 'comment_count'
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
					
				</div>
				<!-- rec mob -->
				<div class="container rec-mob-art">
					
					<div class="category-section row rec-m-sl">
						<?php 

						$query4 = new WP_Query( array(
							'posts_per_page' => 3,
							'orderby' => 'comment_count'
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
						
						

						<div class="rec-title">нове</div>
						<div class="category-section row rec-m-sl">
							<?php 

							$query4 = new WP_Query( array(
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

							<div class="rec-title">популярне</div>
							<div class="category-section row rec-m-sl">
								<?php 

								$query4 = new WP_Query( array(
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
							</div>
							
							
							
						</div>	
					</main>

					<?php get_footer();
