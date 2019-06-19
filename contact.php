<?php include './includes/arrays.php'; ?>
<?php include_once './includes/header.php'; ?>


    <section id="section-contact-form" class="padding-80 center-me">
      <div class="container">
        <div id="form-container">
        <h1><span class="text-primary">Contact</span> Us</h1>
        <p>Please fill out the form bellow to contact us</p>

         <form action="somewhere.php" class="main-form">
          <div class="form-group">
            <label for="name ">Name:</label>
            <input type="text" id="name" name="name">
          </div>

          <div class="form-group">
            <label for="name ">Email:</label>
            <input type="email" id="email" name="email">
          </div>
          
          <div class="form-group">
            <label for="name ">Message:</label>
            <textarea id="message" name="message"></textarea>
          </div>

          <button class="submit">Submit Form</button>


         </form>
        </div>
      </div>
    </section>

    <section id="home-benefits">

        <div class="container">
          <div class="benefits-container">
          <section class="home-benefits__section">
              <i class="fas fa-building benefits-icon"></i>
              <h2 class="benefits-heading">Location</h2>
              <p class="benefits-text">50 Main St, West Hartford CT.</p>
          </section>
          <section class="home-benefits__section">
              <i class="fas fa-phone benefits-icon"></i>
              <h2 class="benefits-heading">Call Us</h2>
              <p class="benefits-text">(860) 680 8066</p>
          </section>
          <section class="home-benefits__section">
              <i class="fas fa-envelope benefits-icon"></i>
              <h2 class="benefits-heading">Email Us</h2>
              <p class="benefits-text">info@stayhotel.com</p>
          </section>
        </div>
    
        </div>
    
      </section>
    

 
  <footer class="main-footer">
    <p>copyright &copy; 2019 | Paul Bratslavsky</p>
  </footer>


</body>
</html>