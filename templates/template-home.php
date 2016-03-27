<?php
/* Template Name: HomePage */
?>

<?php get_header(); ?>
<body>


  <section class="banner-full-screen clearfix" style="background-image:url('http://lorempicsum.com/futurama/1900/900/4')">
    <h1> Hello world</h1>
  </section>


  <div class="container u-mtm">

    <div class="row">
      <div class="col-md-9">

        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; endif; ?>


        <?php get_template_part('templates/components/archive/template','mini-archive'); ?>

        <?php get_template_part('templates/components/gallery/template','mansonry'); ?>


      </div> <!-- col-md-9 -->

      <aside class="col-md-3">

        <?php get_template_part('templates/components/template','sidebar'); ?>

      </aside> <!-- col-md-3 -->

    </div> <!-- row -->


  </div> <!-- container -->
</body>

<?php get_footer(); ?>
