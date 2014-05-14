
<?php
dsm($form);
?>

<div class="row-fluid">
  <div class="span8">
    <fieldset>
      <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-4 pull-left">

        </div>
      </div>
   <?php  print drupal_render_children($form);?>
    </fieldset>
  </div>
</div>

