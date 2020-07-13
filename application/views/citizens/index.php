<h3>Citizens</h3>
<p><?php echo anchor('citizens/add', 'Add Citizen'); ?></p>
<table class="table">
  <tr>
    <th>Citizen</th>
    <th>Phone</th>
    <th>Email</th>
    <th></th>
  </tr>
  <?php foreach ($citizens as $citizen): ?>
  <tr>
    <td><?php echo to_name($citizen); ?></td>
    <td><?php echo $citizen->phone; ?></td>
    <td><?php echo $citizen->email; ?></td>
    <td>
      <?php echo anchor('citizens/edit/' . $citizen->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteCitizen('<?php echo $citizen->id; ?>', <?php echo $citizen->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteCitizen(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'citizens/delete/' + id;
    } else {
      return false;
    }
  }
</script>