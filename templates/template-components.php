<?php
/* Template Name: Components */
?>

<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <h1> Components </h1>


      <h2>Typo</h2>

      <p> I'm a p ! Lorem ipsum dolor sit amet, <strong>I'm a text in a strong tag</strong> incididunt ut <em> I'm a text in a em tag : uis nostrud exercitation ullamco  </em>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p class="txtXXL">Im a text XXL like a h1 </p>
      <p class="txtXL">Im a text XL like a h2 </p>
      <p class="txtL">Im a text L like a h3 </p>
      <p class="txtM">Im a text M like a h4 </p>
      <p class="txtS">Im a text S like a h5 </p>
      <p class="txtXS">Im a text XS like a h6 </p>

      <p class="txtLead">I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead ! I'm a text lead !</p>

      <p class="txtSmall">I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text ! I'm a small text !</p>

      <hr/ class="u-mtm u-mbm">

      <h2> Headings</h2>

      <h1> I'm a h1</h1>
      <h2> I'm a h2</h2>
      <h3> I'm a h3</h3>
      <h4> I'm a h4</h4>
      <h5> I'm a h5</h5>
      <h6> I'm a h6</h6>

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

</div> <!-- col-md-12 -->


</div> <!-- row -->


</div> <!-- container -->


<?php get_footer(); ?>
