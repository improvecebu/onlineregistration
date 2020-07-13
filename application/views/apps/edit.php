<h3>Edit app</h3>
<?php echo form_open('apps/edit/' . $app->id); ?>
<p>Id<br>
  <?php echo form_input('id', $app->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Name<br>
  <?php echo form_input('name', $app->name); ?>
  <?php echo form_error('name'); ?>
</p>
<p>Token<br>
  <?php echo form_input('token', $app->token); ?>
  <?php echo form_error('token'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('apps', 'cancel'); ?>
</p>
<?php echo form_close(); ?>