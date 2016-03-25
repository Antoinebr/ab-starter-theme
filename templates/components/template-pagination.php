<?php if($url = get_previous_posts_page_link() && is_paged()): ?>
  <li class="previous"><a href="<?=$url;?>">&larr; Précédent</a></li>
<?php endif; ?>

<?php  global $wp_query; if($url = get_next_posts_page_link() && $wp_query->max_num_pages > 1 ): ?>
  <li class="next"><a href="<?=$url;?>">Suivant &rarr;</a></li>
<?php endif; ?>
