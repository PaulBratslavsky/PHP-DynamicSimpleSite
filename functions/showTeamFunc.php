<?php 

function showTeamFunc($teamInfo) { ?>
  <section class="about-info">
      <div class="container">
        <section class="about-left">
            <h1 id="about-heading"><?php echo $teamInfo[heading]; ?></h1>
            <p class="about-text"><?php echo $teamInfo[paragraph]; ?></p>
            <a style="margin-top: 1rem;"class="button" href="teammembers.php">Back</a>

        </section>

        <section class="about-right">
            <img src="<?php echo $teamInfo[imageUrl]; ?>" alt="<?php echo $teamInfo[imageAlt]; ?>" id="about-image">
        </section>
      </div>

    </section>
<?php }
