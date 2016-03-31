<?php if(get_previous_posts_page_link() && is_paged()): ?>
  <li><a href="<?= get_previous_posts_page_link();?>">&larr; Précédent</a></li>
<?php endif; ?>

<?php $url = get_next_posts_page_link(); if($url !== "" && Helpers::others_page_exists()): ?>
  <a href="<?=$url;?>">Suivant &rarr;</a>
<?php endif; ?>
