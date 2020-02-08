$('page-scroll').on('click',function(e){
	var tujuan = $(this).attr('href');
	var elementujuan = $(tujuan);

	$('body').animate({
		scrollTop: elementujuan.offset().top - 50
	});

	e.preventDefault();
});

$('.nav-link').on('click',function() {
  $('.navbar-collapse').collapse('hide');
});