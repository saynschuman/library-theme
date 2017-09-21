<?php

// Template Name: Search Page

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



<main>

	<div class="container">
		<div id="content">
			<div id="center">
				<h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
				<div id="posts">
					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					<div id="post_info">
						<div>Автор: <?php the_author() ?></div>
						<div>Дата добавления: <?php the_date() ?></div>
						<div id="clear"></div>
					</div>
					<p><?php the_excerpt() ?></p>
					<span>Категория: <?php the_category(', ') ?></span>
				</div>
			<?php endwhile; ?>
			<?php
			else :
				echo "Извините по Вашему результату ничего не найдено";
			endif;
			?>
		</div>								
	</div>
</main>

<?php get_footer();
