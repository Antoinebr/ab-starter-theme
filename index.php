<?php get_header(); ?>

<div class="container entry-content">

  <div class="row">
    <div class="col-sm-12">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


        <h1><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ): $attr = array('class'	=> "img-responsive"); the_post_thumbnail('ab-medium',$attr); endif; ?>


          <?php the_content(); ?>


        <?php endwhile; endif; ?>


      </div> <!-- col-sm-12 -->
    </div> <!-- row -->



  </div> <!-- container -->


  <?php get_footer(); ?>
