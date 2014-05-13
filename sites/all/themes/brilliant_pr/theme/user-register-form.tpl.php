<?php
//$form['actions']['submit']["#attributes"]['class'][] = 'btn-success';
//hide($form['actions']['submit']);
//
//$form['field_firstname'][LANGUAGE_NONE][0]['value']['#attributes']['class'][] = 'span12';
//hide($form['field_firstname']);
//
//$form['field_lastname'][LANGUAGE_NONE][0]['value']['#attributes']['class'][] = 'span12';
//hide($form['field_lastname']);
//
//$form['account']['mail']['#attributes']['class'][] = 'span12';
//hide($form["account"]['mail']);
//
//$form["account"]['pass']['pass2']['#attributes']['class'][] = 'span12';
//unset($form["account"]['pass']['#description']);
//hide($form["account"]['pass']['pass2']);
//
//$form["account"]['pass']['pass1']['#attributes']['class'][] = 'span12';
//hide($form["account"]['pass']['pass1']);
//
//$form['country']['#attributes']['class'][] = 'span12';
//hide($form['country']);
//
//$form['city']['#attributes']['class'][] = 'span12';
//hide($form['city']);
//
//$form['club']['#attributes']['class'][] = 'span12';
//hide($form['club']);
//
//$form['club_set']['#attributes']['class'][] = 'span12';
//hide($form['club_set']);
//
//$form['club_finder']['#attributes']['class'][] = 'span12';
//hide($form['club_finder']);
//
//$form['rt_number']['#attributes']['class'][] = 'span12';
//hide($form['rt_number']);

$form['actions']['submit']["#attributes"]['class'][] = 'btn-success';
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