<h3>Edit citizen</h3>
<?php echo form_open('citizens/edit/' . $citizen->id); ?>
<p>Id<br>
  <?php echo form_input('id', $citizen->id); ?>
  <?php echo form_error('id'); ?>
</p>
<p>Last_name<br>
  <?php echo form_input('last_name', $citizen->last_name); ?>
  <?php echo form_error('last_name'); ?>
</p>
<p>First_name<br>
  <?php echo form_input('first_name', $citizen->first_name); ?>
  <?php echo form_error('first_name'); ?>
</p>
<p>Middle_name<br>
  <?php echo form_input('middle_name', $citizen->middle_name); ?>
  <?php echo form_error('middle_name'); ?>
</p>
<p>Address<br>
  <?php echo form_input('address', $citizen->address); ?>
  <?php echo form_error('address'); ?>
</p>
<p>Phone<br>
  <?php echo form_input('phone', $citizen->phone); ?>
  <?php echo form_error('phone'); ?>
</p>
<p>Email<br>
  <?php echo form_input('email', $citizen->email); ?>
  <?php echo form_error('email'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('citizens', 'cancel'); ?>
</p>
<?php echo form_close(); ?>