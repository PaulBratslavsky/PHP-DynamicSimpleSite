<?php

function showNav ($menu = []) { ?>
  
  <ul class="main-nav__items">
  
  <?php foreach ($menu as $item => $url) : ?> 

    <li class="main-nav__item">
      <a href="<?php echo $url; ?>">
        <?php echo $item; ?>
      </a>
    </li>

  <?php endforeach; ?>

  </ul>


<?php }

?>




