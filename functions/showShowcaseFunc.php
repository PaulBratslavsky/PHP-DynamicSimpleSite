<?php 

function showShowcaseFunc( $showcaseContent = [] ) { ?>

  <div id="main-showcase">
    <div class="container flex">
      <div class="main-showcase__content">
        <h1><?php echo $showcaseContent[heading]; ?></h1>
        <p class="lead-paragraph"><?php echo $showcaseContent[paragraph]; ?></p>
        <?php if ($showcaseContent[buttonTitle]) : ?> 
          <a class="button" href="<?php echo $showcaseContent[buttonLink]; ?>"><?php echo $showcaseContent[buttonTitle]; ?></a>
        <?php endif; ?> 
      </div>
    </div>
  </div>


<?php }

?>