<?php
/* Template Name: HomePage */
?>

<?php get_header(); ?>
<body>


  <section class="banner-full-screen u-wjs clearfix" data-height="100" style="background-image:url('<?php bloginfo('template_url');?>/img/background/bg-home.jpg')">
    <img class="logo img-center img-responsive" width="400px" src="<?php echo get_theme_mod("ab_logo");?>" />
    <h1>AB Starter Theme</h1>
  </section>


  <div class="container u-mtm">

    <div class="row">
      <div class="col-md-9">

        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; endif; ?>

        <hr class="u-mtm u-mbm" />
        <h3>Mini archive</h3>
        <?php get_template_part('templates/components/archive/template','mini-archive'); ?>

        <hr class="u-mtm u-mbm" />
        <h3>Mansonry</h3>
        <?php get_template_part('templates/components/gallery/template','mansonry'); ?>




        <hr class="u-mtm u-mbm" />
        <h3>Accordion</h3>
        <?php get_template_part('templates/components/accordion/template','accordion'); ?>






      </div> <!-- col-md-9 -->

      <aside class="col-md-3">

        <?php get_template_part('templates/components/template','sidebar'); ?>


      </aside> <!-- col-md-3 -->

    </div> <!-- row -->




  </div> <!-- container -->
</body>

<?php get_footer(); ?>
