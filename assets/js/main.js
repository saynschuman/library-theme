(function($) {

	// menu

	$('.main-screen .block').click(function(){
		$('.main-screen .block').removeClass('active');
		$(this).addClass('active');
	})

	$('#search-cat input').focus(function(){
		$('#search-cat').addClass('focus');
	})

	$('#search-cat input').blur(function(){
		$('#search-cat').removeClass('focus');
	})

	 $('input,textarea').focus(function(){
	   $(this).data('placeholder',$(this).attr('placeholder'))
	   $(this).attr('placeholder','');
	 });
	 $('input,textarea').blur(function(){
	   $(this).attr('placeholder',$(this).data('placeholder'));
	 });	

	 $('#new-btn').click(function(){
	 	$('#pop-btn').removeClass('active');
	 	$(this).addClass('active');
	 	$('#pop-body').removeClass('active');
	 	$('#new-body').addClass('active');
	 })

	 $('#pop-btn').click(function(){
	 	$('#new-btn').removeClass('active');
	 	$(this).addClass('active');
	 	$('#new-body').removeClass('active');
	 	$('#pop-body').addClass('active');
	 })

	// menu 

	$('.mob-button').click(function(){
		$(this).children('span').toggleClass('active');
		$('.mobile-toggle ').toggleClass('active');
	})

	$('.search-button').click(function(){
		$('#mobile-search').toggleClass('active');
		$('#mobile-search input').focus();
	})

	$('#mobile-search input').blur(function(){
		$('#mobile-search').toggleClass('active');
	});

})(jQuery);