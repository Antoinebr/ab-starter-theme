<?php get_header(); ?>

<div class="container entry-content">

  <div class="row">
    <div class="col-sm-9">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <article class="<?php post_class();?>">

          <a href="<?php the_permalink();?>">
            <h1><?php the_title(); ?></h1>
          </a>

          <?php
          if ( has_post_thumbnail() ) {
            $attr = array('class'	=> "img-responsive");
            the_post_thumbnail('ab-medium',$attr);
          }
          ?>

          <?php get_template_part('templates/components/loop/template','meta'); ?>


          <?php the_excerpt(); ?>


        </article>

      <?php endwhile;  ?>
      <?php get_template_part('templates/components/pagination/template','pagination'); ?>
    <?php  endif; ?>


  </div> <!-- col-sm-9 -->

  <div class="col-sm-3">
    <?php get_template_part('templates/components/template','sidebar'); ?>
  </div> <!-- col-sm-4 -->



</div> <!-- row -->



</div> <!-- container -->


<?php get_footer(); ?>
