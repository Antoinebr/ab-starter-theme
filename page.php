get_header(); ?>

<div class="row">
  <div class="col-sm-12">

    <?php while ( have_posts() ) : the_post(); ?>





    <?php endwhile; ?>

  </div>
</div> <!-- row -->


<?php get_footer(); ?>
