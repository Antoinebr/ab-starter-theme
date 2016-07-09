<ul class="pagination u-txtCenter">
  <?php $paginations = wpex_pagination();
  if ($paginations !== null):
    foreach ($paginations as $pagination){
      if (!strstr($pagination, 'class="next') && !strstr($pagination, 'class="prev')){


        if(strpos($pagination, 'current') !== false){
          ?>
          <li class="active"><?= $pagination; ?></li>
          <?php
        }else{
          echo "<li>$pagination</li>";
        }

      }
    }
  endif;
  ?>
</ul>
