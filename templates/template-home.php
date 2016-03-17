<?php
/* Template Name: HomePage */
?>

<?php get_header(); ?>

<div class="container">

  <div class="row">
    <div class="col-md-9">


      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>


        <?php the_content(); ?>


      <?php endwhile; endif; ?>


    </div> <!-- col-md-9 -->

    <aside class="col-md-3">

      <?php get_template_part('templates/components/template','sidebar'); ?>

    </aside> <!-- col-md-3 -->

  </div> <!-- row -->


</div> <!-- container -->


<?php get_footer(); ?>
