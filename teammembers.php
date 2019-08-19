<?php define("TITLE", "HSH | Our Team"); ?>

<?php include_once './includes/header.php'; ?>

    <section style="padding: 2rem 0; min-height: 85vh; display: flex; justify-content:center; align-items: center;">
      <div class="container">
      <ul class="flex-row">
        <?php foreach ($teamMembers as $teammember => $item) : ?>
        <li class="flex" style="width: 300px; list-style: none;"> 
            <a href="teammember.php?item=<?php echo $teammember;?> ">
              <img style="heigh: 250px; width: 250px; border-radius: 50%; display: block; padding-top:1rem;" src="<?php echo $item[imageUrl]; ?>" alt="<?php echo $item[imageAlt]; ?>" />
              <h2 style="text-align: center; padding-top:1rem;"><?php echo $item[heading]; ?></h2>
            </a>
        </li>
        <?php endforeach; ?>
      </ul>
      </div>
    </section>

<?php include_once './includes/footer.php'; ?>

</body>
</html>