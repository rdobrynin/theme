<?php
$form['actions']['submit']["#attributes"]['class'][] = 'btn-success';
?>
    <div class="row p-top">
      <div class="col-lg-6">
        <?php print render($form['field_first_name']); ?>
      </div>
      <div class="col-lg-6">
        <?php print render($form['field_last_name']); ?>
      </div>
    </div>

  <div class="row p-top">
    <div class="col-lg-6">
      <?php print render($form['account']['mail']); ?>
    </div>
    <div class="col-lg-6">
      <?php print render($form['account']['name']); ?>
    </div>
  </div>
  <div class="row p-top">
    <div class="col-lg-12 text-center">
      <?php print render(  $form['actions']['submit']); ?>
    </div>
  </div>
<?php print drupal_render_children($form); ?>