<?php
if( have_rows('qa') ):
  $i = 1;
  while ( have_rows('qa') ) : the_row(); ?>
  <article class="faq u-mts" id="<?= $i; ?>">
    <div class="faq-question">
      <?php the_sub_field('question'); ?>
      <div class="faq-show-more faq-show">
        <div>
          <img src="<?php bloginfo('template_url');?>/img/icons/chevron.png">
        </div>
      </div>
    </div> <!-- question -->

    <div class="faq-awnser u-pls u-prs u-pls u-pts ">
      <?php the_sub_field('awnser'); ?>
    </div> <!-- faq-awnser -->
  </article>
  <?php
  $i++;
endwhile;
endif; ?>

<article class="faq u-mts" id="1">
  <div class="faq-question">
    lorem ipsum sin dolor ??
    <div class="faq-show-more faq-show">
      <div>
        <img src="<?php bloginfo('template_url');?>/img/icons/chevron.png">
      </div>
    </div>
  </div> <!-- question -->

  <div class="faq-awnser u-pls u-prs u-pls u-pts " style="display: none;">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div> <!-- faq-awnser -->
</article>

<article class="faq u-mts" id="2">
  <div class="faq-question">
    lorem ipsum sin dolor ??
    <div class="faq-show-more faq-show">
      <div>
        <img src="<?php bloginfo('template_url');?>/img/icons/chevron.png">
      </div>
    </div>
  </div> <!-- question -->

  <div class="faq-awnser u-pls u-prs u-pls u-pts " style="display: none;">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div> <!-- faq-awnser -->
</article>
