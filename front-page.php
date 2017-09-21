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
        <li><a href="">Ситуації з поліцією</a></li>
        <li><a href="">сімейне право</a></li>
        <li><a href="">ТРУДОВЕ ПРАВО</a></li>
        <li><a href="">ПРАВА КОРИСТУВАЧІВ</a></li>
        <li><a href="">ОФОРМЛЕННЯ ДОКУМЕНТІВ</a></li>
        <li><a href="">ЖГК</a></li>
    </ul>    


<section class="main-screen">
    <div class="container">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-central.png" alt="" class="logo-central">
        <h1>Публічно-правова бібліотека</h1>
        <div class="row item-cont">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="police"></div>
                     <div class="title">Ситуації <br> з поліцією</div>
                 </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="family"></div>
                     <div class="title">сімейне право</div>
                 </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="work"></div>
                     <div class="title">ТРУДОВЕ ПРАВО</div>
                 </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="users"></div>
                     <div class="title">ПРАВА КОРИСТУВАЧІВ</div>
                 </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="docs"></div>
                     <div class="title">ОФОРМЛЕННЯ ДОКУМЕТІВ</div>
                 </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 item">
                 <div class="block">
                     <div class="img" id="zhgk"></div>
                     <div class="title">ЖГК</div>
                 </div>
            </div>
        </div>
        <form id="search-cat" action=""><input type="search" placeholder="поиск"></form>
    </div>
</section>

<section class="video">
	<div class="container">
		<div class="row">
		<h2 class="mob">що таке публічно-правова бібліотека</h2>
			<div class="col-md-7">
				<h2 class="desct">що таке публічно-правова бібліотека</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
			</div>
			<div class="col-md-5">
				<video class="afterglow" poster="<?php echo get_template_directory_uri() ?>/assets/img/video-screen.jpg">
			      <source src="<?php echo get_template_directory_uri() ?>/assets/video/promo.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
			      <source src="<?php echo get_template_directory_uri() ?>/assets/video/promo.webm" type='video/webm; codecs="vp8, vorbis"' />
		    	</video>
			</div>
		</div>
	</div>
</section>

<main>
	<div class="container">
	<a href="" class="category-link">cитуації з поліцією</a>
		<div class="category-section row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><div class="row"><div class="col-md-12"><a href="" class="more-articles">більше статтей</a></div></div>
		
		<hr class="section">

		<a href="" class="category-link">сімейне право</a>
		<div class="category-section row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><div class="row"><div class="col-md-12"><a href="" class="more-articles">більше статтей</a></div></div>
		
		<hr class="section">

		<a href="" class="category-link">трудове право</a>
		<div class="category-section row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><div class="row"><div class="col-md-12"><a href="" class="more-articles">більше статтей</a></div></div>
		
		<hr class="section">

		<a href="" class="category-link">сімейне право</a>
		<div class="category-section row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 art-block">
				<div class="category-block">
					<a href="" class="title">порушення правил зупинки</a>
					<a href=""><div class="thumb" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/thumb.png)"></div></a>
					<p>Питання, пов'язані із зупинкою та стоянкою, часто є причиною непорозуміння між водієм і співробітниками ДАІ. У містах порушення правил зупинки та стоянки є, мабуть, одним з найбільш поширених порушень ПДР - справжніх чи уявних.</p>
					<a href="" class="read">Читати повністю</a>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 date">Август 2, 2017</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 share-links">
							<ul>
								<li class="tw"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="fb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div><div class="row"><div class="col-md-12"><a href="" class="more-articles">більше статтей</a></div></div>
		
	</div>
</main>

<?php get_footer();
