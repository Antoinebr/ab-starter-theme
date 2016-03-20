<?php get_header();?>

<h1><?php single_tag_title(); ?></h1>

<span>Nos derniers articles</span>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  <?php
  if ( has_post_thumbnail() ) {
    $attr = array('class'	=> "img-responsive");
    the_post_thumbnail('ab-medium',$attr);
  }
  ?>

  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

  <ul>
    <li> <?= get_the_date( 'd F Y' ); ?></li>
    <li><?php the_author();?></a></li>
    <li><?php the_category( ', ' ); ?></li>
  </ul>



  <p><?php Helpers::customContent(340);?></p>
  <a href="<?php the_permalink();?>"class="more-link">Lire la suite</a>



<?php endwhile; ?>

<!-- Pagination -->

<?php get_template_part('templates/pagination.php'); ?>


<?php else: endif; ?>





  <!-- Sidebar  -->
  <aside>
    <?php dynamic_sidebar('sidebar-1'); ?>
  </aside>


  <?php get_footer();?>
