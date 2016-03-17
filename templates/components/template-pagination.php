<?php if($url = get_previous_posts_page_link()): ?>
  <li class="previous"><a href="<?=$url;?>">&larr; Précédent</a></li>
<?php endif; ?>

<?php if($url = get_next_posts_page_link()): ?>
  <li class="next"><a href="<?=$url;?>">Suivant &rarr;</a></li>
<?php endif; ?>
