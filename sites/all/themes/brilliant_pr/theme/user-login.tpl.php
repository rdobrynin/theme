<?php

$form['actions']['submit']["#attributes"]['class'][] = 'btn-success';
//hide($form['actions']['submit']);
?>
<!--  <div class="row-fluid">-->
<!---->
<!--    --><?php //print render($form['account']['name']); ?>
<!--    --><?php //print render($form['account']['mail']); ?>
<!--    --><?php //print render($form['actions']['submit']); ?>
<!---->
<!---->
<!--  </div>-->

<?php print drupal_render_children($form); ?>