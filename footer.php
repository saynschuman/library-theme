<!-- footer -->

<footer class="footer">
  <div class="container">
  	<div class="row">
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 half">
           <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-logo.png" alt=""></a>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 half">
           <ul>
               <li><a id="tel" href="tel:+380967858484">+38096 785 84 84</a></li>
               <li><a id="instagram" href=""></a></li>
               <li><a id="facebook" href=""></a></li>
           </ul>
       </div>
  	</div>
  </div>
</footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/js/afterglow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

</body>

</html>

<script>

(function($) {

	$(".category-section").slick({

  // normal options...
  infinite: false,

  // the magic
  responsive: [{

  	breakpoint: 768,
  	settings: {
  		slidesToShow: 1,
  		dots: false,
  		arrows: true,
  		prevArrow: '<div class="arr-nav arr-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
  		nextArrow: '<div class="arr-nav arr-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
  	}

  }, {

  	breakpoint: 1320,
  	settings: {
  		slidesToShow: 2,
  		dots: false,
  		arrows: false
  	}

  }, {

  	breakpoint: 1900,
      settings: "unslick" // destroys slick

  }]
});  

})(jQuery);	
</script>
<?php wp_footer(); ?>

</body>
</html>
