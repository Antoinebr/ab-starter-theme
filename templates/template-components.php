<?php
/* Template Name: Components */
?>

<?php get_header(); ?>

<div class="container entry-content">

  <div class="row">

    <div class="col-md-12">

      <h1> Components </h1>



      <hr/ class="u-mtm u-mbm">

      <h2> Buttons </h2>
      <a href="#" class="button"> I'm a primary button </a>

      <br/><br/>
      <a href="#" class="button button--secondary"> I'm a secondary button </a>

      <br/><br/>
      <a href="#" class="button button--danger"> I'm a danger button </a>

      <br/><br/>
      <a href="#" class="button button--small"> I'm a small button </a>

      <br/><br/>
      <a href="#" class="button button--big"> I'm a big button </a>

      <br/><br/>
      <a href="#" class="button button--block "> I'm a button with a block display </a>

      <br/><br/>
      <a href="#" class="button button--circular "> I'm circular button </a>

      <br/></br/>

      <a href="#" class="button button--dblcontent">
        <span class="initial"> I'm the first part</span>
        <span class="hovered">  I'm the second  </span>
      </a>



      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button button--blockMobile"> I'm a btn with a block display on mobile (768px) </a>
        sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
      </p>

      <hr/ class="u-mtm u-mbm">


      <h2> Message </h2>

      <div class="msg">
        <div class="msg-title"> I'm a msg </div>
        I'm the message himslef : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
      </div>

      <div class="msg msg--error">
        <div class="msg-title"> I'm an error msg </div>
        I'm the message himslef : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
      </div>

      <div class="msg msg--warning">
        <div class="msg-title"> I'm a warning msg </div>
        I'm the message himslef : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
      </div>

      <div class="msg msg--success">
        <div class="msg-title"> I'm a warning msg </div>
        I'm the message himslef : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
      </div>

      <hr/ class="u-mtm u-mbm">

      <h2>List</h2>

      <ul>
        <li>I'm a normal list</li>
        <li>I'm a normal list</li>
        <li>I'm a normal list</li>
        <li>I'm a normal list</li>
      </ul>

      <br/>

      <ul class="listReset">
        <li>I'm a reseted list</li>
        <li>I'm a reseted list</li>
        <li>I'm a reseted list</li>
        <li>I'm a reseted list</li>
      </ul>

      <br/>

      <ul class="listInline">
        <li>I'm a inline list</li>
        <li>I'm a inline list</li>
        <li>I'm a inline list</li>
        <li>I'm a inline list</li>
      </ul>

      <hr/ class="u-mtm u-mbm">


      <h2>Form</h2>

      <form>

        <div class="form-group form-input">
          <label class="form-label">Name</label>
          <input type="text" placeholder="your name">
        </div>

        <div class="form-group form-input">
          <label class="form-label form-label--required">Name required</label>
          <input type="text" placeholder="your name">
        </div>

        <div class="form-group form-input">
          <small>
            <label class="form-label form-label--required">Name small</label>
            <input type="text" placeholder="your name">
          </small>
        </div>

        <button class="button"> Send </button>
      </form>


      <hr/ class="u-mtm u-mbm">

      <h2> Mini archive </h2>

      <?php get_template_part('templates/components/archive/template','mini-archive'); ?>

      <hr/ class="u-mtm u-mbm">
      <h2> Promo banner </h2>
    </div> <!-- col-md-12 -->
  </div> <!-- row -->
</div> <!-- container -->

<section class="banner-promo clearfix">
  <p class="txtXL">Hello world , i'm a promo banner !</p>
</section>



<div class="container">
  <div class="row">

    <div class="col-md-12">


      <h2>Mansonry</h2>
      <?php get_template_part('templates/components/gallery/template','mansonry'); ?>


      <hr/ class="u-mtm u-mbm">

      <h2>Accordion</h2>
      <?php get_template_part('templates/components/accordion/template','accordion'); ?>

      <hr/ class="u-mtm u-mbm">

      <h2>Search Form</h2>
      <?php get_search_form();?>


    </div> <!-- col-md-12 -->

  </div> <!-- row -->

</div> <!-- container -->


<?php get_footer(); ?>
