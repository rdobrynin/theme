<?php
$form['actions']['submit']["#attributes"]['class'][] = 'btn-success';
//hide($form['actions']['submit']);
$form['name']['#title'] = _bootstrap_icon('user') . ' ' . 'Username';
$form['pass']['#title'] = _bootstrap_icon('lock') . ' ' . 'Password';
$form['actions']['submit']['#id'] = 'login_btn';
//dsm($form)
?>
  <form class="form-horizontal" role="form">
    <div class="form-group">

      <div class="col-lg-3">
        <?php print render($form['name']); ?>
      </div>

      <div class="col-lg-3">
        <?php print render($form['pass']); ?>
      </div>
      <div class="col-lg-3">
        <?php print drupal_render_children($form); ?>
      </div>
    </div>
  </form>



