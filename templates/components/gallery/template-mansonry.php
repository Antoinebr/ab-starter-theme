
<div id="mansonry">
  <?php
  $slides = array(
    "http://lorempicsum.com/futurama/300/500/4",
    "http://lorempicsum.com/futurama/500/500/1",
    "http://lorempicsum.com/futurama/500/900/2",
    "http://lorempicsum.com/futurama/300/800/3",
    "http://lorempicsum.com/futurama/400/600/4",
    "http://lorempicsum.com/futurama/500/500/1",
    "http://lorempicsum.com/futurama/500/900/2",
    "http://lorempicsum.com/futurama/500/500/1",
    "http://lorempicsum.com/futurama/500/900/2",
    "http://lorempicsum.com/futurama/300/800/3"
  );
  foreach($slides as $slide): ?>
  <div class="item">
    <a href="<?php echo $slide; ?>">
      <img class="img-responsive mansonry-img" src="<?php echo $slide; ?>">
    </a>
  </div>
<?php endforeach; ?>
</div> <!-- mansonry -->
