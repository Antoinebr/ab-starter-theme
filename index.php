<?php get_header(); ?>

<div class="container entry-content">

  <div class="row">
    <div class="col-sm-12">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>


        <?php the_content(); ?>


      <?php endwhile; endif; ?>


    </div> <!-- col-sm-12 -->
  </div> <!-- row -->



</div> <!-- container -->


<?php get_footer(); ?>



<?php

?>
