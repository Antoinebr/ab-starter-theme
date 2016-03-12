<?php get_header(); ?>

<div class="container">

  <div class="row">
    <div class="col-sm-12">


      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

          <h1><?php the_title(); ?></h1>

          <p>
            <?php the_content(); ?>
          </p>

        <?php endwhile; ?>

        <?php // Navigation ?>

      <?php else : ?>

        <?php // No Posts Found ?>

      <?php endif; ?>


    </div> <!-- col-sm-12 -->
  </div> <!-- row -->


</div> <!-- container -->


<?php get_footer(); ?>
