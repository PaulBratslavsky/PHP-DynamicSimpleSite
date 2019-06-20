<?php 

function createFormFunction($inputArray = [], $buttonType = [], $formMethod = '', $formAction = '') { ?>

  <form action="<?php echo $formAction; ?>" method="<?php $formMethod; ?>" class="main-form">
    
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
  
    <button class="submit">Submit Form</button>

  </form>

<?php }

?>



<!--

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

-->