
/**
*
*  Ajoute une lightbox à toutes les images
*  qui ont pour lien une image
*
*/
var $linkImg = $('.entry-content a img').parent();

$linkImg.each(function(){

  var parts = $(this).attr('href').split('.');
  last_part = parts[parts.length - 1];
  last_part = last_part.toLowerCase();

  var formatsImg = ["tif", "tiff","gif","jpeg",  "jpg",  "jif",  "jfif", "jp2",  "jpx",  "j2k",  "j2c", "fpx", "pcd", "png", "pdf"];

  if(formatsImg.indexOf(last_part) !== -1){

    $(this).addClass('lightbox');

  }

});


$('.lightbox').magnificPopup({
  type: 'image'
});



/**
*
*  Ajoute une gallery lightbox
*  a la gallery de jetpack
*
*/
$('img[data-orig-file^="http').each(function(){
  var src = $(this).attr('src');
  var srcHigh = src.split('?resize='); // On récupère seulemet la full res
  $(this).parent().attr('href',srcHigh[0]).addClass('ab-gallery');
});

$('.ab-gallery').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
