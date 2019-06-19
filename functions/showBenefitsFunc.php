<?php 
  function showBenefits($benefits = []) { ?>

    <section id="home-benefits">

    <div class="container">
      <div class="benefits-container">

        <?php foreach ( $benefits as $item ) : ?>
          <section class="home-benefits__section">
            <i class="<?php echo "{$item[icon]}"; ?>"></i>
            <h2 class="benefits-heading"><?php echo "{$item[heading]}"; ?></h2>
            <p class="benefits-text"><?php echo "{$item[paragraph]}"; ?></p>
          </section>
        <?php endforeach; ?>

      </div>
    </section>


  <?php
  }
?>




