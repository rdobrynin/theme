
<?php
dsm($form);
$form['opt_time']['date']['#title'] = 'Optimal date/time';
$form['dead_time']['date']['#title'] = 'Deadline date/time';
hide($form['submit']);
hide($form['submit_task']);
hide($form['delete']);
hide($form['cancel']);
?>

<div class="row-fluid">
  <div class="span8">
    <fieldset>
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
            <button class="btn btn-success" disabled="disabled">Add new contact person</button>
          </div>

        </div>
      </div> <!--   end of division   -->


      <div class="division">
        <div class="row">
          <div class="col-lg-3">
            <span
              class="field-title"><?php print render($form['opt_time']); ?></span>
          </div>
          <div class="col-lg-3">
            <span
              class="field-title"><?php print render($form['dead_time']); ?></span>
          </div>
        </div>
      </div>

      <?php
      if (!empty($form['status'][0]) || !empty($form['status'][1]) || !empty($form['status'][2]) || !empty($form['status'][3]) || !empty($form['status'][4]) || !empty($form['status'][5])) {
        print_r(' <div class="division">');
        print drupal_render_children($form);
        print_r('</div>');
      }
      else {
        print drupal_render_children($form);
      }
      ?>

      <div class="division">
        <div class="row">
          <div class="col-lg-12 text-right">
            <span class="field-title"><?php print render($form['submit']); ?><?php print render($form['submit_task']); ?>
              <?php print render($form['delete']); ?><?php print render($form['cancel']); ?></span>
          </div>
        </div>
      </div>
    </fieldset>
  </div>
</div>

