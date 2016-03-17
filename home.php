<?php get_header(); ?>

<div class="container">

  <div class="row">
    <div class="col-sm-12">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <article>

          <a href="<?php the_permalink();?>">
            <h1><?php the_title(); ?></h1>
          </a>

          <?php the_excerpt(); ?>

        </article>

      <?php endwhile;  ?>
      <?php get_template_part('templates/components/template','pagination'); ?>
    <?php  endif; ?>


  </div> <!-- col-sm-12 -->
</div> <!-- row -->



</div> <!-- container -->


<?php get_footer(); ?>
