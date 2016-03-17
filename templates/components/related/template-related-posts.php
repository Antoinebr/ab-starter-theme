<h4>A lire également sur le sujet:</h4>

<div class="related-posts ">

  <?php


  /**
  *
  *  Récupère les des posts
  *  de la même catégorie que l'article courant
  *
  */

  $catIds = Helpers::getCategoryAsArray();
  query_posts(
  array(
    'post_type' => 'post',
    'showposts' => 4,
    'post__not_in' => get_option('sticky_posts'),
    'cat' =>$catIds,
    'orderby' => 'rand'
    )
  ); ?>



  <?php  while (have_posts()) : the_post(); ?>

    <article>
      <a href="<?php the_permalink();?>">
        <?php
        if ( has_post_thumbnail() ) {
          $attr = array('class'	=> "img-responsive");
          the_post_thumbnail('ab-small',$attr);
        }
        ?>
      </a>

      <h4><a href="<?php the_permalink();?>"><?= Helpers::customTitle('43');?></a></h4>

      <p><?= get_the_date( 'd F Y' ); ?>  </p>
      <p><?= Helpers::customContent('80');?></p>

    </article>

  <?php  endwhile; wp_reset_query();?>



</div> <!-- related post -->
