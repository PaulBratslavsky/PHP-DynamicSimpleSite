<?php 

function showAboutFunc($aboutInfo) { ?>
  <section class="about-info">

      <div class="container">
        <section class="about-left">
            <h1 id="about-heading"><?php echo $aboutInfo[heading]; ?></h1>
            <p class="about-text"><?php echo $aboutInfo[paragraph]; ?></p>
        </section>

        <section class="about-right">
            <img src="<?php echo $aboutInfo[imageUrl]; ?>" alt="<?php echo $aboutInfo[imageAlt]; ?>" id="about-image">
        </section>
      </div>

    </section>
<?php }
