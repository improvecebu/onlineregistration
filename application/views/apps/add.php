<h3>Add app</h3>
<?php echo form_open('apps/add'); ?>
<p>Id<br>
  <?php echo form_input('id', $this->input->post('id')); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Name<br>
  <?php echo form_input('name', $this->input->post('name')); ?>
  <?php echo form_error('name'); ?>
</p>
<p>Token<br>
  <?php echo form_input('token', $this->input->post('token')); ?>
  <?php echo form_error('token'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('apps', 'cancel'); ?>
</p>
<?php echo form_close(); ?>