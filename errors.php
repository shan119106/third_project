<?php if(count($error)>0): ?>
  <div>
    <?php  foreach($error as $errors): ?>
    <p><?php echo $errors ?></p>

    <?php endforeach; ?>
  </div>
<?php endif ; ?>
