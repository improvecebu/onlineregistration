<h3>Citizens</h3>
<p><?php echo anchor('citizens/add', 'Add Citizen'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Last_name</th>
    <th>First_name</th>
    <th>Middle_name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th></th>
  </tr>
  <?php foreach ($citizens as $citizen): ?>
  <tr>
    <td><?php echo $citizen->id; ?></td>
    <td><?php echo $citizen->last_name; ?></td>
    <td><?php echo $citizen->first_name; ?></td>
    <td><?php echo $citizen->middle_name; ?></td>
    <td><?php echo $citizen->address; ?></td>
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