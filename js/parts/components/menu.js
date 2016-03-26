/**
*
*  Gère le menu responsive
*
*/

$('#responsive-icon').on('click',function(){
  $(this).addClass('hidden');
  $('#responsive-icon-close').removeClass('hidden');
  $('.slide-menu').addClass('responsive-menu-show');
});

$('#responsive-icon-close').on('click',function(){
  $(this).addClass('hidden');
  $('#responsive-icon').removeClass('hidden');
  $('.slide-menu').removeClass('responsive-menu-show');
});
