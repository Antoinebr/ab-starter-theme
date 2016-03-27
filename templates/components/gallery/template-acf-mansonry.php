<?php if (get_field('mansonry')): ?>
  <div id="mansonry">
    <?php
    $slides = get_field('mansonry_gallerie');
    foreach($slides as $slide): ?>
    <div class="item">
      <a href="<?php echo $slide['url']; ?>">
        <img class="img-responsive mansonry-img" src="<?php echo $slide['url']; ?>" alt="<?php echo $slide['alt']; ?>">
      </a>
    </div>
  <?php endforeach; ?>
</div> <!-- mansonry -->
<?php endif;?>
