$(window).scroll(function(){
  var wScroll = $(this).scrollTop();

  if( wScroll > $('.daftarharga').offset().top -250){
    $('.daftarharga .thumbnail').each(function){
      setTimeout(function(){
        $('.daftarharga .thumbnail').eq(i).addClass('muncul');
      }, 300 * (i+1));
    }
  }
});

$('.nav-link').on('click',function() {
  $('.navbar-collapse').collapse('hide');
});