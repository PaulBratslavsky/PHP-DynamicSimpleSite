<?php 

function createFormFunction($inputArray = [],  $formMethod = '', $formAction = '') { ?>




  <form action="<?php echo $formAction; ?>" method="<?php echo $formMethod; ?>" class="main-form">
    
    <?php foreach ( $inputArray as $item ) : ?>

      <div class="form-group">
        <label for="<?php echo $item[forAndName]; ?>"><?php echo $item[labelTitle]; ?></label>
        <input type="<?php echo $item[type]; ?>" id="<?php echo $item[id]; ?>" name="<?php echo $item[forAndName]; ?>">
      </div>

    <?php endforeach; ?>

    <div class="form-group">
      <label for="name ">Message:</label>
      <textarea id="message" name="message"></textarea>
    </div>
  
    <input type="submit" class="submit" name="form_submit" value="Submit Form">

  </form>

<?php }

?>



