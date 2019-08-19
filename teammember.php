<?php  define("TITLE", "Say Hello"); ?>
<?php include_once './includes/header.php'; ?>

  <?php 
    function replaceBadChar($input) {
      $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
      return $output;
    }
  ?>

  <?php if (isset($_GET['item'])) : ?>

    <?php $stripped = $teamMembers[ replaceBadChar($_GET['item']) ]; ?>
    <section style="padding: 2rem 0; min-height: 85vh; display: flex; justify-content:center; align-items: center;">
      <?php echo showTeamFunc($stripped); ?>
    </section>

  <?php else : ?>

    <section style="padding: 2rem 0; height: calc(100vh - 123px); display: flex; justify-content:center; align-items: center;">
      <h1>Member not found</h1>
    </section>

  <?php endif; ?>

<?php include './includes/footer.php'; ?>
</body>
</html>