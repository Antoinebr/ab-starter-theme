<?php get_header();?>

<div class="container entry-content">

  <div class="row">
    <div class="col-sm-12">


      <h1><?php printf( __( 'Résultats de recherche pour: %s', '_abtheme' ),  get_search_query() ); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <?php
        if ( has_post_thumbnail() ) {
          $attr = array('class'	=> "img-responsive");
          the_post_thumbnail('ab-medium',$attr);
        }
        ?>

        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

        <?php get_template_part('templates/components/loop/template','meta'); ?>

        <p><?php Helpers::customContent(340);?></p>
        <a href="<?php the_permalink();?>"class="more-link">Lire la suite</a>

        <hr class="u-mtm u-mbm"/>


      <?php endwhile; ?>

      <!-- Pagination -->

      <?php get_template_part('templates/pagination.php'); ?>


    <?php else: endif; ?>


    </div> <!-- col-sm-12 -->
  </div> <!-- row -->
</div> <!-- container -->

<?php get_footer();?>
