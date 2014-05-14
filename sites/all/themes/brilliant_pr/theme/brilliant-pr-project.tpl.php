
<?php dsm($form);




?>

<div class="row-fluid rtapi-profile-form">
  <div class="span8">
    <fieldset>
      <legend></legend>



      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['title']['#title']); ?>&nbsp;<span class="required-note">*</span></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php print render($form['title']); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['description']['#title']); ?></span>
        </div>
        <div class="col-lg-10 pull-left"  style="margin-bottom: 20px">
          <?php print render($form['description']); ?>
        </div>
      </div>


      <div class="division">

      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['company']['#title']); ?>&nbsp;<span class="required-note">*</span></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php print render($form['company']); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['customer_name']['#title']); ?>&nbsp;<span class="required-note">*</span></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php print render($form['customer_name']); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2">
          <span class="field-title"><?php print render($form['curator']['#title']); ?>&nbsp;<span class="required-note">*</span></span>
        </div>
        <div class="col-lg-4 pull-left">
          <?php print render($form['curator']); ?>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-2">
            <button class="btn btn-success">Add new contact person</button>
          </div>

        </div>
      </div> <!--   end of division   -->







    </fieldset>


  </div>
  <div class="span4">
    <?php print render($form['picture']); ?>
  </div>
</div>

<?php print drupal_render_children($form); ?>