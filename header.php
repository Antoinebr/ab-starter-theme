<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9">    <![endif]-->
<!--[if gt IE 9]>      <html class="ie10+">  <![endif]-->
<!--[if !IE]><!-->     <html class="no-js">                <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name');?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#003972">
  <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon-32x32.png">
  <link href="<?php bloginfo('template_url');?>/css/app.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head();?>
</head>

<img class="responsive-icon" id="responsive-icon" src="<?php bloginfo('template_url');?>/img/icons/menu/icon-hamburger.svg">
<img class="responsive-icon hidden" id="responsive-icon-close" src="<?php bloginfo('template_url');?>/img/icons/menu/icon-hamburger-close.svg">

<div class="slide-menu menu--sticky ">
  <div class="container">
    <a href="<?php bloginfo('url');?>">
      <img class="menu-logo img-responsive" style="height:35px;" src="<?php bloginfo('template_url');?>/img/svg/logo.svg">
    </a>

    <?php
    wp_nav_menu( array(
      'menu'           => 'Menu Principal', // Do not fall back to first non-empty menu.
      'theme_location' => 'Menu haut',
      'container' => "nav",
      'items_wrap'     => '<ul class="listReset">%3$s</ul>'
    ) );
    ?>

  </div>
</div>


<script type='text/javascript'>
/* <![CDATA[ */
var abTemplateUrl = "<?php bloginfo('template_url'); ?>";
var blogUrl= "<?php bloginfo('url'); ?>";
/* ]]> */
</script>

<body>
