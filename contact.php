<?php define("TITLE", "HSH | Contact Us"); ?>

<?php include_once './includes/header.php'; ?>


    <section id="section-contact-form" class="padding-80 center-me">
      <div class="container">

        <div id="form-container">
        <h1><span class="text-primary">Contact</span> Us</h1>
        <p>Please fill out the form bellow to contact us</p>

        <?php createFormFunction($inputArray, 'post', 'handleemail.php'); ?>

        </div>
      </div>
    </section>

  <?php showBenefits($contactList); ?>
 
  <footer class="main-footer">
    <p>copyright &copy; 2019 | Paul Bratslavsky</p>
  </footer>


</body>
</html>