<?php define("TITLE", "HSH | Contact Us"); ?>

<?php include_once './includes/header.php'; ?>


    <section id="section-contact-form" class="padding-80 center-me">  
      <div class=container>
        <h2>Hey <?php echo $_POST["name"]; ?>.</h2>
        <h4>You sent us an email from <?php echo $_POST["email"]; ?>...</h4>
        <h4>But instead it went into the void.</h4>
        <p>Lol I don't want to have you guys spam my email.</p>
        <p>The purpose of this site was to practice basic HTML, CSS and PHP to build a simple Dynamic PHP website.</p>  
        <p>Form handleing and form validation are whole other topics.</p> 
        <p>Maybe in the next project.</p>
      </div>
    </section>

  <?php showBenefits($contactList); ?>
 
  <footer class="main-footer">
    <p>copyright &copy; 2019 | Paul Bratslavsky</p>
  </footer>


</body>
</html>




