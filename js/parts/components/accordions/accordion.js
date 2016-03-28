
// Montre le bouton en savoir plus uniquement si il y'a un contenu caché dans l'article
function seekAndShowBtn(ctaClass){
  var $popi = $(ctaClass).parent().find('.more-content');
  $popi.each(function(){
    $popi.closest('article').find(ctaClass).removeClass('hidden');
  });
}
// seekAndShowBtn('.show-cta-savoir-plus');



var arrowDown = "<img src=' "+abTemplateUrl+"/img/icons/small-arrow-white.png'>";
var arrowUp = "<img src=' "+abTemplateUrl+"/img/icons/small-arrow-white-up.png'>";

$('.show-cta-savoir-plus').click(function(){
  var $hidenContent = $(this).parent().find('.more-content');
  $hidenContent.slideToggle().toggleClass('showed');

  if($hidenContent.hasClass('showed')){
    $(this).text('').text('Réduire');
    $(this).append(arrowUp);
  }else{
    $(this).text('').text('En savoir plus');
    $(this).append(arrowDown);
  }
});
