<ul class="listInline">
  <li> <?= get_the_date( 'd F Y' ); ?></li>
  <li><a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' )); ?>"><?php the_author();?></a></li>
  <li><?php the_category( ', ' ); ?></li>
</ul>
