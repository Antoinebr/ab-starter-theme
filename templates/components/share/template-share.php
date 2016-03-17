<?php
/**
*
*  Créer des liens de paratage
*
*/
?>

<div class="clearfix">
  <?php $url = get_permalink(); ?>
  <div class="social-single-center">

    <a href="#" onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $url;?>','wclose','width=500,height=300,toolbar=no,status=no,left=20,top=30'); return false;">
      Facebook
    </a>

    <?php
    $text = 'Avant le tweet';
    $hashtag = "#WordPress";
    $url_twitter = 'http://twitter.com/share?url='.$url.'&text='.$text.'&hashtags='.$hashtag.''; ?>
    <a href="#"  onClick="MyWindow=window.open('<?= $url_twitter;?>','Partagez','width=540,height=300'); return false;" >
      Twitter
    </a>

    <a href="#"  onClick="MyWindow=window.open('https://plus.google.com/share?url=<?php the_permalink();?>','Partagez','width=540,height=300'); return false;">
      Google Plus
    </a>
    <a href="<?php bloginfo('url');?>/feed/" target="_blank">
      RSS
    </a>
    <a href="mailto:?subject=D2SI blog&amp;body=Lien <?php echo urlencode(get_the_permalink());?>">
      Emails
    </a>
  </div>
</div>
