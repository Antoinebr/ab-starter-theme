<?php if($url = get_previous_posts_page_link() && is_paged()): ?>
  <li class="previous"><a href="<?=$url;?>">&larr; Précédent</a></li>
<?php endif; ?>

<?php $url = get_next_posts_page_link(); if($url !== "" && Helpers::others_page_exists()): ?>
  <li class="next"><a href="<?=$url;?>">Suivant &rarr;</a></li>
<?php endif; ?>
