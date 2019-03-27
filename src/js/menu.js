//Menu 1er page 
$('#menu').hide();
$(".burger").click(function() {
  if ($('#menu').hasClass( 'visible' ) ) {
  $('#menu').hide().removeClass( 'visible' );
  } else {
  $('#menu').show(300).addClass( 'visible' );
  }
    $(this).toggleClass('active');
});
