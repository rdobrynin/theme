
<?php
dsm($form);
unset($form['field_first_name'][LANGUAGE_NONE][0]['value']['#title']);
unset($form['field_last_name'][LANGUAGE_NONE][0]['value']['#title']);

?>

<div class="row-fluid">
  <div class="span8">
    <fieldset>
      <div class="row user_edit_profile">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['field_first_name'][LANGUAGE_NONE]['#title']); ?></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php
          print render($form['field_first_name'][LANGUAGE_NONE][0]['value']); ?>
        </div>
        <div class="col-lg-4 pull-left">
          <?php
          print render($form['field_last_name'][LANGUAGE_NONE][0]['value']); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['account']['name']['#title']); ?></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php
          print render($form['account']['name']); ?>
        </div>
      </div>
   <?php  print drupal_render_children($form);?>
    </fieldset>
  </div>
</div>

