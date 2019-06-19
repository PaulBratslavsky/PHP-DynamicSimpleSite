<?php 

function showHomeFunction( $homeContent = [] ) { ?>

  <section id="home-section">
      <div class="home-section__img"></div>
      <div class="home-section__text">
        <div>
          <h2><?php echo $homeContent[heading]; ?></h2>
          <p><?php echo $homeContent[paragraph]; ?></p>
          <a class="button-dark" href="<?php echo $homeContent[buttonLink]; ?>"><?php echo $homeContent[buttonTitle]; ?></a>
        </div>
      </div> 
      </div>
    </div>
  </section>

<?php }

?>