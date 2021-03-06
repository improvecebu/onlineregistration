<h3>Register</h3>
<?php echo form_open('register'); ?>
<p>Last_name<br>
  <?php echo form_input('last_name', $this->input->post('last_name')); ?>
  <?php echo form_error('last_name'); ?>
</p>
<p>First_name<br>
  <?php echo form_input('first_name', $this->input->post('first_name')); ?>
  <?php echo form_error('first_name'); ?>
</p>
<p>Middle_name<br>
  <?php echo form_input('middle_name', $this->input->post('middle_name')); ?>
  <?php echo form_error('middle_name'); ?>
</p>
<p>Address<br>
  <?php echo form_textarea('address', $this->input->post('address')); ?>
  <?php echo form_error('address'); ?>
</p>
<p>Barangay<br>
  <?php echo form_dropdown('barangay', array(), '', 'id="barangays"'); ?>
</p>
<p>Phone<br>
  <?php echo form_input('phone', $this->input->post('phone')); ?>
  <?php echo form_error('phone'); ?>
</p>
<p>Email<br>
  <?php echo form_input('email', $this->input->post('email')); ?>
  <?php echo form_error('email'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('citizens', 'cancel'); ?>
</p>
<?php echo form_close(); ?>

<script src="http://opendataph.scoollabs.com/client.js?v=<?php echo guid(); ?>"></script>
<script>
  var url = 'http://opendataph.scoollabs.com';
  $(function() {
    var municipality = 'Cebu City';
    OpenDataPH.getBarangays(url, municipality, function(response) {
      console.log(response);
      var barangays = $('#barangays');
      barangays.empty();
      $(response).each(function(i, b) {
        barangays.append('<option value="' + b.barangay + '">' + b.barangay + '</option>');
      });
    }, function() {});
  });
</script>