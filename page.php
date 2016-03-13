get_header(); ?>

<div class="row">
  <div class="col-sm-12">

    <?php while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title();?></h1>

      <p><?php the_content();?></p>


    <?php endwhile; ?>

  </div>
</div> <!-- row -->


<?php get_footer(); ?>
