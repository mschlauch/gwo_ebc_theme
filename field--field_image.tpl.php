<?php

// Reduce image array to single image in teaser view mode
if ($element['#view_mode'] == 'teaser') {
  $items = array(reset($items));
}


?>

<div class="customteaserimage">
    <?php print render($items); ?>
  </div>