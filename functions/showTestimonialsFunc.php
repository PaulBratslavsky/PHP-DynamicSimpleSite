<?php 

function showTestimonialFunc($testimonials) { ?>

  <section class="testimonials">

    <div class="container">
      <h2 class="lg-heading">What Our Guests Say</h2>
      <?php foreach ($testimonials as $item) : ?>

      <div class="testimonial bg-primary">
        <img src="<?php echo $item[imageUrl]; ?>" alt="<?php echo $item[imageAlt]; ?>">
        
        <p><?php echo $item[testimonialText]; ?></p>
      </div>

      <?php endforeach; ?>
    </div>

  </section>

<?php }

?>

     
